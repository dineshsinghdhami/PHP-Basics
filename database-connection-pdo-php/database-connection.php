<!-- Technique 1 for database connection -->
<!-- <?php
try{
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'pdo';

$conn = new PDO("mysql:host=$server;dbname=$db",$user,$password);

}catch(PDOException $er){
    echo "error while connecting db" . $e->getMessage();
}


?> -->

<!-- Technique 2 for database connection -->
 <!-- 
<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'pdo';

$conn = new PDO("mysql:host=$server;dbname=$db",$user,$password);
if($conn){
    echo "datbase connected";
}
else{
    echo " not connected";
}


?>
 -->