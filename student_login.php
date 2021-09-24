 
 <?php 
  include('header.php');
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
 form{
 width:70%;
 }
 *{padding:0; margin:0;}
 input[type=text]{
 height:40px;
 margin-left:20px;
 font-size:18px;
 }
 
.header{
  background-color: MediumSlateBlue;
	 width: 100%;
	 height: 80px;
	  
}
 .design{
 margin-top:70px;
    justify-content: center;
   text-align: center;
    text-align: center;
	 display: flex;
 }
 

</style>
</head>

<body bgcolor="AliceBlue">
 
<div class="design" style="margin-top:100px;">

<form id="form1" name="form1" method="post" action="student_login.php" enctype="multipart/form-data">
  <table width="70%" border="" bgcolor="RoyalBlue">
    <tr>
      <th scope="row"><img src="fenipoly_logo.png" height="110px" width="100%"/> 
    </tr> 
	
	 <tr>
      <th scope="row"  style="background-color:Indigo; color:#FFFFFF; font-size:24px; padding:10px;">Student Login</th>
    </tr>
	
    <tr>
      <th scope="row" align="left" height="40%">
	  	<br> 
	     <label style="margin-left:0px; left:0;">Roll:</label><br> 
	  <input name="st_roll" type="text"  autocomplete="off" placeholder="Roll" 
	  size="50" maxlength="20" 
	 />
	  <br>
	
  <label style="margin-left:0px; left:0;">Gmail:</label><br><br>
  <input name="st_gmail" type="text" autocomplete="off" placeholder="Gamil" size="50" maxlength="20"
	 />
  <br><br>  
	  	   	  
	 
  <label style="margin-left:0px; left:0;">Password:</label><br> 
	  <input name="st_password" type="text" autocomplete="off" placeholder="password" size="50" maxlength="20"
	 />
  <br><br>
	 
 <input name="log_student" type="submit" id="show" value="Login" style="font-size:24px; height:40px; background-color:DarkOrchid; color:#FFFFFF; width:250px; margin-left:150px; text-align:center;"/><br><br>
	  
  </table>
  <?php 
    if($connet==1){
	  $sm=mysqli_connect("localhost","root","","collage_management");
	if(isset($_POST["log_student"])){
	
	     $stud_roll=$_POST["st_roll"];
		  $stud_gmail=$_POST["st_gmail"]; 
		  $stud_pass=$_POST["st_password"]; 
		 
  $pq="SELECT *FROM `student_permission` WHERE `Roll`='$stud_roll' AND `gmail`='$stud_gmail' AND `password`='$stud_pass'";
	 $re=mysqli_query($sm,$pq);
	 
	  if($row=mysqli_fetch_array($re)){
	  echo '<script>alert("Your Loging SuccessFull..")</script>';
	  
	   echo "<script>window.location.assign('student_log_details.php?log_roll=$row[0]'
	 )</script>";
	 
	  }else{
	  echo '<script>alert("Your Loging Faild..")</script>';
	  }
	  }
	}
  ?>
</form>

</div>

</body>
</html>