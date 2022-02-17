let price = parseInt(document.getElementById("price").textContent);
let gallonNumber = parseInt(document.getElementById("number").textContent);

let totalCost = price * gallonNumber;

document.getElementById("costAmount").textContent = totalCost;
