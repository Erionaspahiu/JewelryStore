
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Checkout</title>
  <link rel="stylesheet" href="products.css" />
</head>
<body>
    <style>
        body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background: #f8f3f0;
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #f9e5ea;
  padding: 15px 30px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

header img {
  height: 50px;
}

header a {
  text-decoration: none;
  color: #333;
  font-size: 18px;
}

.container {
  max-width: 1200px;
  margin: auto;
  padding: 20px;
}

h2 {
  text-align: center;
  color: #c44569;
  margin-bottom: 30px;
}

.checkout-form {
  background: #fff;
  border-radius: 15px;
  padding: 20px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.checkout-form h3 {
  color: #c44569;
  margin-bottom: 20px;
}

.checkout-form label {
  font-size: 16px;
  color: #333;
  margin-bottom: 10px;
  display: block;
}

.checkout-form input,
.checkout-form select,
.checkout-form textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ddd;
  border-radius: 8px;
  font-size: 16px;
  background-color: #f9f9f9;
}

.checkout-form input[type="text"]:focus,
.checkout-form select:focus,
.checkout-form textarea:focus {
  border-color: #c44569;
}

.checkout-form button {
  background-color: #c44569;
  color: white;
  border: none;
  padding: 15px 25px;
  font-size: 18px;
  border-radius: 8px;
  cursor: pointer;
  width: 100%;
}

.checkout-form button:hover {
  background-color: #a23555;
}

.checkout-summary {
  background: #fff;
  padding: 20px;
  margin-top: 30px;
  border-radius: 15px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.checkout-summary h3 {
  color: #c44569;
  margin-bottom: 20px;
}

.checkout-summary p {
  font-size: 18px;
  color: #333;
}

.checkout-summary .total {
  font-weight: bold;
  font-size: 20px;
  margin-top: 20px;
}

.checkout-summary button {
  background-color: #c44569;
  color: white;
  border: none;
  padding: 15px 25px;
  font-size: 18px;
  border-radius: 8px;
  cursor: pointer;
  width: 100%;
  margin-top: 20px;
}

.checkout-summary button:hover {
  background-color: #a23555;
}

    </style>
  <header>
  <a href="index.php">
  <img src="img/G-removebg-preview.png" alt="logo" />
  </a>
    <a href="products.php">← Back to Products</a>
  </header>

  <div class="container">
    <h2 style="text-align:center; color:#c44569;">Checkout</h2>
    <div class="checkout-summary">
      <h3>Your Cart</h3>
      <div class="cart-items" id="cart-items"></div>
      <div class="cart-total" id="cart-total"></div>

      <button onclick="proceedToPayment()">Proceed to Payment</button>
    </div>
  </div>

  <script>
    // Get cart from localStorage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    const itemsContainer = document.getElementById("cart-items");
    const totalContainer = document.getElementById("cart-total");

    if (cart.length === 0) {
      itemsContainer.innerHTML = "<p class='empty'>Your cart is empty.</p>";
    } else {
      let total = 0;
      cart.forEach((item, index) => {
        itemsContainer.innerHTML += `<p>${index + 1}. ${item.name} - $${item.price.toFixed(2)}</p>`;
        total += item.price;
      });
      totalContainer.innerText = "Total: $" + total.toFixed(2);
    }

    function proceedToPayment() {
      if (cart.length === 0) {
        alert("Your cart is empty. Please add items to the cart before proceeding.");
      } else {
        // Example for proceeding with payment (you can customize this as per your needs)
        alert("Proceeding to payment...");
        // Here you could redirect to a payment page or process the payment
      }
    }
  </script>

</body>
</html>