<?php
require_once '_db.php';

$stmt = $db->prepare("SELECT * FROM reservations WHERE NOT ((end <= :start) OR (start >= :end))");
$stmt->bindParam(':start', $_POST['start']);
$stmt->bindParam(':end', $_POST['end']);
$stmt->execute();
$result = $stmt->fetchAll();

class Event {}
$events = array();

date_default_timezone_set("UTC");
$now = new DateTime("now");
$today = $now->setTime(0, 0, 0);

foreach($result as $row) {
    $e = new Event();
    $e->id = $row['id'];
    $e->text = $row['name'];
    $e->start = $row['start'];
    $e->end = $row['end'];
    $e->resource = $row['room_id'];
    $e->bubbleHtml = "Reservation details: <br/>".$e->text;
    
    // additional properties
    $e->status = $row['status'];
    $e->paid = $row['paid'];
    $events[] = $e;

    /*
        int paid = Convert.ToInt32(e.DataItem["ReservationPaid"]);
        string paidColor = "#aaaaaa";

        e.Areas.Add(new Area().Bottom(10).Right(4).Html("<div style='color:" + paidColor + "; font-size: 8pt;'>Paid: " + paid + "%</div>").Visibility(AreaVisibility.Visible));
        e.Areas.Add(new Area().Left(4).Bottom(8).Right(4).Height(2).Html("<div style='background-color:" + paidColor + "; height: 100%; width:" + paid + "%'></div>").Visibility(AreaVisibility.Visible));  
     * */
}

header('Content-Type: application/json');
echo json_encode($events);

?>
