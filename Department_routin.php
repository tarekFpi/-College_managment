<?php 
include('header.php');
  $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
	 $id="";
	 $pp=0;
   if(!$sm){
   echo "Connection not Found";
   }else{
   
    $pq="SELECT *FROM `add_departments`";
	  $result=mysqli_query($sm,$pq);
       
	   $connet=1;
	   
  if(!empty($_GET["uid"])){
	  $id=$_GET["uid"];
	  
    $pa="DELETE FROM `depeartment_routin_add` WHERE `id`='$id'"; 
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
<title>Department Routin</title>

<link rel="stylesheet" type="text/css" href="Admission.css" />

 <link rel="stylesheet" href="themes/bootstrap-theme/ej.web.all.min.css" />
		<script src="scripts/external/jquery-3.1.1.min.js"></script> 
		<script src="scripts/web/ej.web.all.min.js"> </script>
		
		</script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
		</script>
	
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script
		
 	><link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
	
	
 	
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
		
		 <script> //Date routin Upload 
            $(function () {
                $("#datepicker_add").datepicker();
            });
        </script>
		
		 <script>
		function check_empty(){
      var textError="";
 
     if(document.getElementById("st_depart").value==""){
	   document.getElementById("st_depart").style.borderColor="RED";
	 }
	 else if(document.getElementById("st_semester").value==""){
	 document.getElementById("st_semester").style.borderColor="RED";
	 }
	 else if(document.getElementById("datepicker_add").value==""){
	 document.getElementById("datepicker_add").style.borderColor="RED";
	 } else if(document.getElementById("fileToUpload").value==""){
	 document.getElementById("fileToUpload").style.borderColor="RED";
	 }
	
    if(textError!=""){
		 alert(textError);
		 return false;
		}
  }
  
   </script>
   
   
    <script>
	function search_semester(){

    var textError="";
     if(document.getElementById("searc_semester").value==""){
	   document.getElementById("searc_semester").style.borderColor="RED";
	 }
      if(textError!=""){
		 alert(textError);
		 return false;
		}
  }
	 </script>
<style>
 form{
 width:100%;
 }
 
 input[type=text]{
 height:50px;
 margin-left:20px;
 font-size:18px;
 }
  
  label{
  margin-left:20px;
  }
 
  
  select{
   margin-left:20px;
    width:600px; 
	height:50px;
	font-size:18px;
  }
  .search_com{
   width:400px; 
	height:50px;
	font-size:18px;
  }
  
  
.header{
  background-color:DarkGreen;
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

<div class="header">

     <ul>
   	<li><a href="#">Student Information</a></li>		
    <li><a href="#"> Homepage</a></li>
	<li><a href="#"> Result</a></li>
     </ul>
	</div> 


<form id="form1" name="form1" method="post" 
action="Department_routin.php" enctype="multipart/form-data">
  <table width="100%" border="" bgcolor="MistyRose" style="margin-top:10px;">
  
  <tr>    </tr>
    <tr>
      <th scope="row" style="padding:10px; font-size:24px; background-color:DarkOrchid; text-align:center; color:#FFFFFF;">Student Depeartment Routin Add</th>
 </tr>
	
    <tr>  
      <th scope="row" align="left" height="40%">
 
   	<br> 
	
	<input type="submit" name="search_btn" value="Search" class="btn-outline-primary btn-sm" 
	style="font-size:20px;width:130px; float:right; margin-top:20px; margin-right:5px; padding:8px; margin-right:20px;"/>
 
 
 <select name="searc_semester" class="search_com" id="searc_semester" style="float:right; margin-right:8px; margin-top:20px;"  >
 
	  <option>Select Semester</option>
	  <option>First Semester</option>
	  <option>Second Semester</option>
	  <option>Third Semester</option>
	  <option>Fourth Semester</option>
	  <option>Fivth Semester</option>
	  <option>Sixth Semester</option>
	  <option>Seventh Semester</option> 
	  <option>Eight Semester</option>
	 </select><br>
	  	
	 
	  <label>Department:</label><br>
	     <select name="st_depart" id="st_depart">
	    <option>Select</option>
	   <?php while($row=mysqli_fetch_array($result)):; ?>
	 <option><?php  echo $row[1];?></option>
	 <?php endwhile; ?>
	 </select><br><br>
	 
	 
<label>Semester:</label><br>
<select name="st_semester" id="st_semester">
	 <option>Select</option>
	 <option>First Semester</option>
	  <option>Second Semester</option>
	  <option>Third Semester</option>
	  <option>Fourth Semester</option>
	  <option>Fivth Semester</option>
	  <option>Sixth Semester</option>
	  <option>Seventh Semester</option> 
	  <option>Eight Semester</option>
	 </select><br><br>
		
		
   <label>Upload Date:</label><br>  
	  <input name="upload_date" type="text" size="77" 
	  id="datepicker_add" 
	  placeholder="Upload Date"autocomplete="off"
	  style="margin-left:20px; font-size:22px; width:545px;"/>
	  <br><br>	
		
		
	  	
<input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" 
style="font-size:24px; margin-left:20px; " /><br><br> 
		
 <br><br>
 <input name="addbtn" type="submit" class="btn-outline-primary btn-sm"   value="Add" style="font-size:24px;  width:140px; margin-left:150px;  text-align:center;"/>
 
 <input name="showbtn" type="submit" class="btn-outline-primary btn-sm" value="show" style="font-size:24px;  width:150px;   margin-left:30px; text-align:center;"/>
  
  
 <br><br> </th>
 </tr>
 
  <?php 
  
  if($connet==1){
  if(isset($_POST["showbtn"])){
  
    $pq="SELECT *FROM `depeartment_routin_add`"; 
	$result=mysqli_query($sm,$pq);
     
  echo"<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
     <thead class='table-dark'>
      <tr style='font-size:20px;'>  
    <td align='center'>Id</td><td align='center'>Department Name</td><td align='center'>Semester Name</td>
	<td align='center'>Upload Date</td>
	<td align='center'>Routin</td>
	<td align='center'>Action</td>
	</tr></thead>";
	
 while($row=mysqli_fetch_row($result)){
 //$not=str_split("/",$row[4]);
 $not=explode("/",$row[4]);
 
    echo "<tr style='font-size:21px;'>
	  <td align='center' >".$row[0]."</td>
	  <td align='center'>".$row[1]."</td>
	  <td align='center'>".$row[2]."</td>
	  <td align='center'>".$row[3]."</td>
	  <td align='center'>".$not[1]."</td>
      <td align='center'>
	  <a href='Department_routin.php?uid=$row[0]' style='margin-left:10px; text-decoration:none; font-size:21px;'>Delete</a>
	  </td>";
    }
	echo "</tr>";
  }
  }

  ?>
  
  
  <?php 
  
  if($pp==1){
  ShowDataAll("SELECT *FROM `depeartment_routin_add`");
  }
  ?>
  
  
  <?php
  
   if($connet==1){
   if(isset($_POST["search_btn"])){
   
   $semester=$_POST["searc_semester"];
   
    if(empty($_POST['searc_semester'])){
	echo '<script>alert("Your Semester is Empty")</script>';
	   }else{
     
	 
    $pq="SELECT *FROM `depeartment_routin_add` WHERE `Semester_name`='$semester'"; 
	$result=mysqli_query($sm,$pq);
     
  echo"<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
     <thead class='table-dark'>
      <tr style='font-size:20px;'>  
    <td align='center'>Id</td>
	<td align='center'>Department Name</td>
	<td align='center'>Semester Name</td>
	<td align='center'>Routin</td>
	<td align='center'>Upload Date</td>
	<td align='center'>Action</td>
	</tr></thead>";
	
 if($row=mysqli_fetch_row($result)){
    $not=explode("/",$row[4]);
	
    echo "<tr style='font-size:21px;'>
	  <td align='center' >".$row[0]."</td>
	  <td align='center'>".$row[1]."</td>
	  <td align='center'>".$row[2]."</td>
	  <td align='center'>".$row[3]."</td>
	  <td align='center'>".$not[1]."</td>
	  
      <td align='center'>
	  <a href='Department_routin.php?uid=$row[0]' style=' text-decoration:none; font-size:21px;'>Delete</a>
	  <a href='Department_routin.php?uid=$row[0]'&&dp_name=$row[1]'
	  &&semest=$row[2]' style='margin-left:10px; text-decoration:none; font-size:21px;'>Update</a>
	  </td>";
    }else{
	echo '<script>alert("Your Data Not Match...")</script>';
	}
	echo "</tr></table>";
  }
  }
   }
   
   ?>
   
   
   
   
   <?php 
   
   function ShowDataAll($pq){
     $sm=mysqli_connect("localhost","root","","collage_management");
	 
	$result=mysqli_query($sm,$pq);
     
  echo"<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
     <thead class='table-dark'>
      <tr style='font-size:20px;'>  
    <td align='center'>Id</td><td align='center'>Department Name</td><td align='center'>Semester Name</td>
	<td align='center'>Upload Date</td>
	<td align='center'>Routin</td>
	<td align='center'>Action</td>
	</tr></thead>";
	
 while($row=mysqli_fetch_row($result)){
    $not=explode("/",$row[4]);
	
    echo "<tr style='font-size:21px;'>
	  <td align='center' >".$row[0]."</td>
	  <td align='center'>".$row[1]."</td>
	  <td align='center'>".$row[2]."</td>
	  <td align='center'>".$row[3]."</td>
	  <td align='center'>".$not[1]."</td>
      <td align='center'>
	  <a href='Department_routin.php?uid=$row[0]' style='margin-left:10px; text-decoration:none; font-size:21px;'>Delete</a>
	  </td>";
    }
	echo "</tr>";
   }
   
   
   ?>
  </table>
  
  
  <?php 
   
   if($connet==1){
   
 if(isset($_POST["addbtn"])){
   
   	 $Dp_name=$_POST["st_depart"];
	 $semester_name=$_POST["st_semester"]; 
	  $up_date=$_POST["upload_date"];

	  if(empty($_POST['st_depart'])){
	echo '<script>alert("Your Department is Empty")</script>';
	   }
	  else if(empty($_POST['st_semester'])){
	echo '<script>alert("Your Semester is Empty")</script>';
	   }
	   else if(empty($_POST['upload_date'])){
	echo '<script>alert("Your Upload Date is Empty")</script>';
	   }else{
 
   $target_dir ="Depearment_Routin/";

 if(!empty($_FILES['fileToUpload']))
  {

 $target_file = $target_dir. basename( $_FILES['fileToUpload']['name']);

if (file_exists($target_file)) {
 
  echo '<script>alert("Sorry,Your file already exists.")</script>'; 
}else{

if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file)) {
 
    
$sq="INSERT INTO `depeartment_routin_add`(`Depeartment_name`,`Semester_name`,`routin`,`upload_date`)VALUES('$Dp_name','$semester_name','$target_file','$up_date')";

 $pa=mysqli_query($sm,$sq);	 
 if($pa>0){
  echo '<script>alert("Your File Upload SuccessFull..")</script>';
  
   ShowDataAll("SELECT *FROM `depeartment_routin_add`");
 }else{
 echo '<script>alert("Your File Upload Faild..")</script>';
 }	 
	 
}
} 
  }
  }
 }
 }
  ?>
  
  
</form>


      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
</html>
