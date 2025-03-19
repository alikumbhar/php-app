<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the user from the database
    $sql = "DELETE FROM users WHERE id = $id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        ?> <script> window.location="index.php" </script> // Redirect to index.php after successful registration
  <?php } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
