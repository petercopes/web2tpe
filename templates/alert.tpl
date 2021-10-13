{if $result eq "success"}
  <div class="alert alert-success w-25 m-auto text-center" role="alert">
    {$alertMessage}
  </div>
{else}
  <div class="alert alert-danger w-25 m-auto text-center" role="alert">
    {$alertMessage}
  </div>
{/if}