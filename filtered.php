<html>

<head>
<link rel="stylesheet" href="css/pure.css">
<link rel="stylesheet" href="css/rooms.css">
</head>
<body>

 <?php
include "db.php"; // Using database connection file here
$records = mysqli_query($db, "SELECT *
FROM rooms
WHERE room_no NOT IN (
   SELECT DISTINCT room_no
   FROM bookings
   WHERE checkin <= '2020-08-01' AND checkout >= '2020-08-01')"); // fetch data from database
while ($data = mysqli_fetch_array($records))
{
?>


<div class="room1" >

<div>
<label  class="lb1" > Room No :</label>
<?php echo $data['room_no']; ?>
</div>


<div>
<label  class="lb1" > Room Type :</label>
<?php echo $data['type']; ?>
</div>

<div>
<label  class="lb1" > Room's rate :</label>
<?php echo $data['rate']; ?>
</div>

<div class="select_btn">
<label for="checkbox-radio-option-three" class="pure-radio">
        <input type="radio" id="checkbox-radio-option-three" name="slct" value="<?php echo $data['room_no']; ?>" /> Select this</label>
</div>
</div>

<?php
}
?>
    <?php mysqli_close($db); // Close connection
 ?>






</div>





</div>






</body>
</html>
