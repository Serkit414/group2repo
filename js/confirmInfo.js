function confirmInfo()
{
    window.location.href="../pages/fuel_quote_confirmation.html"
}
function denyInfo()
{
    window.location.href="../pages/fuel_quote_form.html"
}

let price = parseInt(document.getElementById("price").textContent);
let gallonNumber = parseInt(document.getElementById("number").textContent);

let totalCost = price * gallonNumber;

document.getElementById("costAmount").textContent = totalCost;
