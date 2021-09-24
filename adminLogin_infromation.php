 
 <?php 
 include('header.php'); 
	 $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
	
	  $uid="";
	 $ugmail="";
	  $upassword="";
	  
   if(!$sm){
   echo "Connection not Found";
   }else{
   $connet=1;
   
  // up_gm=$row[1]&&up_pass
if(!empty($_GET["up_id"])&& !empty($_GET["up_gm"])&& !empty($_GET["up_pass"])){
	  $uid=$_GET["up_id"];
	 $ugmail=$_GET["up_gm"];
	  $upassword=$_GET["up_pass"];
	 }
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
  
  label{
  margin-left:20px;
  }
 
 
.header{
  background-color: MediumSlateBlue;
	 width: 100%;
	 height: 80px;
	  
}

.design{
 margin-top:50px;
    justify-content: center;
   text-align: center;
    text-align: center;
	 display: flex;
 }
</style>
</head>

<body bgcolor="AliceBlue">
 
<div class="header">  
 </div> 
 
<div class="design">

<form id="form1" name="form1" method="post" action="adminLogin_infromation.php" enctype="multipart/form-data">
  <table width="90%" border="" bgcolor="RoyalBlue">
    <tr>
      <th scope="row"><img src="fenipoly_logo.png" height="110px" width="100%"/> 
    </tr> 
	
	 <tr>
      <th scope="row"  style="background-color:Indigo; color:#FFFFFF; font-size:24px; padding:10px;">Admin Information</th>
    </tr>
	
    <tr>
      <th scope="row" align="left" height="40%">
       <input type="hidden" name="ppid" value="<?php echo $uid; ?>" />
	   
  <label>Gmail:</label><br> 
	  <input name="admin_gmail" type="text" placeholder="Gmail" size="60" maxlength="20" autocomplete="off" onfocus="this.value=''" value="<?php echo $ugmail; ?>"
	 />
	
	 
  <br><br> <label>password:</label><br> 
	  <input name="admin_passw" type="text" placeholder="password" size="60" maxlength="20" autocomplete="off" onfocus="this.value=''" value="<?php echo $upassword; ?>"
	 />
 
  <br><br>
  <input name="showbtn" type="submit"  class="btn btn-success"  value="Show" style="font-size:24px;  width:100px; margin-left:20px; "/> 
  
   <input name="up_btn" type="submit"  class="btn btn-success" value="Update" style="font-size:24px;  width:100px;  margin-left:20px; "/> <br><br> 
 
	  
	  <?php 
  if($connet==1){
    if(isset($_POST["showbtn"])){   	
    $pa="SELECT *FROM `admin_login`";
	$re=mysqli_query($sm,$pa);
	
	  echo "<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
	    <thead class='table-dark'>
      <tr >  
    <td align='center' style='padding:6px;'>Serial Id</td>
	<td align='center'>Gmail</td>
	<td align='center'>Password</td>
	<td align='center'>Action</td> 
	</tr></thead>";
	
	while($row=mysqli_fetch_array($re)){
	 echo "<td align='center'>".$row[0]."</td>
	   <td align='center'>".$row[1]."</td>
	   <td align='center'>".$row[2]."</td>
	   <td align='center'>
	 <a href='adminLogin_infromation.php?up_id=$row[0]&&up_gm=$row[1]&&up_pass=$row[2]'
 style='margin-left:12px; color:Red; text-decoration:none; font-size:21px;'>Update</a>  
	  </td>";
	}
	echo"</tr></table>";
 }
   }
  ?>


<?php 
 if($connet==1){
  if(isset($_POST["up_btn"])){

  $gmail=$_POST["admin_gmail"];
  $password=$_POST["admin_passw"];
  $upid=$_POST["ppid"];
  
$pp="UPDATE `admin_login` SET `Gmail`='$gmail',`password`='$password' WHERE `pid`='$upid'";
 
   $pa=mysqli_query($sm,$pp);
   
  if($pa>0){
   echo '<script>alert("Your Data Update SuccessFull..")</script>'; 
    showAll("SELECT *FROM `admin_login`");
   }else{
     echo '<script>alert("Your Data Update Faild..")</script>'; 
   }
  }

 }  

 
?>



  <?php 
   	  function showAll($pa){
	 $sm=mysqli_connect("localhost","root","","collage_management");
	$re=mysqli_query($sm,$pa);
	
	  echo "<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
	    <thead class='table-dark'>
      <tr >  
    <td align='center' style='padding:6px;'>Serial Id</td>
	<td align='center'>Gmail</td>
	<td align='center'>Password</td>
	<td align='center'>Action</td> 
	</tr></thead>";
	
	while($row=mysqli_fetch_array($re)){
	 echo "<td align='center'>".$row[0]."</td>
	   <td align='center'>".$row[1]."</td>
	   <td align='center'>".$row[2]."</td>
	   <td align='center'>
 
	 <a href='adminLogin_infromation.php?up_id=$row[0]&&up_gm=$row[1]&&up_pass=$row[2]'
	   style='margin-left:12px; color:Red; text-decoration:none; font-size:21px;'>Update</a>  
	  </td></tr>";
	}
	echo"</table>";
  
   }
  ?>
  </table>
 
</form>


</div>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
</html>