
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="Assessment2.php" method="post">
Name: <input type="text" name="name"><br>
IC: <input type="int" name="ic"><br>
Phone Number: <input type="int" name="ph_Number"><br>
<input type="submit">
</form>




<?php 

//! Company A
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CompanyA";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create DB
$sql = "CREATE DATABASE CompanyA";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

//Create Table
$sql = "CREATE TABLE Employee 
(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(30) NOT NULL,
    dob datetime,
    passwords VARCHAR(50),
    salary float,
    bonus float,
    Leave datetime,
    MC datetime,
    Claims float,
)";

//Key in Data
$sql = "INSERT INTO Employee(fullame) VALUES ($_POST['fname'])";
$sql1 = "INSERT INTO Employee(dob) VALUES ($_POST['fname'])";
$sql2 = "INSERT INTO Employee(passwords) VALUES ($_POST['fname'])";
$sql3 = "INSERT INTO Employee(salary) VALUES ($_POST['fname'])";
$sql4 = "INSERT INTO Employee(bonus) VALUES ($_POST['fname'])";
$sql5 = "INSERT INTO Employee(Leave) VALUES ($_POST['fname'])";
$sql6 = "INSERT INTO Employee(Claims) VALUES ($_POST['fname'])";





?>

</body>
</html>






