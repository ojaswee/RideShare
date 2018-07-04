<?php 
include("session.php");
$con = mysqli_connect("localhost","root","","rideshare") or die("Connection was not established");
?>
<!DOCTYPE html> 
<html>
	<head>
	<title>Edit_trip</title> 
	<link rel="stylesheet" href="styles/style.css" media="all"/>
	<h1>Edit your trips</h1> 
	</head> 
	
<body>
	<!--Container starts--> 
	<div class="container">
		<!--Header Wrapper Starts-->
		<div id="head_wrap">
		</div>
		<!--Header Wrapper ends-->
		<div id="user_details">
			<?php 			
				$get_user = "select * from passenger where username='$login_session'"; 
				$run_user = mysqli_query($con,$get_user);
				$row=mysqli_fetch_array($run_user);				
				$f = $row['f']; 
				$t = $row['t'];
				$d = $row['d'];
					
			?>
		</div>	<!--Content timeline starts-->
		<div id="content_timeline">		
			<form action="" method="post" id="f" class="ff" enctype="multipart/form-data">			
			<table id = 'editTrip_form'>
				<tr>
					<td >From:</td>			
					<td><input type="text" name="t_f" required="required" value="<?php echo $f;?>"/></td>
				</tr>
				<tr>
					<td >To:</td>	
					<td> <input type="text" name="t_t" required="required" value="<?php echo $t;?>"/></td>
				</tr>
				<tr>
					<td >Date:</td>			
					<td><input type="date" name="t_d" required="required" value="<?php echo $d;?>"/>
					</td>
					<td><input type="submit" name="update"  value="Update"/></td>
				</tr>		
			</table>
			</form>
			<?php if(isset($_POST['update'])){
				$u_f = $_POST['t_f']; 
				$u_t = $_POST['t_t'];
				$u_d = $_POST['t_d'];
				$update = "update passenger set f='$u_f', t='$u_t',d='$u_d' where username='$login_session'";
				$run = mysqli_query($con,$update); 
				if($run){
					echo "<script>alert('Your Trip Updated!')</script>";
					echo "<script>window.open('welcome.php','_self')</script>";
				}
	
			}
				mysqli_close($con);
			?>	
			<h2><a href = "welcome.php">Home Page</a></h2>
		</div> <!--Content timeline ends-->
	</div>
	<!--Container ends-->

</body>
	<div id = "tooplate_footer">
		<?php require('footer.php'); ?>
	</div>
</html>
