<?php

header('Content-Type: application/json');

$msg = array("status" => true, "message" => "Successful");
$json = json_encode($msg);

echo $json;

?>