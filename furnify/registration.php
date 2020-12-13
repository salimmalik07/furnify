
 <?php
 session_start();
 header('location:index.html');
//  if(isset($_POST['login'])){
$databasename = $_POST['databasename'];
$hostname = $_POST['hostname'];
$username = $_POST['username'];
$password = $_POST['password'];

// Create connection
$conn = mysqli_connect($hostname, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE $databasename";
$conn->query($sql);

$link = mysqli_connect("$hostname","$username","$password","$databasename");
$sq = "CREATE TABLE Products (
  price INT(16) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  productname VARCHAR(30) NOT NULL,
  productimages VARCHAR(30) NOT NULL,
  stock VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  $result = $link->query($sq);

 
 
?> 


