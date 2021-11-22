const API_URL = "api/comments";
const commentsContainer = document.getElementById('commentsContainer');
const productId = commentsContainer.getAttribute('productId');
const userRole = commentsContainer.hasAttribute('user-role')? commentsContainer.getAttribute('user-role') : "";
const commentForm = document.getElementById('commentForm');
/* let app = new Vue({
    el: "#app",
    data: {
        comments: [],
        userRole:userRole
    },
});  */
const getComments = async ()=>{
    try {
        console.log("entra");
        let response = await fetch("api/comments");
        console.log("res", response);
        let comments = await response.json();
        console.log("comments", comments);
    } catch (e) {
        console.log(e);
    }

}
document.addEventListener('DOMContentLoaded',async()=>{
    await getComments();
})
const deleteButtons = document.getElementsByClassName('deleteButton');
for(const dButton of deleteButtons){
    dButton.addEventListener('click',async()=>{
        const dButtonID = dButton.id.split('-')[1];
        await deleteComment(dButtonID);
    })
}
const deleteComment = async(id)=>{
    try {
        let res = await fetch(`${API_URL}/${id}`, {
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
const addComment = async (comment)=>{
    try {
        console.log(comment);
        let res = await fetch("api/comments", {
            "method": "POST",
            "headers": { 'Content-Type': 'application/json'},
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
    getComments();
})