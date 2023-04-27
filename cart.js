var gl=0;
var price = document.getElementsByClassName('price');
var qnty = document.getElementsByClassName('qnty');
var total = document.getElementsByClassName('total');
var grandtotal = document.getElementById('grandtotal');
var TXN_AMOUNT = document.getElementById('TXN_AMOUNT');
function subtotal()
{
for(i=0;i<price.length;i++)
{
    gl=0;
    total[i].innerText=(price[i].value)*(qnty[i].value);
    gl=gl+(price[i].value)*(qnty[i].value);
}
grandtotal.innerText=gl;  
TXN_AMOUNT.value=gl;
}
subtotal();