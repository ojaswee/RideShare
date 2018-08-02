<head>
    <link rel="stylesheet" href="styles/style.css" media="all"/>
	<title>Available Trips </title>

</head>
	<h1>Available Trips </br> </h1> 
		<div id="head_wrap"></div></br>

<?php
include('session.php');
	$con = mysqli_connect("localhost","root","","rideshare") or die("Connection was not established");

	$get_posts = "select * from trip ";
	
	$run_posts = mysqli_query($con,$get_posts);
	while($row_posts=mysqli_fetch_array($run_posts)){
		$from=$row_posts['origin'];
		$to=$row_posts['destination'];
		$date=$row_posts['tripdate'];
		$time=$row_posts['triptime'];
		$number=$row_posts['number'];
		
		echo "From: " , $from , "<br/>" , "To: " , $to ,"<br/>" , "Date: " , $date, "<br/>", 
		"Time: " , $time ,"<br/>" ,"Number of Passenger: " , $number;
		

	
		<form method="POST" action="yourtrips.php">
		<input type= "hidden" name="txtfrom"  value=  "<?php echo "$from" ?>" />
		<br/>
		<input type= "hidden" name="txtto"  value=  "<?php echo "$to" ?>" />
		<input type= "hidden" name="txtdate"  value=  "<?php echo "$date" ?>" />
		<input type="submit" value = "join" name="btnjoin" />
		</form><hr/> 

		}

?>
	<div id = "tooplate_footer">
	<?php
		require('footer.php');
	?>
	</div>





