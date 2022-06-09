<?php

header('Content-Type: application/json');

$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO `users` (`Email`, `Password`, `Type`) VALUES ('$email', '$password', 'User')";

$connection = mysqli_connect('localhost', 'root', '', 'test');
mysqli_query($connection, $query);
mysqli_close($connection);

$response = array("status" => true, "message" => "Registration successful");
echo json_encode($response);

?>