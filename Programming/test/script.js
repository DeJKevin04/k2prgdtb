
function adjustQuantity(change, element) {
    var cardForm = element.closest('form');
    var quantityInput = cardForm.querySelector('.quantity-num');
    var priceDisplay = cardForm.querySelector('.item-price');
    var basePrice = parseFloat(cardForm.querySelector('input[name="price"]').value);
  
    var currentQuantity = parseInt(quantityInput.value);
    currentQuantity += change;
    if (currentQuantity < 1) currentQuantity = 1;
    quantityInput.value = currentQuantity;
  
    // Calculate the new price based on the quantity
    var newPrice = (basePrice * currentQuantity).toFixed(2);
    priceDisplay.textContent = '$' + newPrice;
  }