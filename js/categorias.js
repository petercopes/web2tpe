"use strict"
const API_CATEGORY_URL = "api/categorias";

document.getElementById("categoryForm").addEventListener("submit", addCategory);

async function getCategorias() {
    // fetch para traer todas las tareas
    try {
        let response = await fetch(API_CATEGORY_UR);
        let categories = await response.json();
        return categories;
    } catch (e) {
        console.log(e);
    }
}

async function addCategory(e) {
    
}
async function removeCategory(e) {
    
}

getTareas();