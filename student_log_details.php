<?php  

  $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
	$stats="";
	$update_data=0;
	 
	$st_reg="";
	$st_name="";
	$st_region="";
	$st_dep="";
	$st_semster="";
	$st_shift="";
	$st_section="";
	$st_session="";
	$st_probidan="";
	$st_gender="";
	$st_Relagion="";
	$Date_of_Birth="";
	$father_name="";
	$mother_name="";
	$present_Address="";
	$Permanent_Address="";
	
	$st_phon="";
	$st_gmail="";
	$st_pass="";
	$st_image="";
	 $rol="";
	  $up_rol="";
	 
   if(!$sm){
   echo "Connection not Found";
   }else{
   
	   $connet=1;
	   
	  if(!empty($_GET["log_roll"])){
	   $log_rol=$_GET["log_roll"];
	$pqr="SELECT *FROM `student_loginformation` WHERE `Roll`='$log_rol'";
  $result1=mysqli_query($sm,$pqr);
  while($row=mysqli_fetch_array($result1)){
  	$stats=$row[3];
 
  $rol=$row[0];
  $st_name= $row[1];
  $st_reg=$row[2];
  $st_dep=$row[3];  
  $st_semster=$row[4];
  $st_shift=$row[5];
  $st_section=$row[6];
  $st_session=$row[7];
   $st_probidan= $row[8];
	$st_gender= $row[9];
	$st_Relagion= $row[10];
	$Date_of_Birth= $row[11];
	$father_name= $row[12];
	$mother_name= $row[13];
	$present_Address= $row[14];
	$Permanent_Address= $row[15];
	$st_phon= $row[16];
	$st_gmail= $row[17];	
	$st_pass= $row[18];
	$st_image= $row[19]; 
	  
 
  }
 }
 
 
  if(!empty($_GET["up_id"])){ 
     $pp=$_GET["up_id"];
	 
 $pq="SELECT *FROM `student_loginformation`  WHERE `Roll`='$pp'";
  $re=mysqli_query($sm,$pq);
  while($ro=mysqli_fetch_array($re)){
  	$stats=$ro[3];
 
  $rol=$ro[0];
  $st_name= $ro[1];
  $st_reg=$ro[2];
  $st_dep=$ro[3];  
  $st_semster=$ro[4];
  $st_shift=$ro[5];
  $st_section=$ro[6];
  $st_session=$ro[7];
   $st_probidan= $ro[8];
	$st_gender= $ro[9];
	$st_Relagion= $ro[10];
	$Date_of_Birth= $ro[11];
	$father_name= $ro[12];
	$mother_name= $ro[13];
	$present_Address= $ro[14];
	$Permanent_Address= $ro[15];
	$st_phon= $ro[16];
	$st_gmail= $ro[17];	
	$st_pass= $ro[18];
	$st_image= $ro[19]; 
	
  }
 }
    
   }
   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="UTF-8"/>
<title>Login Information</title>

 <link rel="stylesheet" href="themes/bootstrap-theme/ej.web.all.min.css" />
		<script src="scripts/external/jquery-3.1.1.min.js"></script> 
		<script src="scripts/web/ej.web.all.min.js"> </script>
		
		</script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
		</script>
		
		
 	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
	<script>
	  function my_fun(myprint){
	  var backup =document.body.innerHTML;
	  var divcontent =document.getElementById('myprint').innerHTML;
	  document.body.innerHTML=divcontent;
	  window.print();
	  document.body.innerHTML=backup;
	  } 
	
	</script>

<style>

 .search_com{
   width:20%; 
	height:45px;
	font-size:18px;
  }


 form{
 width:110%;
 }
 
 input[type=text]{
 height:40px;
 margin-left:30px;
 font-size:18px;
 width:400px;
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
  width: 124%;
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
 width:220px;
 text-align:center;
 height:30px;
 line-height:30px;
 
 margin-top:20px;
}

.header ul li a{
 text-decoration:none;
 display:block;
 color:Ivory;
}

.table_center{
     justify-content: center;
   text-align: center;
    text-align: center;
	 display: flex; 
	 margin-left:500px;
	
}
</style>

</head>

<body>


<div class="header">
     <ul>
	 <li><a href="index.php">Homepage</a></li>
	 
 	<li><a href="Depeartment_noticeShow.php?up_id=<?php echo $stats;?>">Department Notices</a></li>		
    <li>
	<a href="Depeartment_RoutionShow.php?up_id=<?php echo $stats;?>">Department Routine</a></li>
	
     </ul>
	</div> 
	
	
<div class="table_center" id="myprint">

	<form id="form1" name="form1" method="post" 
action="student_log_details.php" enctype="multipart/form-data">
  <table width="70%" border="" bgcolor="Snow" style="margin-top:10px;">
   
<tr>
  <th scope="row" align="left" height="40%" style="font-size:24px; color:#FFFFFF; text-align:center; background-color:DarkGreen;">Student Details Show
      <button  onclick="my_fun('myprint');" style="font-size:20px; margin-right:20px; height:50px;   width:60px; float:right;" class="btn btn-primary">Print</button><br><br>
  </th>	
	</tr>
	
    <tr>
  <th scope="row" align="left" height="40%"><br>
   

  <input type="hidden" value="<?php echo $log_rol;?>" name="up_roll" />
  
<div style=" float:right; margin-right:10px;">
<img src="<?php echo $st_image;?>" style="border:1px solid red; margin-top:30px;"width="150px" height="150px"
></img>
  
  </div>
  
  
   
 <label>Name:</label><br>
    <input name="st_semester"  
 type="text"  autocomplete="off"  
 disabled="disabled"
 value="<?php echo  $st_name;?>" 
 /><br><br>
 

<label >Roll:</label> <br>
    <input name="up_rol" 
 type="text" autocomplete="off"  disabled="disabled"
value="<?php echo  $rol;?>" 
	   />
	 
 <br><br>
	  
         
<label>Registration:</label> <br>

    <input name="st_semester" 
	   disabled="disabled"
	   type="text" 
	   value="<?php echo $st_reg; ?>" 
	   />
	
	  <br><br>
	  

	  	<label>Department:</label><br> 
    <input 
	     disabled="disabled"
	   type="text" autocomplete="off" 
	   value="<?php echo $st_dep; ?>" 
	   />
	  <br><br>
	  
	
	  	<label>Semester:</label><br> 
    <input name="st_semester" 
	   type="text"  
	   disabled="disabled"
	   value="<?php echo $st_semster; ?>" 
	   />
	  <br><br>
	  
 
	  	<label>Shift:</label><br> 
    <input disabled="disabled"
	   type="text" autocomplete="off" 
	   value="<?php echo $st_shift;  ?>" 
	   /> 
	  <br><br>
	  
 
  
<label>Section:</label><br> 
    <input disabled="disabled"
	   type="text"  
	   value="<?php echo $st_section; ?>" 
	   /> 
<br><br>
	   
 
 <label>Session:</label><br> 
    <input disabled="disabled"
	   type="text"  
	   value="<?php echo $st_session;?>" 
	   /> 
	
	  <br><br>
 
<label>Probidan:</label><br> 
    <input disabled="disabled"
	   type="text" autocomplete="off" 
	   value="<?php echo $st_probidan;?>" 
	   /> 
	
	  <br><br>
	  
<label>Gender:</label><br> 

    <input disabled="disabled"
	   type="text" autocomplete="off" 
	   value="<?php echo $st_gender;?>" 
	   /> 
	  
	  <br><br>
	  
	  
 <label>Relagion:</label><br> 
    <input  
	disabled="disabled"
	   type="text" autocomplete="off" 
	   value="<?php echo $st_Relagion;?>" 
	   />
	  <br><br>
	  
	  
<label>Date_of_Birth:</label> <br>
  
<input disabled="disabled"
  type="text"  
 value="<?php echo $Date_of_Birth; ?>" 
	   />
	  <br><br>
  
<label>Father Name:</label><br> 
    <input 
	disabled="disabled"
	   type="text" autocomplete="off" 
	   value="<?php echo $father_name; ?>" 
	   />
	  <br><br>
	  
 <label>Mother Name:</label> <br>

    <input 
	   disabled="disabled"
	   type="text" autocomplete="off" 
	   value="<?php echo $mother_name; ?>" 
	   />
	  <br><br>
	  
<label>Phon number:</label> <br>

    <input disabled="disabled"
	   type="text" autocomplete="off" 
	   value="<?php echo $st_phon; ?>" 
	   /> 
	
	  <br><br>
 
 
 <label>Login Gmail:</label> <br>
    <input  autocomplete="off"
	  name="st_gmail" type="text" 
	   value="<?php echo $st_gmail; ?>" 
	   />
	  <br><br>
	  
<label>Login Password:</label> <br>

    <input autocomplete="off"
	    name="st_password"
	   type="text" autocomplete="off" 
	   value="<?php echo $st_pass; ?>" 
	   />
	  <br><br><br>
  
 <input name="update_button" class="btn btn-primary" type="submit"  value="Update" style="font-size:24px; height:50px; width:150px;  margin-left:100px; "/> <br><br> 	  
	 
 
  <?php 
  
 if($connet==1){
  if(isset($_POST["update_button"])){
  
         $roll=$_POST["up_roll"];
 
     	$gmail=$_POST["st_gmail"];
		$pass=$_POST["st_password"];
		 
	if(empty($_POST['up_roll'])){
	echo '<script>alert("Your Roll is Empty")</script>';
	   }
	   else if(empty($_POST['st_gmail'])){
	echo '<script>alert("Your Gamil is Empty")</script>';
	   } 
	   else if(empty($_POST['st_password'])){
	echo '<script>alert("Your Password is Empty")</script>';
	   }else{	 
		 
    $pa="UPDATE `student_permission` SET `gmail`='$gmail',`password`='$pass' WHERE `Roll`='$roll'";
	$re=mysqli_query($sm,$pa);
	
	if($re>0){
	echo '<script>alert("Your Data Update SuccessFull..")</script>';
	
echo "<script>window.location.assign('student_log_details.php?up_id=$roll')</script>";
	 
  //ShowAll("SELECT *FROM `student_permission`"); 
  
  $update_data=1;
	}else{
	echo '<script>alert("Your Data Update SuccessFull..")</script>';
	}
  }}
  }
  ?>
  	 
  
 <?php 
 /*
  if($connet==1){
  //$sm=mysqli_connect("localhost","root","","collage_management");
   // $rol=$_POST["proll"];
	
	
   $pq="SELECT *FROM `student_loginformation` WHERE `Roll`='$log_rol'";
  $result=mysqli_query($sm,$pq);
	  
   echo"<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
    <thead class='table-dark'>
      <tr >  

    <td align='center' style='padding:6px;'>Roll</td>
	<td align='center'>Name</td> 
	<td align='center'>Registration</td>
	<td align='center'>Department</td> 
	<td align='center'>Semester</td>
	<td align='center'>Shift</td>
	<td align='center'>Section</td>
	<td align='center'>Session</td>
	<td align='center'>probidan</td>
	<td align='center'>Gender</td>
	<td align='center'>Relagion</td>
	<td align='center'>Date of Birth</td>
	<td align='center'>Father Name</td>
	<td align='center'>Mother Name</td>
	<td align='center'>Present Address</td>
	<td align='center'>Permanent Address</td>
	<td align='center'>phone Number</td>
	<td align='center'>Login Email</td>
	<td align='center'>Login Password</td>
	<td align='center'>Image</td>
	</tr></thead>";
	
 while($row=mysqli_fetch_row($result)){
	 $stats=$row[3];
	 
 echo $stats;
	 
 echo "<td align='center'>".$row[0]."</td>
 <td align='center'>".$row[1]."</td>
 <td align='center'>".$row[2]."</td>
 <td align='center'>".$row[3]."</td>
 <td align='center'>".$row[4]."</td>
  <td align='center'>".$row[5]."</td>
  <td align='center'>".$row[6]."</td>
  <td align='center'>".$row[7]."</td>
 <td align='center'>".$row[8]."</td>
 <td align='center'>".$row[9]."</td>
 <td align='center'>".$row[10]."</td>
 <td align='center'>".$row[11]."</td>
 <td align='center'>".$row[12]."</td>
 <td align='center'>".$row[13]."</td>
 <td align='center'>".$row[14]."</td>
 <td align='center'>".$row[15]."</td>
  <td align='center'>".$row[16]."</td>
   <td align='center'>".$row[17]."</td>
    <td align='center'>".$row[18]."</td>
 <td align='center'><img src='".$row[19]."' height='120px'
 width='150px' style='padding:5px;'/>
 </td> 
";
  }
  echo" </tr></table>";
  

}
*/
 ?>
 
 </th>
 </tr>
 
  </table>
 
 
</form>
	</div>
	

</body>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</html>
