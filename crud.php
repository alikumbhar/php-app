<?php
include('db.php');

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $class = $_POST['class']; // Hash password
    $address = $_POST['address'];

    // Insert data into the database
    $sql = "INSERT INTO users (username, email, class, address) VALUES ('$username', '$email', '$class', '$address')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        ?> <script> window.location="index.php" </script> // Redirect to index.php after successful registration
       <?php } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
