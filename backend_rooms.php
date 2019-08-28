<?php
require_once '_db.php';

$stmt = $db->prepare("SELECT * FROM rooms WHERE capacity = :capacity OR :capacity = '0' ORDER BY name");
$stmt->bindParam(':capacity', $_POST['capacity']); 
$stmt->execute();
$rooms = $stmt->fetchAll();

class Room {}

$result = array();

foreach($rooms as $room) {
  $r = new Room();
  $r->id = $room['id'];
  $r->name = $room['name'];
  $r->capacity = $room['capacity'];
  $r->status = $room['status'];
  $result[] = $r;
  
}

header('Content-Type: application/json');
echo json_encode($result);

?>
