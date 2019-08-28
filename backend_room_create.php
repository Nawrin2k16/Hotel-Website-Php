<?php
require_once '_db.php';

$stmt = $db->prepare("INSERT INTO rooms (name, capacity, status) VALUES (:name, :capacity, 'Ready')");
$stmt->bindParam(':name', $_POST['name']);
$stmt->bindParam(':capacity', $_POST['capacity']);
$stmt->execute();

class Result {}

$response = new Result();
$response->result = 'OK';
$response->message = 'Created with id: '.$db->lastInsertId();
$response->id = $db->lastInsertId();

header('Content-Type: application/json');
echo json_encode($response);

?>
