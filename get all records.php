<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

$conn = new mysqli ($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT USERID,NAME,PLACE,PASSWORD FROM attendance";
$result =  $conn->query($sql);

if ($result->num_rows > 0)  {

    while ($row = $result->fetch_assoc()) {

        echo  $row["USERID"];
        echo "<br>";

        echo $row["PASSWORD"];
        echo "<br>";

        echo $row["PLACE"];
        echo "<br>";
    }   
}
else {
    echo "0 results";
}
$conn->close();

?>