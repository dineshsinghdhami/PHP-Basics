<!-- database connection -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hii";

//database conection
$conn = mysqli_connect($servername, $username, $password, $database);

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{

// echo "Database connected successfully";
}














//to push data into server / database

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $age = $_POST['age'];
    

    // SQL Query
    $sql = "INSERT INTO 'login' ('name', 'age') VALUES ('$name', '$age')";


//execute the querey
    if ($conn->query($sql) === TRUE) {

        $insert = true;  
    
    } else {
        echo "Error: $sql <br> $conn->error";
    }
    $conn->close();  //close the database connection
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
   
</head>
<body>

   <form class="login-box" method="POST">
    <h2>Login</h2>

    <label>Name</label>
    <input type="text" name="name" placeholder="Enter your name" required>

    <label>Age</label>
    <input type="number" name="age" placeholder="Enter your age" required>

    <button type="submit" name="submit">Submit</button>
</form>


</body>
</html>
