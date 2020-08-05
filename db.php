    <?php
	/* 
	Designed by : yuxcat
	Dependencies : pure.css / jquery.js - local supply
	no any external dependancies. ( no font, no boostrap )
	use with pagespeed for faster processings.
	USED AJAX
	
	for localhost use : Uni Server Zero XIV
	
	Uniform Server Version : 14.0.2
	Server : PHP 7.4.5 (cli) (built: Apr 14 2020 16:19:14) ( ZTS Visual C++ 2017 x86 )
	Database : mysql  Ver 8.0.18 for Win64 on x86_64 (MySQL Community Server - GPL)
	Check mySQL version, may cause fatal query errors due to version compatibility.
	
	Config -
	
	Databse : hms ( fill the 4th slot of $db line )
	password : localserver2020 ( fill 3rd slot of $db query line )
	*/
	
	$host = "127.0.0.1";
    $username = "root";
    $pass = "";
	$db = mysqli_connect("localhost", "root", "localserver2020", "hms");
	
    ?>
