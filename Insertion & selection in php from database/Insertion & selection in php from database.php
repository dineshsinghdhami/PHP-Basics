<!-- <?php
try{
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'pdo';

$conn = new PDO("mysql:host=$server;dbname=$db", $user, $password);
$conn -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);


//insert into database
$insertquery = "insert into studentdetail(name,age,class,gender) values ('rakesh',18,'12th','male')";
// $conn ->query($insertquery);
// $conn ->exec($insertquery);

//to select data from database
$selectquery = "select * from studentdetail where id=1";
$stmt = $conn->query($selectquery);


$result = $stmt->fetch(); //to fetch data from database.
echo "<br> <pre>";

// print_r($result);
ECHO "My name is : " . $result->name;
echo "<br>";
// echo "my age is : " . $result['age'];


}catch(PDOException $e){
    echo " Error while connecting database " . $e->getMessage();
}


?> -->