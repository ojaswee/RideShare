<!-- This file is used to connect to the database 
Name of my database is rideShare--> 
<link type="text/css" href="style.css" rel="stylesheet">
<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'rideShare');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
