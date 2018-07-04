<!-- This is the first page you will see after you log in  -->

<!-- If you want to login before you land into this page please remove comments 
For testing purposes I am skiping the login for now -->
<?php
   include('session.php');
?> 


<html>
   <head>
      <link rel="stylesheet" href="styles/style.css" media="all"/>
	     
      <title>Welcome </title>

   </head>
   
   <body>
	  <h1>Welcome <?php echo $login_session; ?></h1> 
	  <div id="head_wrap"></div></br>
	  <h2><a href = "availablerides.php">Available Rides</a></h2>
	  <h2><a href = "share.php">Share a new ride</a></h2>
	  <h2><a href = "request.php">Requests</a></h2>
	  <h2><a href = "edit_trip.php">Edit trip</a></h2>
      <h2><a href = "logout.php">Sign Out</a></h2>
	  
   </body>
   
	<div id = "tooplate_footer">
	<?php
		require('footer.php');
	?>
	</div>
</html>