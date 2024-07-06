<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // Database connection settings
     $servername = "localhost"; // Change this to your database server name
     $username = "id21962218_anand"; // Change this to your database username
     $password = "Yep786581."; // Change this to your database password
     $dbname = "id21962218_manjappai"; // Change this to your database name

     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);

     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }

     // Escape user inputs for security
     $name = $conn->real_escape_string($_POST['name']);
     $email = $conn->real_escape_string($_POST['email']);
     $address = $conn->real_escape_string($_POST['address']);
     $insta = $conn->real_escape_string($_POST['insta']);
     $phone = $conn->real_escape_string($_POST['phone']);
     $product = $conn->real_escape_string($_POST['product']);
     $kg = isset($_POST['kg']) ? $_POST['kg'] : null; // No need to escape since it's numeric
     $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : null; // No need to escape since it's numeric

     // Insert data into database using prepared statement
     $stmt = $conn->prepare("INSERT INTO orders (name, email, address, insta, phone, product, kg, quantity) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("ssssssdi", $name, $email, $address, $insta, $phone, $product, $kg, $quantity);

     if ($stmt->execute()) {
         echo "Order placed successfully!! Go back $ refer and shope more!! ";
     } else {
         echo "Error: " . $stmt->error;
     }

     // Close statement and connection
     $stmt->close();
     $conn->close();
 }
 ?>
 