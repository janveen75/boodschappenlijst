const tabel = document.getElementById('boodschappen');
const prices = document.getElementsByClassName('productPrice');
const quantities = document.getElementsByClassName('productQuantity');
const subtotals = document.getElementsByClassName('productTotalCost');
const total = document.getElementById('totalCost');

function tabelEvent(){

    let newTotal = 0;
    
    for(let i = 0; i < quantities.length; i++){    
        let newSubTotal = quantities[i].value * Number(prices[i].innerHTML);
       
        subtotals[i].innerHTML = Math.round(newSubTotal*100)/100;

        let subtotal = Number(subtotals[i].innerHTML);
        
        newTotal += subtotal;
    }

    total.innerHTML = Math.round(newTotal*100)/100;
}

tabel.addEventListener('change',tabelEvent);