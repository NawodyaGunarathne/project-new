<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Demo</title>
   <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
   
    justify-content: center;
    align-items: center;
    
  
}

.checkout-container {
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    width: 100%;
}

.checkout-section {
    margin-bottom: 20px;
}

h2 {
    margin-bottom: 10px;
    font-size: 1.2em;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    font-weight: bold;
    margin-bottom: 5px;
    color: #555;
}

input {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button.checkout-btn {
    background-color: #4caf50;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 10px;
}

button.checkout-btn:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>
<?php include 'header.php'; ?>
    <div class="checkout-container">
        <div class="checkout-section">
            <h2>Billing Information</h2>
            <form>
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" required>
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </form>
        </div>
        
        <div class="checkout-section">
            <h2>Shipping Information</h2>
            <form>
            <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" required>
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required>
                <label for="city">City</label>
                <input type="text" id="city" name="city" required>
                <label for="country">Country</label>
                <input type="text" id="country" name="country" required>
            </form>
        </div>
        
        <div class="checkout-section">
            <h2>Payment Information</h2>
            <form>
                <label for="cardname">Name on Card</label>
                <input type="text" id="cardname" name="cardname" required>
                <label for="cardnumber">Card Number</label>
                <input type="text" id="cardnumber" name="cardnumber" required>
                <label for="expdate">Expiration Date</label>
                <input type="text" id="expdate" name="expdate" required>
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" required>
            </form>
        </div>
        
        <button class="checkout-btn">Proceed to Payment</button>
    </div>
</body>
</html>
