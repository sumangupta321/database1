<?php

include "connection.php";

print_r($_POST);
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password=$_POST['password'];

$sql = "INSERT INTO user (`name`,`username`, `email`, `password`) VALUES ('$name', '$username', '$email', '$password')";
echo $sql;
if($result=mysqli_query($conn,$sql)){ 
    header("Location: form.php");
}else{
    echo $conn->connect_error;
    die;
}


// $sql= 'Select * from `user`';

$sql = "DELETE FROM user WHERE id BETWEEN 1 AND 50";

if ($conn->query($sql) === TRUE) {
    echo "Records deleted successfully";
} else {
    echo "Error deleting records: " . $conn->error;
}

// Close the connection
$conn->close();

?>