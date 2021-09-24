<?php 
include('header.php');
  $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
	$pp=0;
   if(!$sm){
   echo "Connection not Found";
   }else{
 
	   $connet=1;
	   
if(!empty($_GET["upid"])){
 $idd=$_GET["upid"];
 
 
  $pa="DELETE FROM `admission_notificationadd` WHERE `pid`='$idd'"; 
    	$re=mysqli_query($sm,$pa);
    if($re>0){
  echo '<script>alert("Your Data Delete SuccessFull..")</script>';
  $pp=1;
	 }else{
	 echo '<script>alert("Your Data Delete Faild..")</script>';
	 }
}

    
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="UTF-8"/>
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="Admission.css" />

 <link rel="stylesheet" href="themes/bootstrap-theme/ej.web.all.min.css" />
		<script src="scripts/external/jquery-3.1.1.min.js"></script> 
		<script src="scripts/web/ej.web.all.min.js"> </script>
 
<script src="ckeditor/ckeditor.js"></script>  	
 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 
 
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
<style>
 form{
 width:100%;
 }

 
  editor{
    height:100px;
   font-size:18px;
   margin-left:50px;
   
 }
 
.header{
  background-color:Indigo;
	 width: 100%;
	 height: 90px;
}
.header ul{

float:left;
list-style-type:none;
  
}

.header ul li{
color:#FFFFFF;
 font-size:20px;
 float:left;
 margin-left:20px;
 text-decoration:none;
 border:1px solid white; 
 width:180px;
 text-align:center;
 height:30px;
 line-height:30px;
}

.header ul li a{
color:#FFFFFF;
 text-decoration:none;
 display:block;
}
</style>

</head>

<body>

 

<form   name="form1"  method="post" 
action="Admission_notification.php" enctype="multipart/form-data">

    
  <table width="100%" border="" bgcolor="Ivory" style="padding:10px;">

<tr>
  <th scope="row" align="left" height="40%" style="font-size:24px; color:#FFFFFF; text-align:center; background-color:DarkGreen;">
 
  <p><marquee direction="left">Admissoin Information Add</marquee></p>  </th>	
	</tr>
	
    <tr>  
   <th scope="row" align="left" height="40%"><br>
     <div class="container" style="margin-left:20px;">
	  <textarea name="editor"   ></textarea>
	 </div>
  
   <br> <br> 
   
  
 <input name="addbtn" type="submit" class="btn-outline-primary btn-lg"   value="Add" style="font-size:24px;  width:150px; margin-left:150px;  text-align:center;"/>
 
  <input name="showbtn" type="submit" class="btn-outline-primary btn-lg"  value="Show" style="font-size:24px;  width:150px; margin-left:20px; "/>
  
  <br>
  <br> 
  
  <?php 
 
   if($connet==1){
     $sm=mysqli_connect("localhost","root","","collage_management");
   if(isset($_POST["addbtn"])){
  
   $notices=$_POST["editor"];
		//$deatils= mysqli_real_escape_string($_POST["editor"]);
		 	 
 $pa="INSERT INTO `admission_notificationadd`(`notices`)VALUES('$notices');";  

$pp=mysqli_query($sm,$pa);

if($pp>0){
echo '<script>alert("Your Data Upload SuccessFull..")</script>';

 showAll("SELECT  *FROM `admission_notificationadd`");
} else{
echo '<script>alert("Your Data Upload Faild..")</script>';
}
  }
 }
?> 


<?php 
if($pp==1){
showAll("SELECT  *FROM `admission_notificationadd`");
}

?>


<?php 
 
 
 function showAll($pp){
  $sm=mysqli_connect("localhost","root","","collage_management");
	$result=mysqli_query($sm,$pp);
     
  echo"<table width='100%' bgcolor='Beige' border='1'>
      <tr >  
	  <td align='center'>ID</td>
	   <td align='center'>Notices</td>
	<td align='center'>Action</td>
	</tr>";
 
 while($row=mysqli_fetch_row($result)){
 
    echo"<tr style='font-size:15px;'>
		<td align='center'>".$row[0]."</td>
	 	<td align='center'>".$row[1]."</td>
      <td align='center'>
	  <a href='Admission_notification.php?upid=$row[0]'style=' text-decoration:none; font-size:21px;'>Delete</a>

 </td>"; 
 
 }
  echo "</tr></table>";
 
	}
 
	 
?>

  </th>
 </tr>
  </table>
 
 </div>
  <br>
  <br>
   <?php 
   
  if($connet==1){
  if(isset($_POST["showbtn"])){
  
    $pq="SELECT  *FROM `admission_notificationadd`"; 
	$re=mysqli_query($sm,$pq);
     
  echo"<table width='100%' bgcolor='Beige' border='1'>
      <tr style='font-size:15px;'>  
	  <td align='center'>ID</td>
	   <td align='center'>Notices</td>
	<td align='center'>Action</td>
	</tr>";
 
 while($row=mysqli_fetch_array($re)){
 
    echo "<tr style='font-size:15px;'>
		<td align='center'>".$row[0]."</td>
	 	<td align='center'>".$row[1]."</td>
      <td align='center'>
	  <a href='Admission_notification.php?upid=$row[0]'style=' text-decoration:none; font-size:21px;'>Delete</a>

 </td>"; 
 
 }
  echo "</tr></table>";
 
 }
 }
 
 ?>
   
		
 

</form>

 <script>
    CKEDITOR.replace( 'editor' );
   </script>  
   
   
   
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> 
</body>

</html>
