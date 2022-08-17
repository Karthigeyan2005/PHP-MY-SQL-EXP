<?php

$email =  $_GET["email"];
$pwd = $_GET["password"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email, name,password,place FROM attendance where email='" .$email."'and password='" .$pwd. "'; ";

$result =  $conn->query($sql);


if ($result->num_rows > 0)  {

    while ($row = $result->fetch_assoc()) {

        echo"LOGIN Success!";
    }
} 

else{
    echo "LOGIN Failed!";
}

$conn->close();

?>