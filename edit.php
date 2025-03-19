<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<style>
body{
    text-align: center;
    color:green;
    background-image: url("docker.png");
    background-repeat: no-repeat;
}
table {
  margin-left: auto;
  margin-right: auto;
  /* Optional: Set a width if needed */
  width: 80%;
}
</style>
<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Get user data from the database
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $class = $_POST['class']; // Hash password
    $address = $_POST['address'];

    // Update user data in the database
    $sql = "UPDATE users SET username = '$username', email = '$email', class = '$class', address = '$address' WHERE id = $id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        ?> <script> window.location="index.php" </script> // Redirect to index.php after successful registration
  <?php  } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!-- Form to update user info -->
<h2>Edit User</h2>
<form action="edit.php?id=<?php echo $id; ?>" method="POST">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required><br><br>

    <label for="email">Class:</label><br>
    <input type="text" id="class" name="class" value="<?php echo $user['class']; ?>" required><br><br>


    <label for="address">Address:</label><br>
    <textarea id="address" name="address" required><?php echo $user['address']; ?></textarea><br><br>

    <input type="submit" value="Update">
</form>
