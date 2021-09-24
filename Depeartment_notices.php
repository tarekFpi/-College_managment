<?php  
include('header.php');
  $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
	
	  $update_id="";
	     $up_dep="";
		 $up_sem="";
		 $pp=0;
		 
   if(!$sm){
   echo "Connection not Found";
   }else{
    $pq="SELECT *FROM `add_departments`";
	  $result=mysqli_query($sm,$pq);
   $res=mysqli_query($sm,$pq);
		
	   $connet=1;

	  if(!empty($_GET["delet_id"])){
	   $delet=$_GET["delet_id"];
	   
 $pq="DELETE FROM `department_notices`WHERE `id`='$delet'";
   
     $pa=mysqli_query($sm,$pq);
   
   if($pa>0){
   echo '<script>alert("Your Data Delete SuccessFull..")</script>';
     $pp=1;
    
   }else{
   echo '<script>alert("Your Data Delete Faild..")</script>';
     }
	 } 
	
/*	  if(!empty($_GET["up_id"]) &&!empty($_GET["up_dep"]) 
	  &&!empty($_GET["up_sem"])){ 
	  
	     $update_id=$_GET["up_id"];
	     $up_dep=$_GET["up_dep"];
		 $up_sem=$_GET["up_sem"];
		 
	  }*/
	 
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
	
		
		 <script> //Date of Birth datepicker
            $(function () {
                $("#datepicker_add").datepicker();
            });
        </script>
		
<style>

 .search_com{
   width:20%; 
	height:45px;
	font-size:18px;
  }


 form{
 width:100%;
 }
 
 input[type=text]{
 height:40px;
 margin-left:20px;
 font-size:18px;
 width:600px;
 }
  
  label{
  margin-left:20px;
  }
  
  select{
  margin-left:20px;
    width:600px;; 
	height:40px;
	font-size:18px;
  }
  
  
  
.header{
  background-color: Indigo;
	 width: 100%;
	 height: 90px;
}
.header ul{
float:left;
list-style-type:none;
  
}

.header ul li{
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
 text-decoration:none;
 display:block;
 color:Ivory;
}
</style>

</head>

<body>

	
<form id="form1" name="form1" method="post" 
action="Depeartment_notices.php" enctype="multipart/form-data">

  <table width="100%" border=""
   bgcolor="LightGoldenRodYellow" style="margin-top:50px;">
   
<tr>
  <th scope="row" align="left" height="40%" style="font-size:24px; color:#FFFFFF; text-align:center; background-color:DarkGreen;">Department Notices</th>	
	</tr>
	
    <tr>
      <th scope="row" align="left" height="40%"><br>
	 
<input type="submit" name="search_btn" value="Search" style="font-size:20px; float:right; margin-top:20px; margin-right:5px; 
 padding:8px; width:150px; margin-right:8px; "/>
 
 <select name="searc_depeart" class="search_com"  style="float:right; margin-right:5px; margin-top:22px;">
 
	    <option>Select Depeartment</option>
	   <?php while($row=mysqli_fetch_array($res)):; ?>
	 <option><?php  echo $row[1];?></option>
	 <?php endwhile; ?>
	 </select> 
	
	
	<input type="hidden" name="pid" value="<?php echo $update_id;?>" />

	     <label>Department:</label><br>
	   <select name="st_depart"   required>
	    <option><?php if(!empty($up_dep))
		{echo $up_dep;}else{echo "Select";}?></option>
	   <?php while($row=mysqli_fetch_array($result)):; ?>
	 <option><?php  echo $row[1];?></option>
	 <?php endwhile; ?>
	 </select>
	  <br><br>
	   
	<label>Semester:</label><br>

    <input name="st_semester" id="st_semester"
	   placeholder="Semester Name" 
	   type="text" size="58"autocomplete="off" 
	   value="<?php echo $up_sem;?>" 
	   />
	  <br><br>
	
	   <label>Current Date:</label><br>
	  <input name="curr_date" type="text" size="80" id="datepicker_add"
	  placeholder="Upload Date" autocomplete="off"
       style="margin-left:20px; font-size:22px; width:545px;"/><br><br>
	   
	  
	  
 <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" 
style="font-size:24px; margin-left:20px; " /><br><br>  <br>   

 <input name="addbtn" type="submit" class="btn-outline-primary btn-lg" value="Add" style="font-size:24px;  width:120px; margin-left:150px; text-align:center;"/>
 
  <input name="showbtn" type="submit" class="btn-outline-primary btn-lg" value="Show" style="font-size:24px;  width:150px; margin-left:20px; "/> 
  
 <br><br> 
 
 </th>
 </tr>
 
  <?php 
  if($connet==1){
      if(isset($_POST["addbtn"])){
	
	
	    $depart=$_POST["st_depart"];
        $semester=$_POST["st_semester"]; 
	    $curr_date=$_POST["curr_date"];
		 
		 if(empty($_POST["st_depart"])){
	 echo '<script>alert("Your Depeartment Name Empty")</script>';
	   		}
	   else if(empty($_POST['st_semester'])){
	  echo '<script>alert("Your Semester Name  Empty")</script>';
	  
	   } else if(empty($_POST['curr_date'])){
	echo '<script>alert("Your Upload Date is Empty")</script>';
	   }else{
	
	$target_dir ="Department_notice/";
	
  if(!empty($_FILES['fileToUpload']))
  {

 $target_file = $target_dir. basename( $_FILES['fileToUpload']['name']);


	if (file_exists($target_file)) {
 
  echo '<script>alert("Sorry,Your file already exists.")</script>';
   
   }else{
   
   $pq="INSERT INTO `department_notices`(`Department_name`,`Semester_name`,`Current_date`,
  `notice_deatils`) 
  VALUES('$depart','$semester','$curr_date','$target_file')";  
	$pa=mysqli_query($sm,$pq);  
	
	if($pa>0){
	  echo '<script>alert("Your Data Upload SuccessFull..")</script>';
	  
	   showAll("SELECT *FROM `department_notices`");
	}else{
	 echo '<script>alert("Your Data Upload Faild..")</script>';
	}
   }
   
   }
   }
  }
  }
  
  ?>
  
  </table>
 
  
  <?php 
  /*
if($connet==1){

 if(isset($_POST["up_btn"])){
   
          $depart=$_POST["st_depart"];
        $semester=$_POST["st_semester"];
		
		 $up_id=$_POST["pid"];
		 
	 if(empty($_POST["st_depart"])){
	 echo '<script>alert("Your Depeartment Name Empty")</script>';
	   		}
	   else if(empty($_POST['st_semester'])){
	  echo '<script>alert("Your Semester Name  Empty")</script>';
	   } else if(empty($_POST['pid'])){
	echo '<script>alert("Your Serial Id  is Empty")</script>';
	   } else{ 
	 
  $pa="UPDATE `department_notices` `Department_name`='$depart',`Semester_name`='$semester' WHERE `id`='$up_id'";
  
  $pq=mysqli_query($sm,$pa);
  
  if($pq>0){
  echo '<script>alert("Your Data Update SuccessFull..")</script>';
  
   showAll("SELECT *FROM `department_notices`");
  }else{
  echo '<script>alert("Your Data Update Faild..")</script>';
  }
 }
}
}
  */
  ?>
  
  
  <?php 
  if($connet==1){
      
	  if(isset($_POST["showbtn"])){
	 
    $pa="SELECT *FROM `department_notices`";
	$re=mysqli_query($sm,$pa);
	
	  echo "<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
	   <thead class='table-dark'>
      <tr >  
    <td align='center' style='padding:6px;'>Serial Id</td>
	
	<td align='center'>Department</td> 
	<td align='center'>Semester</td>
	<td align='center'>Upload Date</td>
	<td align='center'>Notices</td>
	<td align='center'>Action</td> 
	</tr> </thead>";
	
	while($row=mysqli_fetch_array($re)){
	 $not=explode("/",$row[4]);
	 
	 echo "<td align='center'>".$row[0]."</td>
	   <td align='center'>".$row[1]."</td>
	   <td align='center'>".$row[2]."</td>
	   <td align='center'>".$row[3]."</td>
	   <td align='center'>".$not[1]."</td>
	   
<td align='center'>
  <a href='Depeartment_notices.php?delet_id=$row[0]'  style='margin-left:8px;color:Red; text-decoration:none; font-size:21px;'>Delete</a></td></tr>";
	  
	} 
	echo"</table>";
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
	
	<td align='center'>Department</td> 
	<td align='center'>Semester</td>
	<td align='center'>Upload Date</td>
	<td align='center'>Notices</td>
	<td align='center'>Action</td> 
	</tr></thead>";
	
	while($row=mysqli_fetch_array($re)){
	 $not=explode("/",$row[4]);
	 echo "<td align='center'>".$row[0]."</td>
	   <td align='center'>".$row[1]."</td>
	   <td align='center'>".$row[2]."</td>
	   <td align='center'>".$row[3]."</td>
	   <td align='center'>".$row[1]."</td>
	   <td align='center'>
  <a href='Depeartment_notices.php?delet_id=$row[0]'  style='margin-left:8px;color:Red; text-decoration:none; font-size:21px;'>Delete</a></td></tr>";
	  
	} 
	echo"</table>";
  }
    
 
 ?>
 
 
 
 <?php 
 
  if($connet==1){
 
  if(isset($_POST["search_btn"])){
  $dep=$_POST["searc_depeart"];
  
   if (empty($_POST["searc_depeart"])) {
echo '<script>alert("Please Your Depearment Name..")</script>';
  }else {
  
   $pa="SELECT *FROM `department_notices` WHERE `Department_name`='$dep'";
	$re=mysqli_query($sm,$pa);
	
	  echo "<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
	   <thead class='table-dark'>
      <tr >  
    <td align='center' style='padding:6px;'>Serial Id</td>
	
	<td align='center'>Department</td> 
	<td align='center'>Semester</td>
	<td align='center'>Upload Date</td>
	<td align='center'>Notices</td>
	<td align='center'>Action</td> 
	</tr></thead>";
	
	while($row=mysqli_fetch_array($re)){
	 $not=explode("/",$row[4]);
	 echo "<td align='center'>".$row[0]."</td>
	   <td align='center'>".$row[1]."</td>
	   <td align='center'>".$row[2]."</td>
	   <td align='center'>".$row[3]."</td>
	   <td align='center'>".$row[1]."</td>
	   <td align='center'>
  <a href='Depeartment_notices.php?delet_id=$row[0]'  style='margin-left:8px;color:Red; text-decoration:none; font-size:21px;'>Delete</a></td></tr>"; 
	  
	} 
	echo"</tr></table>";
  }
}
}
 ?>
 
 
 
 <?php 
 
 if($pp==1){
 $pa="SELECT *FROM `department_notices`";
 $re=mysqli_query($sm,$pa);
	
	  echo "<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
	   <thead class='table-dark'>
      <tr >  
    <td align='center' style='padding:6px;'>Serial Id</td>
	
	<td align='center'>Department</td> 
	<td align='center'>Semester</td>
	<td align='center'>Upload Date</td>
	<td align='center'>Notices</td>
	<td align='center'>Action</td> 
	</tr></thead>";
	
	while($row=mysqli_fetch_array($re)){
	 $not=explode("/",$row[4]);
	 echo "<td align='center'>".$row[0]."</td>
	   <td align='center'>".$row[1]."</td>
	   <td align='center'>".$row[2]."</td>
	   <td align='center'>".$row[3]."</td>
	   <td align='center'>".$row[1]."</td>
	   <td align='center'>
  <a href='Depeartment_notices.php?delet_id=$row[0]'  style='margin-left:8px;color:Red; text-decoration:none; font-size:21px;'>Delete</a> 
	 <a href='Depeartment_notices.php?up_id=$row[0]'
	   style='margin-left:12px; color:Magenta; text-decoration:none; font-size:21px;'>Update</a></td></tr>";  
	  
	} 
	echo"</table>";
 }
 
 ?>
</form>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>
