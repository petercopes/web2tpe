const API_URL = "api/comments";
const commentsContainer = document.getElementById('commentsContainer');
const userRole = commentsContainer.hasAttribute('user-role')? commentsContainer.getAttribute('user-role') : "";
const productId = commentsContainer.getAttribute('product-id');
const commentForm = document.getElementById('commentForm');
let app = new Vue({
    el: "#app",
    data: {
        comments: [],
        userRole:userRole,
        filterError: ""
    },
});  
const getComments = async (rating=null,sorting=null)=>{
    try {
        let response;
        if(!rating && !sorting){
           response = await fetch(`api/comments?id_product=${productId}`);
        }
        else if(!sorting){
            response = await fetch(`api/comments?id_product=${productId}&rating=${rating}`);
        }
        else if(!rating){
            response = await fetch(`api/comments?id_product=${productId}&sort_by=${sorting}`);
        }
        else{
            response = await fetch(`api/comments?id_product=${productId}&sort_by=${sorting}&rating=${rating}`);
        }
        let comments = await response.json();
        
        if(Array.isArray(comments)){
            app.comments=comments;
            app.filterError="";
        }
        else{
            app.filterError=comments;
            app.comments=[];
        }
    } catch (e) {
        console.log(e);
        app.comments=[];
    }

}
document.addEventListener('DOMContentLoaded',async()=>{
    let rating = null;
    let sorting = null;
    await getComments();
    const deleteButtons = document.getElementsByClassName('deleteButton');
    for(const dButton of deleteButtons){
    dButton.addEventListener('click',async()=>{
    
        const dButtonID = dButton.id.split('-')[1];
        await deleteComment(Number(dButtonID));
    });
    }
    const commentRatingFilter = document.getElementById('commentRatingFilter');
    commentRatingFilter.addEventListener('change',async(e)=>{
        e.preventDefault();
        rating = e.currentTarget.value;
        await getComments(rating,sorting);
    })
    const commentSorting = document.getElementById('commentSorting');
    commentSorting.addEventListener('change',async(e)=>{
        e.preventDefault();
        sorting = e.currentTarget.value;
        await getComments(rating,sorting);
    })
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
});

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