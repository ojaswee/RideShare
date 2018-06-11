<?php
   include("config.php");
   session_start();
   $error = "";   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['studentid'], $_POST['email'] , $_POST['phone'], $_POST['password'],$_POST['firstname'],$_POST['lastname'],$_POST['username'])){
		if(empty($_POST['studentid']) || empty( $_POST['email']) || empty( $_POST['phone'])   || empty( $_POST['password']) || empty( $_POST['firstname'])  ||empty( $_POST['lastname']) || empty( $_POST['username']) ){
			$error = "All Information is required. Please fill all the data.";
    }else {
		// information sent from form 
      
      $studentid = $_POST['studentid'];
	  $email = $_POST['email'];
	  $phone = $_POST['phone'];
      $password = $_POST['password']; 
	  $sql = "INSERT INTO student(student_id, email, phone,password,firstname,lastname,username)
        VALUES ('".$_POST["studentid"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["password"]."','".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["username"]."')";
	  $result = mysqli_query($db,$sql);
		if($result) {
			$error="Registration Successful";	
			header("location: login.php");
		}else {
         $error = "Sorry Registration Failed";
				}
			}
		}
	}
?>
<html>
   
   <head>
      <title>Registration Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:400px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>New User Registration</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Student ID  :</label>  <input type = "text" name = "studentid" class = "box"/><br /><br />
				  <label>First Name  :</label>  <input type = "text" name = "firstname" class = "box"/><br /><br />
				  <label>Last Name   :</label>  <input type = "text" name = "lastname" class = "box"/><br /><br />
				  <label>UserName    :</label>  <input type = "text" name = "username" class = "box"/><br /><br />
				  <label>Email  :     		</label><input type = "text" name = "email" class = "box"/><br /><br />
				  <label>Phone #  :   </label><input type = "text" name = "phone" class = "box" autocomplete="false" /><br /><br />
                  <label>Password  :  </label><input type = "password" name = "password" class = "box" autocomplete="false" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />  
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>