 
<?php 
include('header.php');
  $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
		$id="";
		 $tach_name="";
		 $tach_design="";
		  $tach_depeart="";
		  $tach_phon=""; 
   if(!$sm){
   echo "Connection not Found";
   }else{
   
    $pq="SELECT *FROM `add_departments`";
	  $result=mysqli_query($sm,$pq);
       
	   $connet=1;
	   
	   
	if(!empty($_GET["depid"])){
	 $idd=$_GET["upid"];
 $pq="DELETE FROM `teacher_information_add` WHERE `Id`='$idd'";

  $pa=mysqli_query($sm,$pq);
  
  if($pa>0){
  echo '<script>alert("Your Data Delete  SuccessFull..")</script>';
  }else{
  echo '<script>alert("Your Data Delete Faild..")</script>';
  }   
	} 
	   
	 	  
  if(!empty($_GET["uid"]) && !empty($_GET["t_name"])&& !empty($_GET["t_designation"])&& !empty($_GET["t_depeart"])&& !empty($_GET["t_phon"]))
	   {
	      $id=$_GET["uid"];
		 $tach_name=$_GET["t_name"];
		 $tach_design=$_GET["t_designation"];
		  $tach_depeart=$_GET["t_depeart"];
		  $tach_phon=$_GET["t_phon"];
	   } 
	 //  uid=$row[0]&&t_name=$row[1]
	 // &&t_designation=$row[2]&&t_depeart=$row[]&&t_phon=$row[9]
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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 



      <script> //Date of Birth datepicker
            $(function () {
                $("#datepicker_add").datepicker();
            });
         //Joining add datedatepicker
            $(function () {
                $("#join_datepicker").datepicker();
            });
    </script>
 
 
 
<style>
 form{
 width:110%;
 }
 *{padding:0; margin:0;}
 input[type=text]{
 height:40px;
 margin-left:20px;
 font-size:18px;
 height:50px;
 width:600px;
 }
  
  label{
  margin-left:22px;
  }
   textarea{
    height:80px;
   font-size:18px;
   margin-left:20px;
    width:613px;
 }
  
  select{
   margin-left:20px;
    width:600px;; 
	height:40px;
	font-size:18px;
  }
  
 
</style>
</head>

<body>

 
<form id="form1" name="form1" method="post" action="TacherInformationAdd.php" enctype="multipart/form-data" 
  >
  <table width="110%" border="" bgcolor="OldLace" style="margin-top:50px;">
   
<tr>
<th scope="row"  style="background-color:Indigo; color:#FFFFFF; font-size:24px; padding:10px; text-align:center;">Teacher's information Add All  Technology
	  
	   <marquee direction="right">Teacher Information Update for Name, Department,Designation,Phone</marquee>
	  </th>
    </tr>
	
    <tr>
      <th scope="row" align="left" height="40%">
	  	<br> 
		<input type="hidden" name="pid" value="<?php $id;?>"/>
		
  <input name="Search_btn" type="submit"  value="Search" style="font-size:24px;  float:right; margin-right:20%; margin-top:20px; background-color: #006600;  width:150px;   text-align:center; padding:4px; color:Azure; "/>
	
  
	  <input name="sear_phon_id" autocomplete="off"
	  type="text" placeholder="Phone Number OR ID:" 
	      id="tea_id" style="float:right; width:400px; margin-top:20px; margin-right:8px;   position:relative; "
	 />
		
		
	     <label>Teacher's ID:</label><br> 
	  <input name="tea_id" autocomplete="off"
	  type="text" placeholder="Teacher ID:" 
	      id="tea_id"/>
	  <br><br>
	  

  <label>Teacher's Name:</label><br> 
	  <input name="tea_name" id="tea_name"
	   type="text" placeholder="Teacher Name:" 
	  autocomplete="off" onfocus="this.value=''"
	   value="<?php echo $tach_name;?>"/>
     <br><br>
	
	  
	  
	   <label>Designation:</label><br>
	  <input name="tea_designation" id="tea_designation"
	  onfocus="this.value=''"
	   type="text" placeholder="Designation" autocomplete="off"
	    value="<?php echo $tach_design;?>"/>
	  <br><br>
	  	  
     <label>Department:</label><br>
	   <select name="tea_departmet" id="tea_departmet">
	    <option ><?php if(!empty($tach_depeart))
{echo $tach_depeart;}else{echo "Select Department";}?></option>
	   <?php while($row=mysqli_fetch_array($result)):; ?>
	 <option><?php  echo $row[1];?></option>
	 <?php endwhile; ?>
	 </select>
	  <br><br/>
	 	  	 
	 <label >Gender:</label><br>
	   <select name="tea_gender" id="tea_gender">
	 <option>Select</option>
	 <option>Male</option>
	 <option>Female</option>
	 </select>
	  <br><br>
	  	  
    <label>Relagion:</label><br>
	  <input name="tea_relagion" id="tea_relagion"
	   placeholder="Relagion" type="text" autocomplete="off"
	     /><br><br>
	  
	   <label>Date of Birth:</label><br>
	  <input name="tea_dateBirth" 
	  id="datepicker_add" 
	  type="text" 
	   style="margin-left:20px;
		width:600px;" 
		autocomplete="off"
		placeholder="Date of Birth"
	   /><br><br>
	   
	 
	     <label>Father Name:</label><br>
		 
	  <input name="tea_father" id="tea_father"
	   placeholder="Fateher Name" 
	   type="text" size="78"autocomplete="off" 
	   /><br><br>
	  
	  
	  <label>Mother Name:</label><br>
	  <input name="tea_mother" id="tea_mother"
	  placeholder="Mother Name"
	  autocomplete="off"
	   type="text" size="78" /><br><br>
	  
	  <label>present Address:</label><br> 
	  <textarea name="present_addre"autocomplete="off" row="6" 
	  placeholder="present Address" id="present_addre" cols="72">
	  </textarea><br><br>
	 
   <label>Permanent Address:</label> <br>
	  <textarea name="Permanent_addre" 
	  placeholder="Permanent Address" 
	  row="6" id="Permanent_addre"
	   autocomplete="off">
	   </textarea><br><br>
	 
	   <label>Joining Date:</label><br>
<input name="join_date" type="text"  style="width:600px;" id="join_datepicker" 
	placeholder="Joining Date" id="join_date"  style="margin-left:20px; font-size:22px; width:670px; " autocomplete="off" />
	
	  <br><br>	 
	
	 <label>Email:</label><br>
	  <input name="tea_email"
	   placeholder="Email" autocomplete="off" type="text" 
	   id="tea_email"
	  size="78" maxlength="20" 
	 />
	  <br><br>	 
	    
	    <label>phone Number:</label><br>
<input name="tea_phon" id="tea_phon" placeholder="phone Number" type="text" size="78" maxlength="20" autocomplete="off" id="tea_phon"
	   value="<?php echo $tach_phon; ?>" onfocus="this.value=''"
	 />
	  <br><br>	
	  	 
		 
	  
	   <label>Joining Date Of Current Designation:</label><br>
	  <input name="tea_date_post" placeholder="Joining Date Of Current Designation" type="text" id="tea_date_post"
	  size="78" maxlength="20" autocomplete="off"
	 />
	  <br><br>	
	
	
	   <label>Educational Qualification:</label><br>
	  <input name="tea_qualification" placeholder="Educational Qualification" type="text" id="tea_qualification"
	  size="78" maxlength="20" autocomplete="off"
	 />
	  <br><br>	


	     <label>Professional Skill:</label><br>
	  <input name="tea_skill" placeholder="Skill"
	   id="tea_skill"  type="text" 
	  size="78" maxlength="20" autocomplete="off"
	 />
	  <br><br>	
	  
	 
<input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" 
style="font-size:24px; margin-left:20px; " /><br><br> <br> 
	 
 <input name="add_tacher" type="submit" class="btn-outline-primary btn-sm" value="Add" style="font-size:24px;  width:150px; margin-left:150px; text-align:center;"/>
 
 <input name="showbutton"   type="submit" class="btn-outline-primary btn-sm" value="Show" style="font-size:24px;   width:150px; margin-left:20px; "/>
 
 <input name="update_button" type="submit"  class="btn-outline-primary btn-sm" value="Update" style="font-size:24px;  width:150px; margin-left:20px; "/>
<br><br>
 
<?php 
 
   if($connet==1){
   $ad="";
   $sm=mysqli_connect("localhost","root","","collage_management");
   
   if(isset($_POST["add_tacher"])){
   
      $teacher_id=$_POST["tea_id"];
	   $email=$_POST["tea_email"]; 
	   
	   
  $match_id="SELECT `Id` FROM `teacher_information_add` where  `Id`='$teacher_id'";
	  $re=mysqli_query($sm,$match_id);
	  if($row=mysqli_fetch_row($re)){
	   // $ad=$row[0];
	 echo '<script>alert("Your Id alrady Exist")</script>'; 
	 		}else{
		
	    $teacher_name=$_POST["tea_name"];
		  $designation_name=$_POST["tea_designation"]; 
		  $department_name=$_POST["tea_departmet"]; 
		  $phone_number=$_POST["tea_phon"]; 
		  
		  $teacher_gender=$_POST["tea_gender"]; 
		  $teacher_rela=$_POST["tea_relagion"]; 
		  $date_Birt=$_POST["tea_dateBirth"]; 
		  $father_name=$_POST["tea_father"]; 
		  $mother_name=$_POST["tea_mother"]; 
		  $present_ad=$_POST["present_addre"];
		   
		  $perment_ad=$_POST["Permanent_addre"]; 
		  $join_date=$_POST["join_date"]; 
		 
		  $qulification=$_POST["tea_qualification"]; 
	
		  $skil=$_POST["tea_skill"];
		    
		   $posting=$_POST["tea_date_post"];
		 
		    if(empty($_POST['tea_id'])){
	  echo '<script>alert("Your Id   Empty")</script>';
	   } 
	  	else  if(empty($_POST["tea_name"])){
	 echo '<script>alert("Your Name Name Empty")</script>';
	 }
	   else if(empty($_POST['tea_designation'])){
	echo '<script>alert("Your Designation  is Empty")</script>';
	   }
	   
	   else if(empty($_POST['tea_departmet'])){
	echo '<script>alert("Your Depadrtment is Empty")</script>';
	   }
	   
	   else if(empty($_POST['tea_gender'])){
	echo '<script>alert("Your Serial Id  is Empty")</script>';
	   }
	   
	   else if(empty($_POST['tea_relagion'])){
	echo '<script>alert("Your  Relagion  is Empty")</script>';
	   }
	   
	   else if(empty($_POST['tea_dateBirth'])){
	echo '<script>alert("Your Date of Birth  is Empty")</script>';
	   }
	   
	   else if(empty($_POST['tea_father'])){
	echo '<script>alert("Your Father Name is Empty")</script>';
	   }
	   
	    else if(empty($_POST['tea_mother'])){
	echo '<script>alert("Your Serial Id  is Empty")</script>';
	   }
	   
	   else if(empty($_POST['present_addre'])){
	echo '<script>alert("Your Present Addressis Empty")</script>';
	   }
	   
	   else if(empty($_POST['Permanent_addre'])){
	echo '<script>alert("Your Permanent Addess is Empty")</script>';
	   }
  
	   else if(empty($_POST['join_date'])){
	echo '<script>alert("Your Join Date is Empty")</script>';
	   }
	    else if(empty($_POST['tea_qualification'])){
	echo '<script>alert("Your Qualification  is Empty")</script>';
	   }
	  else if(empty($_POST['tea_skill'])){
	echo '<script>alert("Your SKill  is Empty")</script>';
	   } 
	   else if(empty($_POST['tea_date_post'])){
	echo '<script>alert("Joining Date Of Current Designation:")</script>';
	   } else{
  
		 $target_dir ="Teacher_image/";
		  
 $target_file =$target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
 
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
  
// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		 
  $sq="INSERT INTO `teacher_information_add`VALUES('$teacher_id','$teacher_name','$designation_name','$department_name',
'$date_Birt','$teacher_gender','$teacher_rela','$father_name',
'$mother_name','$phone_number','$email','$present_ad','$perment_ad',
'$join_date','$posting','$qulification','$skil',
'$target_file')";

   $pa=mysqli_query($sm,$sq);
  
  if($pa>0){
   
	echo '<script type="text/javascript">
		  
	   swal({
  title: "Your Image Upload SuccessFull..",
  text: "You clicked the button!",
  icon: "success",
  button: "Close!",
});

  </script>';  
  
  showAll("SELECT *FROM `teacher_information_add`"); 
   }else{
  echo '<script>alert("Your Data Insert Faild..")</script>';
   }

  } 
}
	}  
  }
}
 
  }

?> </th>
 </tr>
 

  <?php 
 
   if($connet==1){
   
     if(isset($_POST["showbutton"])){
	 
   $pq="SELECT *FROM `teacher_information_add`";
  $result=mysqli_query($sm,$pq);
	  
   echo"<table width='110%' border='1' bgcolor='Aqua'>
      <tr>  
    <td align='center' style='padding:7px;'>id</td>
	<td align='center'>Name</td>
	<td align='center'>Designation</td> 
	<td align='center'>Department</td>
	<td align='center'>Date of Birth</td>
	<td align='center'>Gender</td>
	<td align='center'>Relagion</td>
	<td align='center'>Father Name</td>
	<td align='center'>Mother Name</td>
	<td align='center'>phone Number</td>
	<td align='center'>Email</td>
	<td align='center'>Present Address</td>
	<td align='center'>Permanent Address</td>
	<td align='center'>Joining_Date</td>
	<td align='center'>Joining Date Of Current_Designation</td>
	<td align='center'>Educational qualification</td>
	<td align='center'>Professional Skill</td>
	<td align='center'>Image</td>
	<td align='center'>Action</td> 
	</tr>";
	
	 while($row=mysqli_fetch_row($result)){
	 
 echo "<td align='center' style='padding:6px;'>".$row[0]."</td>
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
 <td align='center'>
 
 <img src='".$row[17]."' height='120px'
 width='150px' style='padding:5px;'/>
 
 </td> 
 <td align='center'>
	  <a href='TacherInformationAdd.php?depid=$row[0]' 
	  style='margin-left:8px;color:Red; text-decoration:none; font-size:21px;'>Delete</a>
	  
	   <a href='TacherInformationAdd.php?uid=$row[0]&&t_name=$row[1]
	  &&t_designation=$row[2]&&t_depeart=$row[3]&&t_phon=$row[9]'
	   style='margin-left:12px; color:Magenta; text-decoration:none; font-size:21px;'>Update</a>
	  </td></tr>";
	 } 
	 echo"</table>";	
   }
    } 
?>
  
 
<?php 
 
  if($connet==1){
   if(isset($_POST["update_button"])){
  
  
   $idd=$_POST["pid"];
		 
	     $teacher_name=$_POST["tea_name"];
	    $teacher_design=$_POST["tea_designation"];
		$teacher_depart=$_POST["tea_department"];
		$teacher_phon=$_POST["tea_phon"];
		
	   if(empty($_GET["tea_name"])){
	  echo '<script>alert("Your Teacher Name is Empty..")</script>';
	  
	   }else if(empty($_GET["tea_designation"])){
	  echo '<script>alert("Your Designation is Empty..")</script>';
	  
	   } else if(empty($_GET["tea_department"])){
	  echo '<script>alert("Your Department Name is Empty..")</script>';
	  
	   } else if(empty($_GET["$tea_phon"])){
	  echo '<script>alert("Your Phon Number is Empty..")</script>';
	  
	   }else{
	   
	 
 $pq="UPDATE `teacher_information_add` SET `Name`='$teacher_name',
`Designation`='$teacher_design',`Department`='$teacher_depart',`Mobile_No`='$teacher_phon' WHERE `Id`='$idd'";

  $pa=mysqli_query($sm,$pq);
  
  if($pa>0){
  
  echo '<script>alert("Your Update SuccessFull..")</script>';
  }else{
  echo '<script>alert("Your Update Faild..")</script>';
  }
 
   }
   }
 }
 ?> 
  
  
  
  
 
 <?php 
   function showAll($pq){
   
   $sm=mysqli_connect("localhost","root","","collage_management");
 if($connet==1){
 
  $result=mysqli_query($sm,$pq);
   echo"<table width='110%' border='1' bgcolor='Aqua'>
      <tr >  
    <td align='center' style='padding:6px;'>id</td>
	<td align='center'>Name</td>
	<td align='center'>Designation</td> 
	<td align='center'>Department</td>
	<td align='center'>Date of Birth</td>
	<td align='center'>Gender</td>
	<td align='center'>Relagion</td>
	<td align='center'>Father Name</td>
	<td align='center'>Mother Name</td>
	<td align='center'>phone Number</td>
	<td align='center'>Email</td>
	<td align='center'>Present Address</td>
	<td align='center'>Permanent Address</td>
	<td align='center'>Joining_Date</td>
	<td align='center'>Joining Date Of Current_Designation</td>
	<td align='center'>Educational qualification</td>
	<td align='center'>Professional Skill</td>
	<td align='center'>Image</td>
	<td align='center'>Action</td> 
	</tr>";
	
	 while($row=mysqli_fetch_row($result)){
	 
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
 <td align='center'><img src='".$row[17]."' height='120px'
 width='150px' style='padding:5px;'/>
 </td> 
 <td align='center'>
	  <a href='TacherInformationAdd.php?depid=$row[0]' 
	  style='margin-left:8px;color:Red; text-decoration:none; font-size:21px;'>Delete</a>
	  
	   <a href='TacherInformationAdd.php?uid=$row[0]&&t_name=$row[1]
	  &&t_designation=$row[2]&&t_depeart=$row[3]&&t_phon=$row[9]'
	   style='margin-left:12px; color:Magenta; text-decoration:none; font-size:21px;'>Update</a>
	  </td></tr>";
	 }
	 echo"</table>";
 }
 }
 ?>
 
 <?Php 
  if($connet==1){
 
 if(isset($_POST["Search_btn"])){
 $phon_id=$_POST["sear_phon_id"];
 
   if(empty($_GET["sear_phon_id"])){
	  echo '<script>alert("Please Your ID OR Number..")</script>';
	  
	   }else{
    $pp="SELECT *FROM `teacher_information_add` WHERE `Id`='$phon_id' OR `Mobile_No`='$phon_id'";
	
	 
  $result=mysqli_query($sm,$pp);
   echo"<table width='110%' border='1' bgcolor='Aqua'>
      <tr>  
    <td align='center' style='padding:6px;'>id</td>
	<td align='center'>Name</td>
	<td align='center'>Designation</td> 
	<td align='center'>Department</td>
	<td align='center'>Date of Birth</td>
	<td align='center'>Gender</td>
	<td align='center'>Relagion</td>
	<td align='center'>Father Name</td>
	<td align='center'>Mother Name</td>
	<td align='center'>phone Number</td>
	<td align='center'>Email</td>
	<td align='center'>Present Address</td>
	<td align='center'>Permanent Address</td>
	<td align='center'>Joining_Date</td>
	<td align='center'>Joining Date Of Current_Designation</td>
	<td align='center'>Educational qualification</td>
	<td align='center'>Professional Skill</td>
	<td align='center'>Image</td>
	<td align='center'>Action</td> 
	</tr>";
	
	 if($row=mysqli_fetch_row($result)){
	 
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
 <td align='center'><img src='".$row[17]."' height='120px'
 width='150px' style='padding:5px;'/>
 </td> 
 <td align='center'>
	  <a href='TacherInformationAdd.php?depid=$row[0]' 
	  style='margin-left:8px;color:Red; text-decoration:none; font-size:21px;'>Delete</a>
	  
	   <a href='TacherInformationAdd.php?uid=$row[0]&&t_name=$row[1]
	  &&t_designation=$row[2]&&t_depeart=$row[3]&&t_phon=$row[9]'
	   style='margin-left:12px; color:Magenta; text-decoration:none; font-size:21px;'>Update</a>
	  </td></tr>";
	 }else{
  echo '<script>alert("Your Data Not Match..")</script>';
	 }
	 echo"</table>";
 }}
 }
 
 ?>
  </table>
  
  
  
</form>
 

 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>