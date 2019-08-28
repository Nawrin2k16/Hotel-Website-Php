<?php

$db_exists = file_exists("daypilot.sqlite");

$db = new PDO('sqlite:daypilot.sqlite');

if (!$db_exists) {
    //create the database
    $db->exec("CREATE TABLE IF NOT EXISTS rooms (
                        id INTEGER PRIMARY KEY AUTOINCREMENT,
                        name TEXT,
                        capacity INTEGER,
                        status VARCHAR(30))");

    $db->exec("CREATE TABLE IF NOT EXISTS reservations (
                        id INTEGER PRIMARY KEY AUTOINCREMENT,
                        name TEXT,
                        start DATETIME,
                        end DATETIME,
                        room_id INTEGER,
                        status VARCHAR(30),
                        paid INTEGER)");

    $rooms = array(
                    array('name' => 'Room 1',
                        'id' => 1,
                        'capacity' => 2,
                        'status' => 'Dirty'),
                    array('name' => 'Room 2',
                        'id' => 2,
                        'capacity' => 2,
                        'status' => "Cleanup"),
                    array('name' => 'Room 3',
                        'id' => 3,
                        'capacity' => 2,
                        'status' => "Ready"),
                    array('name' => 'Room 4',
                        'id' => 4,
                        'capacity' => 4,
                        'status' => "Ready"),
                    array('name' => 'Room 5',
                        'id' => 5,
                        'capacity' => 1,
                        'status' => "Ready")
        );

    $insert = "INSERT INTO rooms (id, name, capacity, status) VALUES (:id, :name, :capacity, :status)";
    $stmt = $db->prepare($insert);

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':capacity', $capacity);
    $stmt->bindParam(':status', $status);

    foreach ($rooms as $r) {
      $id = $r['id'];
      $name = $r['name'];
      $capacity = $r['capacity'];
      $status = $r['status'];
      $stmt->execute();
    }

}
