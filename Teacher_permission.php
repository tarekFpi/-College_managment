 
<?php 
 include('header.php'); 
	 $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
	
	  $teac_id="";
		 $gmail="";
		 $password="";
		  $pp=0;
		  $tec_id="";
		  
   if(!$sm){
   echo "Connection not Found";
   }else{
   
      $pq="SELECT *FROM `add_departments`";
	  $result=mysqli_query($sm,$pq);
       
      $connet=1;
	 
	 // ta_id=$row[0]&&gma=$row[4]&&pass=$row[5]'
	 
if(!empty($_GET["dele_id"])){

    $tec_id=$_GET["dele_id"];
   $pa="DELETE FROM `teacher_permission` WHERE `Id`='$tec_id'";
   $pq=mysqli_query($sm,$pa);
   
   if($pq>0){
   $pp=1;
   echo '<script>alert("Your Data Delete SuccessFull..")</script>';
   }else{
   echo '<script>alert("Your Data Delete Faild..")</script>';
   }
   
 }	 
 
	 
  if(!empty($_GET["ta_id"])&& 
  !empty($_GET["gma"])&& !empty($_GET["pass"])){
 
        $teac_id=$_GET["ta_id"];
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
		
		
		<script  type ="text/javascript">
		function checktextfild(){
		var textError="";
		
		if(document.getElementById("tea_departmet").value==""){
		textError+="please Enter your Roll\n";
		document.getElementById("tea_departmet").style.broderColor="#B22222";
		
	 } else if(document.getElementById("st_gmail").value==""){
		textError+="please Enter your  Gmail\n";  
 document.getElementById("st_gmail").style.broderColor="#B22222";
		}
		
		
	  else if(document.getElementById("tea_id").value==""){
		textError+="please Enter your  Password\n";  
 document.getElementById("tea_id").style.broderColor="#B22222";
		}
		
	  else if(document.getElementById("tea_password").value==""){
		textError+="please Enter your  Password\n";  
 document.getElementById("tea_password").style.broderColor="#B22222";
		}
		
		  else if(document.getElementById("tea_password").value==""){
		textError+="please Enter your  Password\n";  
 document.getElementById("tea_password").style.broderColor="#B22222";
	 
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
    width:580px; 
	height:50px;
	font-size:18px;
  }
.header{
   background-color:Indigo;
	 width: 100%;
	 height: 90px;
}

</style>
</head>

<body>
 

<form  name="form1" method="post" action="Teacher_permission.php" enctype="multipart/form-data" style="margin-top:50px;">
  <table width="100%" border="" bgcolor="LightYellow">
  
	
	 <tr>
      <th scope="row"  style="background-color:Indigo; color:#FFFFFF; font-size:24px; padding:10px; text-align:center;">Teacher's Login password permission</th>
    </tr>
	
    <tr>
      <th scope="row" align="left" height="40%" style="margin-top:80px;">	<br><br> 
	  	 <input type="submit" name="search_btn" value="Search" class="btn btn-primary" style="font-size:20px; float:right; margin-top:20px; margin-right:10px; width: 150px; height:50px;"/>
		 
	  	<br>    
	  <input name="tea_phon" type="text" placeholder="Teacher  Phone number" autocomplete="off"
	  size="40" maxlength="20" style="float:right; margin-right:8px;"
	 />

	  <br><br>
	
	  
	<input type="hidden" name="pid"  value="<?php echo $teac_id;?>"/> 
	  
 <label>Department:</label><br>
	  
	 <select name="tea_departmet">
	    <option>Select</option>
	   <?php while($row=mysqli_fetch_array($result)):; ?>
	 <option><?php  echo $row[1];?></option>
	 <?php endwhile; ?>
	 
	 </select>
	  <br><br>
	  
  
  <label>Id:</label><br> 
	  <input name="tea_id" type="text" placeholder="Id" size="60"
	   maxlength="20" autocomplete="off" 
	 />
  <br><br>
	  	   	  

  <label>Gmail:</label><br> 
	  <input name="tea_gmail" type="text" placeholder="Gmail" size="60" maxlength="20" autocomplete="off" onfocus="this.value=''" value="<?php echo $gmail; ?>"
	 />
  <br><br>
      
		  
	  <label>password:</label><br>
	  <input name="tea_password" type="text" placeholder="Teacher password"  size="60" maxlength="20"autocomplete="off" onfocus="this.value=''" 
	  value="<?php echo $password; ?>"
	 />
	  <br><br> <br>
	 
	 
 <input name="add_tacher" type="submit" class="btn-outline-primary btn-sm" value="Save" style="font-size:24px;  width:150px; margin-left:150px; text-align:center;"/>
 
   <input name="showbutton" type="submit" class="btn-outline-primary btn-sm" value="Show" style="font-size:24px;  width:150px; margin-left:20px; "/>



 <input name="update_button" type="submit" class="btn-outline-primary btn-sm" value="Update" style="font-size:24px;  width:150px; margin-left:20px; "/>
 <br><br>

 </th>
 </tr>
 
  <tr>
<th scope="row" align="center">
 <?php 
 
   if($connet=1){
  $sm=mysqli_connect("localhost","root","","collage_management");
	  if(isset($_POST["search_btn"])){
	  
	  $phon=$_POST["tea_phon"];
	 
	  if(empty($_POST['tea_phon'])){
	  echo '<script>alert("Your Search is is Empty")</script>';
	   }else{
	 
 $pq="SELECT `Id`,`Name`,`Department`,`Designation`,`Mobile_No`,`Image` 
 FROM  `teacher_information_add` WHERE `Mobile_No`='$phon'";
 
      $result=mysqli_query($sm,$pq);
	  echo"<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
	   <thead class='table-dark'>
      <tr>
	  <td align='center'>Id</td>
    <td align='center'>Name</td><td align='center'>Department</td><td align='center'>Designation</td>  <td align='center'>phone Number</td>
	<td align='center'>Image</td>
	</tr></thead>";
	
	  if($row=mysqli_fetch_row($result)){
	  
  echo "<tr>
        <td align='center'>".$row[0]."</td>
      <td align='center'>".$row[1]."</td>
      <td align='center'>".$row[2]."</td>
	   <td align='center'>".$row[3]."</td>
	   <td align='center'>".$row[4]."</td>
	   <td align='center'><img src='".$row[5]."' height='120px'
	    width='150px' style='padding:5px;'/>
 </td>";
	  }else{
 echo '<script>alert("Your Data Not Match..")</script>';
	  }
	  echo "</tr></table>";
	  }
	  }
	  }
 
	  ?>

</th>
  </tr>
 
 <?php 
 
  if($connet=1){
  $ad="";
	  if(isset($_POST["add_tacher"])){
	  
	    $ta_id=$_POST["tea_id"];
	     $gmail=$_POST["tea_gmail"];
		 $status=$_POST["tea_departmet"];
		 $password=$_POST["tea_password"];
	  
	  
	  if(empty($_POST['tea_departmet'])){
	echo '<script>alert("Your Department is Empty")</script>';
	   }
	   else if(empty($_POST['tea_id'])){
	echo '<script>alert("Your Id is Empty")</script>';
	   } 
	      else if(empty($_POST['tea_gmail'])){
	echo '<script>alert("Your Gamil is Empty")</script>';
	   } 
	     
	  else if(empty($_POST['tea_password'])){
	echo '<script>alert("Your password is Empty")</script>';
	   }else{
 
		$match_id="SELECT `Id` FROM `teacher_permission`";
		  $re=mysqli_query($sm,$match_id);
	  while($row=mysqli_fetch_row($re)){
	    $ad=$row[0];
		
	  }if(strcasecmp($ad,$teacher_id)){
	 echo '<script>alert("Your Id alrady Exite")</script>'; 
	 
		}else{
		 
		 
 $pq=" INSERT INTO `teacher_permission`(`Id`,`Department`,`Gmail`,`Password`) VALUES('$ta_id','$status','$gmail','$password')";
   $pa=mysqli_query($sm,$pq);
   
 if($pa>0){
 
 echo '<script>alert("Your Data Add SuccessFull..")</script>';
 
   showAll("SELECT `Id`,`Name`,`Department`,`Designation`, `Gmail`, `Password`, `Image` FROM `teacher_log`
 ");
 }else{
  echo '<script>alert("Your Data Add Faild...")</script>';
}
  }
 }
 }  
}
 
  ?>
  
 
  
 <?php 
 
  if($connet=1){
	  if(isset($_POST["showbutton"])){
	  
  $pq="SELECT `Id`,`Name`,`Department`,`Designation`, `Gmail`, `Password`, `Image` FROM `teacher_log`
 ";
   $re=mysqli_query($sm,$pq);
   
     echo"<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
	   <thead class='table-dark'>
      <tr>
	  <td align='center'>Id</td>
    <td align='center'>Name</td>
	<td align='center'>Department</td>
	<td align='center'>Designation</td>  
	<td align='center'>Gmail</td>
	<td align='center'>password</td>
	<td align='center'>Image</td>
	<td align='center'>Action</td>
	</tr></thead>";
	
  while($row=mysqli_fetch_array($re)){
	  
  echo "<tr><td align='center'>".$row[0]."</td>
       <td align='center'>".$row[1]."</td>
       <td align='center'>".$row[2]."</td>
	   <td align='center'>".$row[3]."</td>
	    <td align='center'>".$row[4]."</td>
		<td align='center'>".$row[5]."</td>
	    <td align='center'><img src='".$row[6]."' height='120px'
	    width='150px' style='padding:5px;'/>
		
 <td align='center'>
  <a href='Teacher_permission.php?dele_id=$row[0]'  style='margin-left:8px;color:Red; text-decoration:none; font-size:21px;'>Delete</a> 
  <a href='Teacher_permission.php?ta_id=$row[0]&&gma=$row[4]&&pass=$row[5]'
 style='margin-left:12px; color:Indigo; text-decoration:none; font-size:21px;'>Update</a>  
	  </td> ";
		
	  }
	
 }
	  
}
 
  ?>
  
  
  <?php 
 
  if($connet==1){
   $sm=mysqli_connect("localhost","root","","collage_management");
   
	  if(isset($_POST["update_button"])){
	  
	     $tech_id=$_POST["pid"];
	     $gmail=$_POST["tea_gmail"];
		 $pass=$_POST["tea_password"];
		 
		 
	  if(empty($_POST['tea_gmail'])){
	echo '<script>alert("Your Gamil is Empty")</script>';
	   }
	   else if(empty($_POST['tea_password'])){
	echo '<script>alert("Your password is Empty")</script>';
	   } 
	   else if(empty($_POST['pid'])){
	echo '<script>alert("Your Seriel Id is Empty")</script>';
	   }else{
	     
$sq="UPDATE `teacher_permission` SET `Gmail`='$gmail',`Password`='$pass' WHERE `Id`='$tech_id'";
   $pp=mysqli_query($sm,$sq);
   
 if($pp>0){
 
 echo '<script>alert("Your Data Update SuccessFull..")</script>';
 
  showAll("SELECT `Id`,`Name`,`Department`,`Designation`, `Gmail`, `Password`, `Image` FROM `teacher_log`
 ");
 
 }else{
  echo '<script>alert("Your Data Update Faild...")</script>';
}
}
	
 }
	  
}
 
  ?>
  
  
  <?php 
  function showAll($pq){
$sm=mysqli_connect("localhost","root","","collage_management");  
   $re=mysqli_query($sm,$pq);
     echo"<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
	 <thead class='table-dark'>
      <tr>
	  <td align='center'>Id</td>
    <td align='center'>Name</td>
	<td align='center'>Department</td>
	<td align='center'>Designation</td>  
	<td align='center'>Gmail</td>
	<td align='center'>password</td>
	<td align='center'>Image</td>
	<td align='center'>Action</td>
	</tr></thead>";
	
  while($row=mysqli_fetch_row($re)){
	  
  echo "<tr><td align='center'>".$row[0]."</td>
       <td align='center'>".$row[1]."</td>
       <td align='center'>".$row[2]."</td>
	   <td align='center'>".$row[3]."</td>
	    <td align='center'>".$row[4]."</td>
		<td align='center'>".$row[5]."</td>
	    <td align='center'><img src='".$row[6]."' height='120px'
	    width='150px' style='padding:5px;'/>
		
		 <td align='center'>
  <a href='Teacher_permission.php?dele_id=$row[0]'  style='margin-left:8px;color:Red; text-decoration:none; font-size:21px;'>Delete</a> 
  
  <a href='Teacher_permission.php?ta_id=$row[0]&&gma=$row[4]&&pass=$row[5]'
 style='margin-left:12px; color:Magenta; text-decoration:none; font-size:21px;'>Update</a>  
	  </td> ";
		
	  }
  }
  
  ?>
  
  
  <?php 
  
   if($pp==1){
   showAll("SELECT `Id`,`Name`,`Department`,`Designation`, `Gmail`, `Password`, `Image` FROM `teacher_log`
 ");
   }
  
  ?>
  </table>
  
 
 
</form>
 


</body>
</html>
</body>
</html>