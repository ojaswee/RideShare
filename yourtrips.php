   <head>
      <link rel="stylesheet" href="styles/style.css" media="all"/>
	  <title>Your trips </title>
	  <h1>Your trips</h1>   

   </head>
   <body>
   		<!--Header Wrapper Starts-->
		<div id="head_wrap">
		<!--<img src="images\PVAMU1.jpg" width = '80%' alt="PVAMU Logo"> -->
		</div>
		<!--Header Wrapper ends-->

<?php
   include("session.php");
   
   $error = "";   
   $con = mysqli_connect("localhost","root","","car") or die("Connection was not established");
if(isset($_POST['btnjoin'])){
			$f=($_POST['txtfrom']);
			$t=($_POST['txtto']);
			$d=($_POST['txtdate']);

			$insert = "insert into passenger(username,f,t,d) values ('$login_session','$f','$t','$d')";
			$run = mysqli_query($con,$insert); 
			
			echo '<br/>', '<br/>', "From: " , $f, '<br/>', "To: ",$t, '<br/>',"Date: ", $d;
			
			}
	mysqli_close($con);?>
		<h2><a href = "edit_trip.php">Edit trip</a></h2>
	</body>
	<div id = "tooplate_footer">
		<?php require('footer.php'); ?>
	</div>