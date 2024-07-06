<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/favicon.ico.png" type="image/x-icon">
    <title>Manjappai</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        h2 {
            text-align: center;
            color: #4CAF50;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        select, input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s ease-in-out;
        }

        input:hover {
            border-color: #45a049; /* Change the border color on hover */
        }

        .product-section {
            position: relative;
            display: flex;
            flex-direction: column;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 16px;
        }

        .remove-product {
            position: absolute;
            top: 0;
            right: 0;
            background-color: #ff3333;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .remove-product:hover {
            background-color: #cc0000;
        }

        .kg-option, .quantity-option {
            margin-top: 10px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Add your custom styles and animations here */

        @media only screen and (max-width: 600px) {
            select, input {
                width: 100%;
            }
        }
    </style>
    <script>
        function showOption(productSection) {
            var productSelect = productSection.querySelector('.product-select');
            var kgOption = productSection.querySelector('.kg-option');
            var quantityOption = productSection.querySelector('.quantity-option');

            kgOption.style.display = 'none';
            quantityOption.style.display = 'none';

            if (productSelect.value === 'Kizhangu(35rs/KG)') {
                kgOption.style.display = 'block';
            } else if (productSelect.value === 'spinachi') {
                quantityOption.style.display = 'block';
            }else if(productSelect.value ==='Tomato'){
                kgOption.style.display = 'block';
            }else if(productSelect.value ==='Potato'){
                kgOption.style.display = 'block';
            }

              
            
        
        
    }

        function addProduct() {
            var form = document.querySelector('form');
            var clone = document.querySelector('.product-section').cloneNode(true);
            form.insertBefore(clone, form.querySelector('.name-section'));
        }

        function removeProduct(productSection) {
            var form = document.querySelector('form');
            form.removeChild(productSection);
        }
        
    </script>
</head>
<body>
<form action="buy.php" method="post">
    <h2>Order Form</h2>

    <!--=<button type="button" onclick="addProduct()">Add Product</button>-->

    <div class="product-section">
        <!--<button type="button" class="remove-product" onclick="removeProduct(this.parentNode)">Remove Product</button>-->
        <label for="productSelect">Choose Product:</label>
        <select class="product-select" name="product" onchange="showOption(this.parentNode)">
            <option value="default" selected>Choose Product</option>
            <option value="Kizhangu(35rs/KG)">Kizhangu(35rs/KG)</option>
            <option value="spinachi">Spinach</option>
            <option value="Tomato">Tomato</option>
            <option value="Potato">Potato</option>
            <option value="Onion">Onion</option>
            <option value="Cauliflower">Cauliflower</option>
            <option value="Cucumber">Cucumber</option>
            <!-- Add more product options as needed -->
        </select>

        <div class="kg-option">
            <label for="kgInput">Enter KG:</label>
            <input type="number" name="kg" step="any" placeholder="Enter KG">
        </div>

        <div class="quantity-option">
            <label for="quantityInput">Enter Quantity:</label>
            <input type="number" name="quantity" placeholder="Enter Quantity">
        </div>
    </div>

    <div class="name-section">
        <label for="nameInput">Name:</label>
        <input type="text" name="name" placeholder="Your Name" required>
    </div>

    <label for="emailInput">Email:</label>
    <input type="email" name="email" placeholder="Your Email" required>

    <label for="addressInput">Address:</label>
    <input type="text" name="address" placeholder="Your Address" required>

    <label for="instaInput">Instagram ID (Optional):</label>
    <input type="text" name="insta" placeholder="Your Instagram ID">

    <label for="phoneInput">Phone Number:</label>
    <input type="tel" name="phone" placeholder="Your Phone Number" required>

    <button type="submit">Place Order</button>
    <p>cash on delivery available</p>
</form>

</body>
</html>


