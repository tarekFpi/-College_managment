<?php
 include('header.php');  
  $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
   if(!$sm){
   echo "Connection not Found";
   }else{
     $pp=0;
	 
	  $id="";
	  $depName="";
	  $semest_name="";
	  $up_date="";
	  
    $pq="SELECT *FROM `add_departments`";
	  $result=mysqli_query($sm,$pq);
       
	   $connet=1;
	   
if(!empty($_GET["upid"])){
 $idd=$_GET["upid"];
 
 
  $pa="DELETE FROM `general_notices`WHERE `id`='$idd'"; 
    	$re=mysqli_query($sm,$pa);
    if($re>0){
	$pp=1;
  echo '<script>alert("Your Data Delete SuccessFull..")</script>';
	 }else{
	 echo '<script>alert("Your Data Delete Faild..")</script>';
	 }
}

if(!empty($_GET["uid"])&& !empty($_GET["dp_name"])&& 
!empty($_GET["semest"])&& !empty($_GET["date"])){  

	  $id=$_GET["uid"];
	  $depName=$_GET["dp_name"];
	  $semest_name=$_GET["semest"];
	  $up_date=$_GET["date"];
	  
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
		
		</script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
		</script>
		
		
 	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
  
		
        <script>//search date
            $(function () {
                $("#datepicker").datepicker();
            });
        </script>		
		
	   <script> //notices add date
            $(function () {
                $("#datepicker_add").datepicker();
            });
        </script>	
 	
		
<style>
 form{
 width:100%;
 }

 input[type=text]{
 height:40px;
 margin-left:20px;
 font-size:18px;
 height:50px;
 }
  
  label{
  margin-left:20px;
  }
 
  select{
  margin-left:20px;
    width:49%; 
	height:40px;
	font-size:18px;
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

</style>

</head>

<body>
 
<form   name="form1"  method="post" 
action="general_Notices.php" enctype="multipart/form-data">

  <table width="100%" border="" bgcolor="MediumSpringGreen" style="margin-top:50px;">
 
<tr>
  <th scope="row" align="left" height="40%" style="font-size:24px; color:#FFFFFF; text-align:center; background-color:DarkGreen;">General Notices
  <br>
  <p><marquee direction="left">Update For Depeartment, Semester,Current Date</marquee></p>  </th>	
	</tr>
	
    <tr>
      <th scope="row" align="left" height="40%"><br>
	
		<input type="submit" name="search_btn" class="btn-outline-primary btn-lg" value="Search" style="font-size:20px; float:right; margin-top:20px;  font-size:22px; 
		 width:100px; width:120px; margin-right:40px;  padding:4px;"/>
 
	        <br>
	  <input name="search_date" type="text" size="50"
	   placeholder="search Date" autocomplete="off"
	   style="float:right; font-size:22px; margin-right:20px;
	    width:420px; height:40px;"/ id="datepicker"><br><br>
	

 
 <label>Department:</label><br>
 <input name="st_depart" autocomplete="off" onfocus="this.value=''"
  placeholder="Department" type="text" id="st_depart" 
  value="<?php 
 echo $depName; ?>" size="70"/><br><br>
	 
	
	<label>Semester:</label><br>
	<input name="st_semester" placeholder="Semester" type="text" autocomplete="off" onfocus="this.value=''" id="st_semester"
	  size="70" value="<?php echo $semest_name; ?>" 
 maxlength="20" 
	 />
	 
	<br><br>
	
	   <label>Current Date:</label><br>
	   <input name="curr_date" type="text" size="80"
	   id="datepicker_add" autocomplete="off"
	   value="<?php echo $up_date; ?>"
	  placeholder="Current Date"
	   style="margin-left:20px; 
	   font-size:22px; width:545px;"/>
	   <br>
	   <br>
	 

 <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" 
style="font-size:24px; margin-left:20px; " /><br><br><br>   
	 
 
 <input name="addbtn" type="submit" class="btn-outline-primary btn-lg" value="Add" style="font-size:24px;  width:150px; margin-left:150px;   text-align:center;"/>
 
  <input name="showbtn" type="submit" class="btn-outline-primary btn-lg" value="Show" style="font-size:24px;  width:150px; margin-left:20px; "/>
  
  
  <input name="pid" type="hidden" value="<?php 
 echo $id; ?>" />
 
  
  <input name="upatebtn" type="submit" class="btn-outline-primary btn-lg" value="Update" style="font-size:24px;  width:150px; margin-left:20px;"/>
  <br>
  <br> </th>
 </tr>
  </table>
  <?php 
  if($connet==1){
      if(isset($_POST["addbtn"])){
	  
  if (empty($_POST["st_depart"])) {
echo '<script>alert("Please Your Depearment Name..")</script>';
  }
   else if (empty($_POST["st_semester"])) {
    echo '<script>alert("Please Your Semester Name..")</script>';
  } else if (empty($_POST["curr_date"])) {
    echo '<script>alert("Please Your Current Date..")</script>';
  } 
  else{
  
   
	    $depart=$_POST["st_depart"];
        $semester=$_POST["st_semester"]; 
	  
	    $curr_date=$_POST["curr_date"];
		
	   $target_dir ="General_Notices/";
	
 $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an  - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
 
	  echo '<script>alert("File is not.")</script>';
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
 
  echo '<script>alert("Sorry, file already exists.")</script>';
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
   
   echo '<script>alert("Sorry, your file is too large..")</script>';
  $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)) {
  
 $pq="INSERT INTO`general_notices`(`Depeartment_name`,`Semester_name`,`upload_date`,`notices`) 
 VALUES('$depart','$semester','$curr_date','$target_file')";  
	$pa=mysqli_query($sm,$pq);  
	
	if($pa>0){
	 echo '<script>alert("Your Data Upload SuccessFull..")</script>';
	 
	 showAllData("SELECT *FROM `general_notices`");
	}else{
	 echo '<script>alert("Your Data Upload Faild..")</script>';
	}
  
  
    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } 
}
	}
	
  }
  }
  
  ?>
  
  
  
  <?php 
  
  if($connet==1){
  if(isset($_POST["search_btn"])){
  
   $dat=$_POST["search_date"];
   
   if (empty($_POST["search_date"])) {
echo '<script>alert("Please Select Date..")</script>';
  }else {
   
    $pq="SELECT *FROM `general_notices` WHERE `upload_date`='$dat'"; 
	$re=mysqli_query($sm,$pq);
     
  echo"<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
   <thead class='table-dark'>
      <tr style='font-size:20px;'>  
      <td align='center'>Id</td>
	<td align='center'>Department Name</td>
	<td align='center'>Semester Name</td>
	<td align='center'>Upload Date</td>
	<td align='center'>Routin</td>
	<td align='center'>Action</td>
	</tr></thead>";
	
 while($row=mysqli_fetch_row($re)){
   
   $not=explode("/",$row[4]);
    echo "<tr style='font-size:21px;'>
	  <td align='center' >".$row[0]."</td>
	  <td align='center'>".$row[1]."</td>
	  <td align='center'>".$row[2]."</td>
	  <td align='center'>".$row[3]."</td>
	  <td align='center'>".$row[1]."</td>
      <td align='center'>
	  <a href='general_Notices.php?uid=$row[0]' 
	  style='margin-left:10px; text-decoration:none; font-size:21px;'>Delete</a>
	  
	   <a href='general_Notices.php?uid=$row[0]&&dp_name=$row[1]
	  &&semest=$row[2]&&date=$row[3]'
	   style='margin-left:20px; text-decoration:none; font-size:21px;'>Update</a>
	  </td>";
    } 
	//echo '<script>alert("Your Date Not Match..")</script>';
 
	echo"</tr></table>";
	}
  }
  }
  ?>
  
  


<?php 
if($connet==1){

if(isset($_POST["upatebtn"])){
	    
		   $depName=$_POST["st_depart"];
		  $semet_name=$_POST['st_semester'];
		  $cur_date=$_POST["curr_date"];
		  $up_id=$_POST["pid"];
		  
	   if (empty($_POST["st_depart"])) {
   echo '<script>alert("Your Department Name  Empty")</script>';  
      }
	 
	   else if(empty($_POST['st_semester'])){
	  echo '<script>alert("Your Semester Name  Empty")</script>';
	   }
	   else if(empty($_POST['curr_date'])){
	  echo '<script>alert("Your Current Date  Empty")</script>';
	   }
	   else if(empty($_POST['pid'])){
	  echo '<script>alert("Your Serial Id  is Empty")</script>';
	   }else{
	   
 $pa="UPDATE `general_notices` SET`Depeartment_name`='$depName',`Semester_name`='$semet_name', 
		   `upload_date`='$cur_date' WHERE `id`='$up_id'"; 
		$re=mysqli_query($sm,$pa);
		
			if($re>0)
			{
	     echo '<script>alert("Your  Update SuccessFull..")</script>';
		 
		  showAllData("SELECT *FROM `general_notices`");
			 }else{
		echo '<script>alert("Your  Update Faild..")</script>';
			 }
		}
	 }
}
?>


<?php 
    
 function showAllData($pq){
	
 $sm=mysqli_connect("localhost","root","","collage_management");	
	$re=mysqli_query($sm,$pq);
     
  echo"<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
   <thead class='table-dark'>
      <tr style='font-size:20px;'>  
      <td align='center'>Id</td>
	<td align='center'>Department Name</td>
	<td align='center'>Semester Name</td>
	<td align='center'>Upload Date</td>
	<td align='center'>Routin</td>
	<td align='center'>Action</td>
	</tr></thead>";
	
 while($row=mysqli_fetch_row($re)){
   $not=explode ("/",$row[4]);
    echo "<tr style='font-size:21px;'>
	  <td align='center' >".$row[0]."</td>
	  <td align='center'>".$row[1]."</td>
	  <td align='center'>".$row[2]."</td>
	  <td align='center'>".$row[3]."</td>
	  <td align='center'>".$row[1]."</td>
      <td align='center'>
	  <a href='general_Notices.php?uid=$row[0]' 
	  style='margin-left:10px; text-decoration:none; font-size:21px;'>Delete</a>
	  
	   <a href='general_Notices.php?uid=$row[0]&&dp_name=$row[1]
	  &&semest=$row[2]&&date=$row[3]'
	   style='margin-left:20px; text-decoration:none; font-size:21px;'>Update</a>
	  </td>";
    }
	//echo '<script>alert("Your Date Not Match..")</script>';
 
	echo"</tr>";
	
	}
?>


  <?php 
   if($pp==1){
 
	$pa="SELECT *FROM `general_notices`";
 $sm=mysqli_connect("localhost","root","","collage_management");	
	$re=mysqli_query($sm,$pa);
     
  echo"<table width='100%'class='table table-bordered table-hover table-primary table-striped'>
   <thead class='table-dark'>
      <tr style='font-size:20px;'>  
      <td align='center'>Id</td>
	<td align='center'>Department Name</td>
	<td align='center'>Semester Name</td>
	<td align='center'>Upload Date</td>
	<td align='center'>Routin</td>
	<td align='center'>Action</td>
	</tr></thead>";
	
 while($row=mysqli_fetch_row($re)){
   $not=explode("/",$row[4]);
    echo "<tr style='font-size:21px;'>
	  <td align='center' >".$row[0]."</td>
	  <td align='center'>".$row[1]."</td>
	  <td align='center'>".$row[2]."</td>
	  <td align='center'>".$row[3]."</td>
	  <td align='center'>".$row[4]."</td>
      <td align='center'>
	  <a href='general_Notices.php?uid=$row[0]' 
	  style='margin-left:10px; text-decoration:none; font-size:21px;'>Delete</a>
	  
	   <a href='general_Notices.php?uid=$row[0]&&dp_name=$row[1]
	  &&semest=$row[2]&&date=$row[3]'
	   style='margin-left:20px; text-decoration:none; font-size:21px;'>Update</a>
	  </td>";
    }
	//echo '<script>alert("Your Date Not Match..")</script>';
 
	echo"</tr>";
	
	 
  }
  
  ?>
 
</form>


   <?php 
  
  if($connet==1){
  if(isset($_POST["showbtn"])){
  
    $pq="SELECT *FROM `general_notices`"; 
	$re=mysqli_query($sm,$pq);
     
  echo"<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
    <thead class='table-dark'>
      <tr style='font-size:20px;'>  
    <td align='center'>Id</td>
	<td align='center'>Department Name</td>
	<td align='center'>Semester Name</td>
	<td align='center'>Upload Date</td>
	<td align='center'>Routin</td>
	<td align='center'>Action</td>
	</tr></thead>";
	
 while($row=mysqli_fetch_array($re)){
   $not=explode ("/",$row[4]);
    echo "<tr style='font-size:21px;'>
	  <td align='center' >".$row[0]."</td>
	  <td align='center'>".$row[1]."</td>
	  <td align='center'>".$row[2]."</td>
	  <td align='center'>".$row[3]."</td>
	  <td align='center'>".$row[1]."</td>
      <td align='center'>
	  <a href='general_Notices.php?upid=$row[0]' style=' text-decoration:none; font-size:21px;'>Delete</a>
	  
<a href='general_Notices.php?uid=$row[0]&&dp_name=$row[1]  &&semest=$row[2]&&date=$row[3]'
	
	   style='margin-left:20px; text-decoration:none; font-size:21px;'>Update</a>
 </td>";
    } 
	echo "</tr>";
  }
  }

  ?>
  
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>
