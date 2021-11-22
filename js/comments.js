const API_URL = "api/comments";
const commentsContainer = document.getElementById('commentsContainer');
const productId = commentsContainer.getAttribute('productId');
const userRole = commentsContainer.hasAttribute('user-role')? commentsContainer.getAttribute('user-role') : "";
const commentForm = document.getElementById('commentForm');
let app = new Vue({
    el: "#app",
    data: {
        comments: [],
        userRole:userRole
    },
});  
const getComments = async ()=>{
    try {
        let response = await fetch("api/comments");
        let comments = await response.json();
        app.comments=comments;
    } catch (e) {
        console.log(e);
    }

}
document.addEventListener('DOMContentLoaded',async()=>{
    console.log(userRole);
    await getComments();
    const deleteButtons = document.getElementsByClassName('deleteButton');
    for(const dButton of deleteButtons){
        console.log(dButton);
    dButton.addEventListener('click',async()=>{
    
        const dButtonID = dButton.id.split('-')[1];
        console.log(dButtonID);
        await deleteComment(Number(dButtonID));
    })
}
})

const deleteComment = async(id)=>{
    try {
        let res = await fetch(`${API_URL}/${id}`, {
            "method": "DELETE"
        });
        if (res.status == 200) {
            console.log('eliminado exitosamente');
            getComments();
        } else {
            console.log(res.status);
        }
    } catch (error) {
        console.log(error);
    }

}
const addComment = async (comment)=>{
    try {
        console.log(comment);
        let res = await fetch("api/comments", {
            "method": "POST",
            "headers": { 'Content-Type': 'application/json'},
            "body": JSON.stringify(comment)
        });
        console.log(res.status);
        if (res.status == 201 || res.status == 200) {
            console.log('añadido con exito');
            getComments();
        }
    } catch (error) {
        console.log('error');
    }
}
commentForm.addEventListener('submit',async(e)=>{
    e.preventDefault();
    const formdata = new FormData(commentForm);
    const comment = {
        "email": formdata.get('email'),
        "message": formdata.get('message'),
        "rating": formdata.get('rating'),
        "id_product": Number(formdata.get('id_product'))
    }
    await addComment(comment);
})