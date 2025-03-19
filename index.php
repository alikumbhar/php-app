<!DOCTYPE html>
<html lang="en">
<he>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
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
</head>
<body>

<h2>NEW User Information Form</h2>

<form action="crud.php" method="POST">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="class">Class:</label><br>
    <input type="text" id="text" name="class" required><br><br>


    <label for="address">Address:</label><br>
    <textarea id="address" name="address" required></textarea><br><br>

    <input type="submit" value="Submit">
</form>

<h3>Users List</h3>
<?php
include('db.php');

// Fetch and display user information
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' >
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>class</th>
                <th>Address</th>                
                <th>Actions</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['username']}</td>
                <td>{$row['email']}</td>
                <td>{$row['class']}</td>                
                <td>{$row['address']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a> | 
                    <a href='delete.php?id={$row['id']}'>Delete</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No users found.";
}
?>

</body>
</html>
