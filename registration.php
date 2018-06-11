<?php
   include("config.php");
   session_start();
?>
<html>
   
   <head>
   <link rel="stylesheet" href="styles/style.css" media="all"/>
      <title>Registration</title>
      <h1>Registation</h1> 
   </head>
   
   <body>
   		<!--Header Wrapper Starts-->
		<div id="head_wrap">
		</div>
		<!--Header Wrapper ends-->
		</br>
		<div align = "center">
       
                <form action = "" method = "post">
			    <table cellpadding="100">
                 <td>
				 <div style = "width:350px;  " align = "center">
				 <a><h1>Looking for a Ride???<br/> Register here!!!<br/></h1></a> 
				 <a href="passenger.php"><h2>Passenger</h2></a></div></td> 

                 <td><div style = "width:500px; " align = "center">

				 <a><h1>Wanna share a Ride???<br/> Register here!!!<br/></h1></a> 
				 
				 <a href="driver.php"><h2>Driver</h2></a></div></td><br />
				 
				</table>
               </form>	
         </div>
   </body>
	<div id = "tooplate_footer">
	<?php
	require('footer.php');
	?>
</div>
</html>