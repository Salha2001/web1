<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$query = "select * from robot movement order by id desc limit 1";

$result = $conn->query($query);

if ($result) {
    $row = $result->fetch_assoc();

    if ($row) {
        $EE = $row['direction'];

       
        echo "Last movement is: $EE";
    } else {
        echo "frist movements";
    }
} else {
    echo "Error " . $conn->error;
}


$conn->close();
?>
