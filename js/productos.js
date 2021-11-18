"use strict"
const API_PRODUCT_URL = "api/productos";

document.getElementById("productForm").addEventListener("submit", addProduct);

async function getProducts() {
    try {
        let response = await fetch(API_PRODUCT_URL);
        let products = await response.json();
        return products;
    } catch (e) {
        console.log(e);
    }
}

async function addProduct(e) {
    console.log("as");
    e.preventDefault();
    alert("Si te animás hace el POST via fetch ;)");
}

getTareas();