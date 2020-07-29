    <?php
	/* 
	Designed by : yuxcat / http://yuxcat.com
	Dependencies : pure.css / jquery.js - local supply
	no any external dependancies. ( no font, no boostrap )
	use with pagespeed for faster processings.
	USED AJAX
	
	for localhost use : EasyPHP DevServer 
	
	EasyPHP Version :
	Server : Apache 2.4.25 x86 - PHP 5.6.30 x86 | Port: 80
	Database : MySQL 5.7.17 x86 | Port: 3306
	Check mySQL version, may cause query errors due to version compatibility.
	
	Config -
	
	Databse : hms ( fill the 4th slot of $db line )
	password : none ( fill 3rd slot of $db query line )
	
	
	*/
    $db = mysqli_connect("localhost","root","","hms");
    if(!$db)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>
