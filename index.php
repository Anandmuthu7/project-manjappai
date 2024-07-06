<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/favicon.ico.png" type="image/x-icon">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: grey white;
            color: #333;
            /*background-image: url("https://images.pexels.com/photos/18561395/pexels-photo-18561395/free-photo-of-clouds-on-yellow-sky-at-sunset.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");*/
            position:no repeat;
        }

        /* Header Styles */
        .header {
            background-color: #f5eded;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        .marquee {
            font-size: 24px;
            font-weight: bold;
            color:#cc8109fb;
            overflow: hidden;
            white-space: nowrap;
        }

        .marquee span {
            display: inline-block;
            padding-left: 100%;
            animation: marquee 15s linear infinite;
        }

        @keyframes marquee {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        /* Top Bar Styles */
        .top-bar {
            background-color:green;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            corner: radius 3px;
        }

        .top-bar a {
            color: white;
            text-decoration: none;
            margin: 0 10px;

        }
        .top-bar a:hover{
            color:Yellow;
            text-decoration:underline;
        }
        
        /* Container Styles */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Product Styles */
        .products-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 20px 0;
        }

        .product-card {
            background-color: white;
            border: 1px solid #ddd;
            padding: 20px;
            margin: 10px;
            width: 70px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
            border-radius: 45px;
            
        }

        .product-card:hover {
            transform: scale(1.05);
            background-color: grey;
            transition: background-color 1s ease-in-out;

        }

        .product-card img {
            max-width: 100%;
            height:100px;
            width:200px;
            margin-bottom: 15px;
            border: radius 0;
        }

        .buy-button {
            background-color: #ff6600;
            color: white;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            height
        }

        .buy-button:hover {
            background-color: green;
        }

        /* Footer Styles */
        .footer {
            background-color: rgb(3 5 6);
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .footer a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        .footer img{
            height: 32px;
            width: 31px;
        }
       
        

        @media screen and (max-width: 768px) {
            .products-container {
                justify-content: center;
            }

            .product-card {
                width:30%;
            }
            
    }
    </style>
    <title>Manjappai</title>
</head>
<body>
    <!-- Header Section -->
    <div class="header">
        <div class="marquee"><span>Manjappai-All your choice</span></div>
    </div>

    <!-- Top Bar Navigation -->
    <div class="top-bar">
        <span><img src="image/favicon.ico.png" alt="logo" height="35px" width="35px"></span>
        <nav>
            <a href="#">Home</a>
            <a href="#">Details</a>
            <a href="#">About</a>
            <a href="#">More</a>
        </nav>
    </div>

    <!-- Main Content Container -->
    <div class="container">
        <div class="products-container">
            <!-- Product cards will be dynamically generated here using JavaScript -->
        </div>
    </div><br><br>
    <center><div><img src="favicon.ico.png" alt="company" ></div></center>

    <!-- Footer Section -->
    <div class="footer">
        <a href="https://whatsapp.com/channel/0029VaOGooEAjPXGlcXbGa2s">
            <img class="footer-logo" src="image/whats.png" alt="WhatsApp">
        </a>
        <a href="https://www.instagram.com/manja_ppai.official?igsh=MWw3ajJjMHgxbHc5OQ%3D%3D">
            <img class="footer-logo" src="image/insta.png" alt="Instagram">
        </a>
        <a href="#">
            <img class="footer-logo" src="image/telegram.png" alt="telegram" >
        </a>
        <div class="copyright">
            &copy; 2024 Manjappai. All rights reserved.
        </div>
    </div>

    <!-- JavaScript Section -->
    <script>
    // This is where you can dynamically generate product cards and handle other interactions if needed.
    // For simplicity, let's assume you have an array of products.

    const products = [
        { name: "Kizhangu", image: "https://ootymaligai.com/wp-content/uploads/2020/07/image10.jpg", price: "250.00" },
        { name: "Kizhangu", image: "https://ootymaligai.com/wp-content/uploads/2020/07/image10.jpg", price: "250.00" },
        { name: "Kizhangu", image: "https://ootymaligai.com/wp-content/uploads/2020/07/image10.jpg", price: "250.00" },
        { name: "Kizhangu", image: "https://ootymaligai.com/wp-content/uploads/2020/07/image10.jpg", price: "250.00" },
        { name: "Kizhangu", image: "https://ootymaligai.com/wp-content/uploads/2020/07/image10.jpg", price: "250.00" },
        { name: "Kizhangu", image: "https://ootymaligai.com/wp-content/uploads/2020/07/image10.jpg", price: "250.00" },
       
        // Add more products as needed
    ];

    const productsContainer = document.querySelector('.products-container');

    products.forEach(product => {
        const productCard = document.createElement('div');
        productCard.className = 'product-card';

        const productImage = document.createElement('img');
        productImage.src = product.image;
        productImage.alt = product.name;

        const productName = document.createElement('p');
        productName.innerText = product.name;

        const productPrice = document.createElement('p');
        productPrice.innerText = `₹${product.price}`;

        const buyButton = document.createElement('a');
        buyButton.className = 'buy-button';
        buyButton.href = 'order.php'; // Replace '#' with your actual buy link
        buyButton.innerText = 'Buy Now';

        productCard.appendChild(productImage);
        productCard.appendChild(productName);
        productCard.appendChild(productPrice);
        productCard.appendChild(buyButton);

        productsContainer.appendChild(productCard);
    });
</script>

</body>
</html>
