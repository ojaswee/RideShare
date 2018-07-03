<?php
   include("config.php");
   session_start();
   $error = "";   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['studentid'], $_POST['email'] , $_POST['phone'], $_POST['password'],$_POST['firstname'],$_POST['lastname'],$_POST['username'])){
		if(empty($_POST['studentid']) || empty( $_POST['email']) || empty( $_POST['phone'])   || empty( $_POST['password']) || empty( $_POST['firstname'])  ||empty( $_POST['lastname']) || empty( $_POST['username']) || empty( $_POST['driverlicense']) ){
			$error = "All Information is required. Please fill all the data.";
    }else {
		// information sent from form 
      
      $studentid = $_POST['studentid'];
	  $email = $_POST['email'];
	  $phone = $_POST['phone'];
      $password = $_POST['password']; 
	  $sql = "INSERT INTO student(id, student_id, email, phone,password,firstname,lastname,username, driver_license)
        VALUES ('','".$_POST["studentid"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["password"]."','".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["username"]."', '".$_POST["driverlicense"]."')";
	  $result = mysqli_query($db,$sql);
		if($result) {
			$error="Registration Successful";	
		}else {
         $error = "Sorry Registration Failed";
				}
			}
		}
	}
?>
<html>
   
   <head>
   <link rel="stylesheet" href="styles/style.css" media="all"/>
      <title>Registration Page</title>
	  <h1> Registration</h1>
	  <div id="head_wrap"></div></br>	    
   </head>
   
      <div align = "center">
               <form action = "" method = "post">
                  <label>Student ID  :</label>  <input type = "text" name = "studentid" class = "box"/><br /><br />
				  <label>First Name  :</label>  <input type = "text" name = "firstname" class = "box"/><br /><br />
				  <label>Last Name   :</label>  <input type = "text" name = "lastname" class = "box"/><br /><br />
				  <label>Driver License	:</label>	<input type = "text" name = "driverlicense" class = "box"/><br /><br /> 
				  <label>UserName    :</label>  <input type = "text" name = "username" class = "box"/><br /><br />
				  <label>Email  :     		</label><input type = "text" name = "email" class = "box"/><br /><br />
				  <label>Phone #  :   </label><input type = "text" name = "phone" class = "box" autocomplete="false" /><br /><br />
                  <label>Password  :  </label><input type = "password" name = "password" class = "box" autocomplete="false" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />  
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
		
      </div>

   </body>
</html>