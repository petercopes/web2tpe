"use strict"
const API_PRODUCT_URL = "api/productos";

document.getElementById("productForm").addEventListener("submit", addProduct);
document.getElementById("removeProduct").addEventListener("click",removeProduct);
async function getProducts() {
    try {
        let response = await fetch(API_PRODUCT_URL);
        let products = await response.json();
        console.log("products", products);
        return products;
    } catch (e) {
        console.log(e);
    }
}

async function addProduct(e) {
    
}
async function removeProduct(e){

}
getTareas();