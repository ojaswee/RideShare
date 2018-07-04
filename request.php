	<title>Request</title> 
	<link rel="stylesheet" href="styles/style.css" media="all"/>
	<h1>Your Requested Trips</h1>
		<!--Header Wrapper Starts-->
		<div id="head_wrap">
		</div>
		<!--Header Wrapper ends-->	
<?php
include('session.php');

include("includes/functions.php");

$con = mysqli_connect("localhost","root","","rideshare") or die("Connection was not established");
			$select = "SELECT trip.origin,trip.destination, student.email, student.phone,trip.tripdate
			FROM student,passenger , trip WHERE passenger.f = trip.origin and passenger.t=trip.destination 
			and passenger.d=trip.tripdate and student.username=passenger.username and trip.username='$login_session'";
			$run = mysqli_query($con,$select); 
while($row_posts=mysqli_fetch_array($run)){
		$origin = $row_posts['origin'];
		$destination = $row_posts['destination'];
		$tripDate=$row_posts['tripdate'];
		$email=$row_posts['email'];
		$phone=$row_posts['phone'];
echo "Origin: " , "  ", $origin," <br/>", "Destination: " , "  ", $destination," <br/>"
	,"TripDate: " , "  ", $tripDate," <br/>","Email: " , $email, "   " , " <br/>" ,"Phone: " , "  ", $phone, " <br/>" ;
		
		echo "<br/>" ,"<hr/>";
}
				mysqli_close($con);
		
			
?>
	<div id = "tooplate_footer">
		<?php require('footer.php'); ?>
	</div>

