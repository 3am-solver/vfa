<?php

header('Content-Type: application/json');

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM `users`";

$connection = mysqli_connect('localhost', 'root', '', 'test');
$result = mysqli_query($connection, $query);
mysqli_close($connection);

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

$response = array("status" => true, "data" => $rows);
echo json_encode($response);

?>