<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




/* including db file */
include "db.php";
 
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escaping user inputs for security
$selectroom_no = mysqli_real_escape_string($db, $_POST['slct']);
$checkindate = mysqli_real_escape_string($db, $_POST['checkin']);
$checkoutdate = mysqli_real_escape_string($db, $_POST['checkout']);
$roomscount = mysqli_real_escape_string($db, $_POST['roomsdd']);
$adultscount = mysqli_real_escape_string($db, $_POST['adultsdd']);
$lilcount = mysqli_real_escape_string($db, $_POST['lildd']);
 
// inserting query execution
$sql = "INSERT INTO bookings (room_no, checkin, checkout, rooms, adults, lils) VALUES ('$selectroom_no', '$checkindate', '$checkoutdate', '$roomscount', '$adultscount', '$lilcount')";
if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 
// Closing the connection
mysqli_close($db);
?>
