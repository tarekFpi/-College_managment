 <?php 
  include('header.php'); 
  $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
	
	     $roll="";
		 $gmail="";
		 $password="";
		 
   if(!$sm){
   echo "Connection not Found";
   }else{
 
	   $connet=1;
          $pp=0;
	  
	  if(!empty($_GET["dele_roll"])){
	  
	   $roll=$_GET["dele_roll"];
 $pp="DELETE FROM `student_permission` WHERE `Roll`='$roll'";
  $pq=mysqli_query($sm,$pp);
   
   if($pq>0){
   
    $pp=1;
    echo '<script>alert("Your Data Delete SuccessFull..")</script>';
       }else{
	     echo '<script>alert("Your Data Delete Faild..")</script>';
	   }
  
	  }
	  
	  
	  if(!empty($_GET["st_roll"])&& !empty($_GET["gma"])&& !empty($_GET["pass"])){
	   $roll=$_GET["st_roll"];
	  $gmail=$_GET["gma"];
	  $password=$_GET["pass"];
		 
		 
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
		
	
 <link rel="stylesheet" href="themes/bootstrap-theme/ej.web.all.min.css" />
		<script src="scripts/external/jquery-3.1.1.min.js"></script> 
		<script src="scripts/web/ej.web.all.min.js"> </script>
		
		</script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
		</script>
		
		
 	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		
		
		<script  type ="text/javascript">
		function checktextfild(){
		var textError="";
		
		if(document.getElementById("st_roll").value==""){
		textError+="please Enter your Roll\n";
		document.getElementById("st_roll").style.broderColor="#B22222";
		
	  else if(document.getElementById("st_gmail").value==""){
		textError+="please Enter your  Gmail\n";  
 document.getElementById("st_gmail").style.broderColor="#B22222";
		}
		
		
	  else if(document.getElementById("st_password").value==""){
		textError+="please Enter your  Password\n";  
 document.getElementById("st_password").style.broderColor="#B22222";
		}
			
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
 *{padding:0; margin:0;}
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
    width:500px; 
	height:50px;
	font-size:18px;
  }
 

 
</style>

 
</head>

<body>

 


<form id="form1" name="form1" method="post"
 action="student_permission.php" enctype="multipart/form-data">
  <table width="100%" border="" bgcolor="LightGoldenRodYellow" style="margin-top:40px;">
  
	
	 <tr>
      <th scope="row"  style="background-color:Indigo; color:#FFFFFF; font-size:24px; padding:10px; text-align:center;">Student Loging password permission</th>
    </tr>
	
    <tr>
      <th scope="row" align="left" height="40%">	 
	  	 <input type="submit" name="search_btn" value="Search" class="btn btn-primary" style="font-size:20px; float:right; margin-top:20px; margin-right:5px;  padding:8px; width:120px;"/>
		 
	<br>    
<input name="search_roll" type="text"autocomplete="off"
 placeholder="Student roll number" 
	  size="40" maxlength="20" style="float:right; margin-right:8px;"
	 />

		 
	 <input type="hidden" name="up_rol" value="<?php echo $roll; ?>"/>
	 
  <br> 
  <label>Roll:</label><br> 
	  <input name="st_roll" id="st_roll" 
	  type="text" placeholder="Roll" size="60"
	   maxlength="20" autocomplete="off"onfocus="this.value=''"
	 />
  <br><br>
	  
   	  	  
   
	<br> 
  <label>Gmail:</label><br> 
	  <input name="st_gmail"  id="st_gmail"
	  onfocus="this.value=''"
	  type="text" placeholder="Gmail" size="60"
	   maxlength="20" autocomplete="off"
	   value="<?php echo $gmail;?>"
	 />
  <br><br>
	  
	   <label>password:</label><br>
	  <input name="st_password" id="st_password"
	  onfocus="this.value=''"
	  type="text" placeholder="Teacher password"  
	  size="60" maxlength="20"  autocomplete="off"
	    value="<?php echo  $password;?>"
	 />
	  <br><br><br> 
	  
	 
 <input  name="add_student" type="button" class="btn-outline-primary btn-sm" value="Save" style="font-size:24px;  width:140px; margin-left:150px; text-align:center;"/>
 
 
     <input name="showbutton" type="submit" class="btn-outline-primary btn-sm" value="Show" style="font-size:24px; width:140px; margin-left:20px; "/>


   <input name="update_button" type="submit" class="btn-outline-primary btn-sm" value="Update" style="font-size:24px;   width:140px; margin-left:20px; "/>
 <br><br>

 </th>
 </tr>
 
  <tr>
<th scope="row" align="center">
 <?php 
 
   if($connet==1){
	  if(isset($_POST["search_btn"])){
	  
	    $roll=$_POST["search_roll"];
		
	 if(empty($_POST["search_roll"])){
	 
	echo '<script>alert("Your Roll is Empty")</script>';
	   }else{
	   
 $pq="SELECT *FROM `student_information_add` WHERE `Roll`='$roll'";
 
      $result=mysqli_query($sm,$pq);
	  echo"<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
	   <thead class='table-dark'>
      <tr>
	  <td align='center'>Roll</td>
    <td align='center'>Name</td>
	<td align='center'>Registration</td>
	<td align='center'>Department</td>
	<td align='center'>Semester</td><td align='center'>
	Shift</td>
	<td align='center'>Section</td>
	<td align='center'>Session</td>
	<td align='center'>probidan </td>
	<td align='center'>Gender </td>
	<td align='center'>Relagion </td>
	<td align='center'>Date_Of_Birth </td>
	<td align='center'>Father Name</td>
	<td align='center'>Mother Name</td>
	<td align='center'>present Address</td>
	<td align='center'>Permanent Address</td>
	<td align='center'>phone Number</td>
	<td align='center'>Image</td>
	</tr> </thead>";
	
	  if($row=mysqli_fetch_row($result)){
	  
  echo "<tr><td align='center'>".$row[0]."</td>
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
	   <td align='center'><img src='".$row[17]."' height='120px'
	    width='150px' style='padding:5px;'/>
 </td>";
	  }else{
 echo '<script>alert("Your Data Not Match!!..")</script>';
	  }
	  echo "</tr>";
	  }
	  }
	  }
 
	  ?>

</th>
  </tr>
 
 <?php 
	 
 if($connet==1){
  $ad="";
	  if(isset($_POST["add_student"])){
		 
      $roll=$_POST["st_roll"];
		$gmail=$_POST["st_gmail"];
		$pass=$_POST["st_password"];
		 
		if(empty($_POST['st_roll'])){
	echo '<script>alert("Your Roll is Empty")</script>';
	   }
	   else if(empty($_POST['st_gmail'])){
	echo '<script>alert("Your Gmail is Empty")</script>';
	   } 
	   else if(empty($_POST['st_password'])){
	echo '<script>alert("Your password is Empty")</script>';
	   }else{
	     
		$match_roll=" SELECT `Roll` FROM `student_permission`";
		  $re=mysqli_query($sm,$match_roll);
	  while($row=mysqli_fetch_row($re)){
	    $ad=$row[0];
		
	  }if(strcasecmp($ad,$match_roll)){
	 echo '<script>alert("Your Data alrady Exist")</script>'; 
 }else{ 
		 
 $pq="INSERT INTO `student_permission` VALUES('$roll','$gmail','$pass')";
   $pa=mysqli_query($sm,$pq);
   
 if($pa>0){
 
 echo '<script>alert("Your Data Add SuccessFull..")</script>';
   ShowAll("SELECT *FROM `student_permission`"); 
 }else{
  echo '<script>alert("Your Data Add Faild..")</script>';
}
}	
 }
}	  
}
 
  ?>
  
  
  
  <?php 
  
  if($pp==1){
  ShowAll("SELECT *FROM `student_permission`"); 
  }
  ?>
  
  
  <?php 
  
   if($connet==1){
  if(isset($_POST["showbutton"])){
   
 $pq="SELECT *FROM `student_permission`";
      $result=mysqli_query($sm,$pq);
	  echo"<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
	   <thead class='table-dark'>
      <tr>
	  <td align='center' style='padding:6px; font-size:18px;'>Roll</td>
    <td align='center'>Gmail</td>
	<td align='center'>Password</td>
	 <td align='center'>Action</td>
	</tr></thead>";
	
	  while($row=mysqli_fetch_row($result)){
	  
  echo "<tr>
  <td align='center' style='padding:6px; font-size:18px;'>".$row[0]."</td>
  <td align='center'>".$row[1]."</td>
  <td align='center'>".$row[2]."</td>
 </td>
 <td align='center'>
  <a href='student_permission.php?dele_roll=$row[0]'  style='margin-left:8px;color:Red; text-decoration:none; font-size:21px;'>Delete</a> 
  
  <a href='student_permission.php?st_roll=$row[0]&&gma=$row[1]&&pass=$row[2]'
 style='margin-left:12px; color:Magenta; text-decoration:none; font-size:21px;'>Update</a>  
	  </td> 
 ";
 }
	  echo "</tr></table>";
  }
  }
  ?>
  
  
  
  <?php 
  
 if($connet==1){
  if(isset($_POST["update_button"])){
  
         $roll=$_POST["up_rol"];
 
     	$gmail=$_POST["st_gmail"];
		$pass=$_POST["st_password"];
		 
		if(empty($_POST['up_rol'])){
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
	
  ShowAll("SELECT *FROM `student_permission`"); 
	}else{
	echo '<script>alert("Your Data Update SuccessFull..")</script>';
	}
  }}
  }
  ?>
  
  
  
  
  <?php 
  //show
  
  function ShowAll($pq){
  
   $sm=mysqli_connect("localhost","root","","collage_management");
      $result=mysqli_query($sm,$pq);
	  echo"<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
	  <thead class='table-dark'>
      <tr>
	  
	  <td align='center' style='padding:6px; font-size:18px;'>Roll</td>
    <td align='center'>Gmail</td>
	<td align='center'>Password</td>
	 <td align='center'>Action</td>
	</tr></thead>";
	
	  while($row=mysqli_fetch_row($result)){
	  
  echo "<tr>
  <td align='center' style='padding:6px; font-size:18px;'>".$row[0]."</td>
  <td align='center'>".$row[1]."</td>
  <td align='center'>".$row[2]."</td>
 </td>
 <td align='center'>
  <a href='student_permission.php?dele_roll=$row[0]'  style='margin-left:8px;color:Red; text-decoration:none; font-size:21px;'>Delete</a> 
  
  <a href='student_permission.php?st_roll=$row[0]&&gma=$row[1]&&pass=$row[2]'
 style='margin-left:12px; color:Magenta; text-decoration:none; font-size:21px;'>Update</a>  
	  </td> 
 ";
	  }
	  echo "</tr></table>";
  }
  
  ?>
  </table>
  
  
  
</form>
 
 
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>