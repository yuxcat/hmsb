<?php
/*echo $_POST["checkin"];
echo $_POST["checkout"];
echo $_POST["roomsdd"];
echo $_POST["adultsdd"];
echo $_POST["lildd"];

/* @mysql : error hiding : use mySQL or PDO since mysql extention will remove in the future */
$con = @mysql_connect("localhost", "root", "");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("roomdb", $con);
$sql = "INSERT INTO rooms (checkin, checkout, roomq, adults, lils)
VALUES
('$_POST[checkin]','$_POST[checkout]','$_POST[roomsdd]','$_POST[adultsdd]','$_POST[lildd]')";
if (!mysql_query($sql, $con))
{
    die('Error: ' . mysql_error());
}

header('Location: order.php');
echo "1 record added";
mysql_close($con)
?>
