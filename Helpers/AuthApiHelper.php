<?php

function base64url_encode($data) {
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

class AuthApiHelper{
    private $key;

    function __construct(){
        $this->key = "qwerty1234";
    }

    function getBasic(){
        $header = $this->getHeader();
        // Basic base64(user:pass)
        // ^
        if(strpos($header,"Basic ")===0){
            // base64(user:pass)
            $usrpass = explode(" ",$header)[1];
            // user:pass
            $usrpass = base64_decode($usrpass);
            $usrpass = explode(":", $usrpass);
            if(count($usrpass)==2){
                $user = $usrpass[0];
                $pass = $usrpass[1];
                return array(
                    "user" => $user,
                    "pass" => $pass
                );
            }
        }
        return null;
    }

    function getUser(){
        $header = $this->getHeader();
        // Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsIm5hbWUiOiJ1c3VhcmlvMSIsInJvbCI6WyJhZG1pbiIsIm90aGVyIl19.6mRGSZGxCeBuQWp5daMmkNbNMWeaQFzF77a7SCqNXuo
        if(strpos($header,"Bearer ")===0){
            $token = explode(" ", $header)[1];
            $parts = explode(".", $token);
            if(count($parts)===3){
                $header = $parts[0];
                $payload = $parts[1];
                $signature = $parts[2];
                $new_signature = hash_hmac('SHA256', "$header.$payload", $this->key, true);
                $new_signature = base64url_encode($new_signature);
                if($signature == $new_signature){
                    $payload = base64_decode($payload);
                    $payload = json_decode($payload);
                    if(true/*$payload->exp < $now*/){
                        return $payload;
                    }
                }
            }
        }
        return null;
    }

    public function createToken($user)
    {
        $header = array(
            'alg' => 'HS256',
            "typ" => 'JWT'
        );
        $payload = array(
            "sub" => 1,
            "name" => $user["user"],
            "rol" => ["admin", "user"]
        );
        $header = base64url_encode(json_encode($header));
        $payload = base64url_encode(json_encode($payload));
        $signature = hash_hmac('SHA256', "$header.$payload", $this->key, true);
        $signature = base64url_encode($signature);
        return "$header.$payload.$signature";
    }

    function getHeader()
    {
        if(isset($_SERVER["REDIRECT_HTTP_AUTHORIZATION"])){
            return $_SERVER["REDIRECT_HTTP_AUTHORIZATION"];
        }
        if(isset($_SERVER["HTTP_AUTHORIZATION"])){
            return $_SERVER["HTTP_AUTHORIZATION"];
        }
        return null;
    }

}
