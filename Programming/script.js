
  // Function to filter cards based on search input
  function filterCards() {
    // Get the value of the search input
    let searchInput = document.querySelector('.search-bar input').value.toLowerCase();
    
    // Get all the card elements
    let cards = document.querySelectorAll('.card');
    
    // Loop through all cards
    cards.forEach(function(card) {
      // Get the title of the card
      let title = card.querySelector('h4').textContent.toLowerCase();
      
      // If the title includes the search input, display the card, otherwise hide it
      if (title.includes(searchInput)) {
        card.style.display = '';
      } else {
        card.style.display = 'none';
      }
    });
  }
  
  // Add event listener to the search button
  document.querySelector('.search-bar button').addEventListener('click', filterCards);
  
  // Add event listener to the search input for 'Enter' key press
  document.querySelector('.search-bar input').addEventListener('keyup', function(event) {
    if (event.key === 'Enter') {
      filterCards();
    }
  });


// Event listener for the search button click
document.querySelector('.search-bar button[type="submit"]').addEventListener('click', function(event) {
  event.preventDefault(); // Prevent the default form submission
  searchAndNavigate();
});

// Event listener for the search input 'Enter' key press
document.querySelector('.search-bar input').addEventListener('keyup', function(event) {
  if (event.key === 'Enter') {
    searchAndNavigate();
  }
});

// Add this JavaScript function to show all card items
function showAllItems() {
  // Select all the card elements
  let cards = document.querySelectorAll('.card');
  
  // Loop through all cards and set their display to ''
  cards.forEach(function(card) {
    card.style.display = '';
  });
}

// Add this JavaScript function to clear the search input when the delete button is clicked
function clearSearchInput() {
  // Select the search input element
  var searchInput = document.querySelector('.search-bar input');
  
  // Clear the value of the search input
  searchInput.value = '';
  
  // Hide the delete button
  var deleteButton = document.querySelector('.search-bar .delete-btn');
  deleteButton.style.display = 'none';
  
  // Optionally, you can also reset the display of all cards here
  var cards = document.querySelectorAll('.card');
  cards.forEach(function(card) {
    card.style.display = 'none';
  });
}

// Add event listener to the search input to show the delete button when there is text
document.querySelector('.search-bar input').addEventListener('input', function() {
  var deleteButton = document.querySelector('.search-bar .delete-btn');
  if (this.value.length > 0) {
    deleteButton.style.display = 'inline-block';
  } else {
    deleteButton.style.display = 'none';
  }
});

// JavaScript function to update the price based on the quantity input
function updatePrice(input) {
  var quantity = input.value || 1; // Use 1 as the default quantity if the input is empty
  var pricePerItem = parseFloat(input.dataset.price); // Retrieve the price per item from the data attribute
  var totalPrice = (quantity * pricePerItem).toFixed(2); // Calculate the total price
  input.closest('.container').querySelector('.item-price').textContent = totalPrice;
}

// Call updatePrice on page load for each item-quantity input to set the default price
document.querySelectorAll('.item-quantity').forEach(input => {
  // Set the price from the data attribute
  var pricePerItem = input.dataset.price;
  input.closest('.container').querySelector('.item-price').textContent = pricePerItem;
  updatePrice(input);
});

// Add event listeners to all quantity inputs to update the price on change
document.querySelectorAll('.item-quantity').forEach(input => {
  input.addEventListener('input', function() {
    updatePrice(this);
  });
});

// Function to simulate an 'Enter' key press
function simulateEnterKeyPress() {
  // Create a new 'Enter' keypress event
  var enterKeyPressEvent = new KeyboardEvent('keypress', { key: 'Enter', code: 'Enter', charCode: 13, keyCode: 13, which: 13 });

  // Dispatch it on the search input field
  document.querySelector('.search-bar input').dispatchEvent(enterKeyPressEvent);
}

// Add the event listener to your search icon
document.querySelector('.search-bar .search-btn').addEventListener('click', simulateEnterKeyPress);

// Your existing event listener for the 'Enter' key press
document.querySelector('.search-bar input').addEventListener('keypress', function(event) {
  if (event.key === 'Enter') {
    // Call your search function here
    filterCards();
  }
});
document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.add-to-cart-button');
  
    addToCartButtons.forEach(button => {
      button.addEventListener('click', function() {
        const product_id = this.dataset.productId;
        const quantity = this.closest('.card').querySelector('.quantity-num').value;
  
        // Call the addToCart function from cart.js
        addToCart(product_id, quantity, function(err, results) {
          if (err) {
            // Handle errors (e.g., display an error message to the user)
            console.error('Error adding to cart:', err);
          } else {
            // Handle success (e.g., display a success message or update the cart UI)
            console.log('Item added to cart:', results);
          }
        });
      });
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.add-to-cart-button');
  
    addToCartButtons.forEach(button => {
      button.addEventListener('click', function() {
        // Your existing code to handle the add to cart functionality
  
        // Pop-up alert
        alert('Item has been added to your cart!');
      });
    });
  });
  document.addEventListener('DOMContentLoaded', function() {
  const addToCartButtons = document.querySelectorAll('.add-to-cart-button');
  const modal = document.getElementById('myModal');
  const span = document.getElementsByClassName('close')[0];

  addToCartButtons.forEach(button => {
    button.addEventListener('click', function() {
      // Your existing code to handle the add to cart functionality

      // Display the modal
      modal.style.display = 'block';
    });
  });

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = 'none';
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = 'none';
    }
  }
});
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.add-to-cart-button');
    const modal = document.getElementById('myModal');
    const modalText = modal.querySelector('p'); // Get the paragraph where the text will be displayed
    const span = document.getElementsByClassName('close')[0];
    const okayBtn = document.getElementById('modal-okay-btn'); // Get the Okay button
  
    addToCartButtons.forEach(button => {
      button.addEventListener('click', function() {
        const productId = this.dataset.productId; // Assume each button has a data-product-id attribute
  
        // Update the modal text to include the product ID
        modalText.textContent = 'Item with ID ' + productId + ' has been added to your cart!';
  
        // Display the modal
        modal.style.display = 'block';
      });
    });
  
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = 'none';
    }
  
    // When the user clicks on the Okay button, close the modal
    okayBtn.onclick = function() {
      modal.style.display = 'none';
    }
  
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = 'none';
      }
    }
  });
  document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('feedbackForm');
    var thankYouMessage = document.getElementById('thankYouMessage');

    form.onsubmit = function(e) {
        e.preventDefault();
        // Perform form submission tasks here, such as sending data to a server
        // For demonstration purposes, we'll just display a thank you message
        thankYouMessage.textContent = 'Thank you for your feedback!';
        form.reset(); // Reset the form fields
    };
});
form.addEventListener('submit', function(event) {
    event.preventDefault();
    // AJAX code to submit form data
  });
  