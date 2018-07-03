<!--In this page you are pulling data for logged in user and displaying their trips 
When a user see all their trips they can edit their trip if they wish to by clicking on "Edit Trip button"-->  
<head>
      <link rel="stylesheet" href="styles/style.css" media="all"/>
	  <title>Your trips </title>
	  <h1>Your trips</h1>   

   </head>
   <body>
   		<!--Header Wrapper Starts-->
		<div id="head_wrap">
		</div>
		<!--Header Wrapper ends-->
<!-- First make the connection to database -->
<?php
   include("session.php");
   
   $error = "";   
   $con = mysqli_connect("localhost","root","","rideShare") or die("Connection was not established");
if(isset($_POST['btnjoin'])){
			$f=($_POST['txtfrom']);
			$t=($_POST['txtto']);
			$d=($_POST['txtdate']);

			$insert = "insert into passenger(username,f,t,d) values ('$login_session','$f','$t','$d')";
			$run = mysqli_query($con,$insert); 
			
			echo '<br/>', '<br/>', "From: " , $f, '<br/>', "To: ",$t, '<br/>',"Date: ", $d;
			
			}
	mysqli_close($con);?>
	   
	   <!--After making the connection if user choses take to edit trip page -->
		<h2><a href = "edit_trip.php">Edit trip</a></h2>
	</body>
	<div id = "tooplate_footer">
		<?php require('footer.php'); ?>
	</div>
