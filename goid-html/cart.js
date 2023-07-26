// const openBtn = document.getElementById('cartbtn');
const cart = document.getElementById('sidecart');
closeBtn = document.getElementById('close_btn');

openBtn.addEventListener('click',openCart);
closeBtn.addEventListener('click',closeCart);

// function openCart(){
//     document.write("dgbmnml");
//     cart.classList.add(openBtn);
// }

// function closeCart(){
//     cart.classList.remove(closeBtn);
// }


function incrementQuantity() {
    var quantityElement = document.getElementById('increment');
    var currentQuantity = parseInt(quantityElement.innerHTML);
    quantityElement.innerHTML = currentQuantity + 1;
}

function decrementQuantity() {
  var quantityElement = document.getElementById('decrement');
  var currentQuantity = parseInt(quantityElement.innerHTML);
  if (currentQuantity > 1) {
    quantityElement.innerHTML = currentQuantity - 1;
  }
}