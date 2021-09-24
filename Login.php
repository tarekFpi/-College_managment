
 <?php 
  //session_start();
    $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
   if(!$sm){
   echo "Connection not Found";
   }else{
    $connet=1;
 }
 ?>
 
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="Admission.css" />

 <link rel="stylesheet" href="themes/bootstrap-theme/ej.web.all.min.css" />
		<script src="scripts/external/jquery-3.1.1.min.js"></script> 
		<script src="scripts/web/ej.web.all.min.js"> </script>
		
		</script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
		</script>
<style>

body {font-family: Arial, Helvetica, sans-serif;}
 form{
 width:70%;
 }
 
 *{padding:0; margin:0;}
 input[type=text]{
 height:40px;
 margin-left:20px;
 font-size:18px;
 width: 400px;
 display: inline-block;
 }
   input[type=password] {
  width: 405px;
  padding: 12px 20px;
   font-size:18px;
  margin-left:15px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
  label{
  margin-left:20px;
  }
 
 
.header{
  background-color: MediumSlateBlue;
	 width: 100%;
	 height: 80px;  
}
.header button{
 font-size:24px;
 margin-top:10px;
 top:10px;
 margin-left:60px;
 width:150px;
}

 .design{
 margin-top:50px;
    justify-content: center;
   text-align: center;
    text-align: center;
	 display: flex;
 }
 
 
form{
  width: 50%;
}
/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 400px;
}

button:hover {
  opacity: 0.8;
}


/* Center the image and position the close button */
.Close_container {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}


.container {
  padding: 16px;
}



/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 50%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}


</style>

<script>
	 
		 function checktext_empty(){
		var textError="";
		 if(document.getElementById("ad_gmail").value==""){
		textError+="please Enter your  Gamail";
  document.getElementById("ad_gmail").style.borderColor="RED";
		}
	 	
		else if(document.getElementById("ad_password").value==""){
		textError+="please Enter your password";
  document.getElementById("ad_password").style.broderColor="RED";
		}
		if(textError!=""){
		 alert(textError);
		 return false;
		}
		}
		</script>
		
		
		
<script>
  function userlogin_empty(){
  var textError="";
     if(document.getElementById("user_gmail").value==""){
	   document.getElementById("user_gmail").style.borderColor="RED";
	 }else if(document.getElementById("user_password").value==""){
	 document.getElementById("user_password").style.borderColor="RED";
	 
	 document.getElementById("ad_password").style.broderColor="RED";
	 }
	 
    if(textError!=""){
		 alert(textError);
		 return false;
	 }

  }
</script>

</head>

<body bgcolor="AliceBlue">
 
<div class="header">

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; ">Teacher Login</button>

	</div> 
 
<div class="design">

<form   name="form1" method="post" action="Login.php" onsubmit="return checktext_empty()" >
  <table width="70%" border="" bgcolor="RoyalBlue">
    <tr>
      <th scope="row"><img src="fenipoly_logo.png" height="110px" width="100%"/> 
    </tr> 
	
	 <tr>
      <th scope="row"  style="background-color:Indigo; color:#FFFFFF; font-size:24px; padding:10px;">Admin Login</th>
    </tr>
	
    <tr>
      <th scope="row" align="left" height="40%">
	  	<br> 
	     <label>Gmail:</label><br> 
	  <input name="ad_gmail" type="text"  autocomplete="off" placeholder="Gmail"  id="ad_gmail"
	  size="50" maxlength="20" 
	 />
	  <br>
	  
	  	   	  
	<br> 
  <label>Password:</label><br> 
	  <input name="ad_password" type="text" autocomplete="off" placeholder="password" size="50" maxlength="20" id="ad_password"
	 />
  <br><br>
	 
	  <input name="add_admin" type="submit" value="Login" 
	  style="font-size:24px; height:40px; background-color:DarkOrchid; color:#FFFFFF; width:250px; margin-left:150px; text-align:center;"/><br><br>
	  
  </table>
  <?php 
 //session_start();
  $sm=mysqli_connect("localhost","root","","collage_management");
   
   if($connet==1){
  
     $getGamil="";
	 $getpass="";
	 
     if(isset($_POST["add_admin"])){
	   
     $gamtxt=$_POST["ad_gmail"];
	 $password=$_POST["ad_password"];
	 
	 
	   if(empty($_POST['ad_gmail'])){
	  echo '<script>alert("Your Gamil is Empty")</script>';
	   } 
	  	else  if(empty($_POST["ad_password"])){
	 echo '<script>alert("Your Password is Empty..")</script>';
	 }else{
	    
 $sq="SELECT *FROM `admin_login` WHERE `Gmail`='$gamtxt' AND`password`='$password'";
 $re=mysqli_query($sm,$sq);
  if($row=mysqli_fetch_array($re)){

  $getGamil=$row[1];
   $_SESSION['loginStatus']="Admin";
  
	 //setcookie('loginStatus', true, time() + (86400 * 30), "/");
	 
 //if((strcasecmp($getGamil,$gamtxt)==0)&&
 // (strcasecmp($password,$getpass)==0)){
 
 echo "<script>window.location.assign('index.php?status=Admin')</script>"; 
    
  }else{
   echo '<script>alert("Your Login Faild..")</script>';
  } 
}
  }
   }
  ?>
  
</form>

</div>


<div id="id01" class="modal">
  <form class="modal-content animate" onsubmit="return userlogin_empty()" action="Login.php" method="post" >
    <div class="Close_container">
 <span onclick="document.getElementById('id01').style.display='none'" class="close">&times;</span>
     
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" name="user_gmail" placeholder="Enter Username"    name="uname" autocomplete="off">
      <br><br>

      <label><b>Password</label>
      <input type="password" autocomplete="off" name="user_password" placeholder="Enter Password">
        <br><br>
      <button type="submit"  name="user_btn">Login</button>
    </div>

 <?php 
  
  $sm=mysqli_connect("localhost","root","","collage_management");
   
   if($connet==1){
  //session_start();
     $getGam="";
	 $getpassw="";
	 
     if(isset($_POST["user_btn"])){
	 
	  $gam=$_POST["user_gmail"];
	 $password_text=$_POST["user_password"];
	 
	   if(empty($_POST['user_gmail'])){
	echo '<script>alert("Your Gamil is Empty")</script>';
	
	   } else if(empty($_POST['user_password'])){
	   echo '<script>alert("Your Passsword is Empty")</script>';
      }else{
    
 $sq="SELECT `teacher_log`.`Gmail`,`teacher_log`.`Password` FROM `teacher_log`";
 $re=mysqli_query($sm,$sq);
      
  if($row=mysqli_fetch_array($re)){
     $getGam=$row[0];
	 $getpassw= $row[1];
	   
	//  $_SESSION["password"]=$getpass;
	  $_SESSION["gmail"]=$getGamil;
	 
 if((strcasecmp($getGam,$gam)==0)&& (strcasecmp($password_text,$getpassw)==0)){
 
 echo "<script>window.location.assign('teacher_informationUpdate.php?gm=$row[0]&&pa=$row[1]')</script>"; 
  }
    
  }else{
   echo '<script>alert("Your Login Faild..")</script>';
  } 
  }
  }
   }
  ?>
  

  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>