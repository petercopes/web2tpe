const API_URL = "/api/comments";
const commentsContainer = document.getElementById('commentsContainer');
const userToken = commentsContainer.hasAttribute('user-data')? commentsContainer.getAttribute('user-data') : "";
const userRole = commentsContainer.hasAttribute('user-role')? commentsContainer.getAttribute('user-role') : "";
const commentForm = document.getElementById('commentForm');
let app = new Vue({
    el: "#app",
    data: {
        comments: [],
        token: userToken,
        role:userRole
    },
}); 
const getComments = async ()=>{
    try {
        let response = await fetch(API_URL);
        let comments = await response.json();

        app.comments = comments;
    } catch (e) {
        console.log(e);
    }

}
const deleteButtons = document.getElementsByClassName('deleteButton');
for(const dButton of deleteButtons){
    dButton.addEventListener('click',()=>{
        const dButtonID = dButton.id.split('-')[1];
        deleteComment(dButtonID);
    })
}
const deleteComment = (id)=>{
    try {
        let res = await fetch(`${url}/${id}`, {
            "method": "DELETE"
        });
        if (res.status == 200) {
            console.log('eliminado exitosamente');
        } else {
            console.log(res.status);
        }
    } catch (error) {
        console.log(error);
    }

}
const addComment = (comment,userToken)=>{
    try {
        let res = await fetch(url, {
            "method": "POST",
            "headers": { 'Content-Type': 'application/json','Authorization:':userToken},
            "body": JSON.stringify(comment)
        });
        console.log(res.status);
        if (res.status == 201) {
            console.log('añadido con exito');
        }
    } catch (error) {
        console.log('error');
    }
}
commentForm.addEventListener('submit',(e)=>{
    e.preventDefault();
    const formdata = new FormData(commentForm);
    const comment = {
        username: formdata.get('name'),
        message: formdata.get('message'),
        rating: formdata.get('rating')
    }
    addComment(comment,userToken);
})