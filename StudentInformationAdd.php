<?php 
 include('header.php'); 
  $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
	
	     $roll="";
		 $st_reg="";
		 $st_depear="";
		  $st_semester="";
		  $st_section="";
		  $st_phonNum="";
		  $st_probid="";
		  
   if(!$sm){
   echo "Connection not Found";
   }else{
   
    $pq="SELECT *FROM `add_departments`";
	  $result=mysqli_query($sm,$pq);
       
	   $connet=1;
	   
	    //delete
	 if(!empty($_GET["up_roll"])){
	   $delet_roll=$_GET["up_roll"];
	   
	  $pq="DELETE FROM `student_information_add` WHERE `Roll`='$delet_roll'";
   
     $pa=mysqli_query($sm,$pq);
   
   if($pa>0){
   echo '<script>alert("Your Data Delete SuccessFull..")</script>';
   
    showAll("SELECT *FROM `student_information_add`");
   }else{
   echo '<script>alert("Your Data Delete Faild..")</script>';
     }
	 }  
 
  if(!empty($_GET["st_roll"]) && !empty($_GET["st_regist"])&&
   !empty($_GET["st_depeart"])&& 
   !empty($_GET["st_semester"])
   &&!empty($_GET["st_section"])
   && !empty($_GET["st_phon"]) 
   && !empty($_GET["st_probiden"])&&
    !empty($_GET["st_phon"]))
	  {
	  
	     $roll=$_GET["st_roll"];
		 $st_reg=$_GET["st_regist"];
		 $st_depear=$_GET["st_depeart"];
		  $st_semester=$_GET["st_semester"];
		  $st_section=$_GET["st_section"]; 
		  $st_phonNum=$_GET["st_phon"];
		  $st_probid=$_GET["st_probiden"];
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
		
		
 	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"
	</script>
	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
	</script>
		
 	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
	
		 <script> //Date of Birth datepicker
            $(function () {
                $("#datepicker_add").datepicker();
            });
        </script>
		
		
	<script>
		function checktextfild(){
		var textError="";
		if(document.getElementById("st_roll").value==""){
		textError+="please Enter your Student Roll";
	 	document.getElementById("st_roll").style.borderColor="RED";
	  }else if(document.getElementById("st_regist").value==""){
		textError+="please Enter your  Registration";
  
  document.getElementById("st_regist").style.borderColor="RED";
		}
	  else if(document.getElementById("st_session").value==""){
		textError+="please Enter your  Student Session";  
  document.getElementById("st_session").style.borderColor="RED";
		}	
		 else if(document.getElementById("st_depart").value==""){
		textError+="please Enter your Departmet";
		 document.getElementById("st_depart").style.borderColor="RED";
		}else if(document.getElementById("st_name").value==""){
		textError+="please Enter your Student Name";
  document.getElementById("st_name").style.broderColor="RED";
		}
		
		else if(document.getElementById("st_depart").value==""){
		textError+="please Enter your Depeartment";
  document.getElementById("st_depart").style.broderColor="RED";
		}
		
		else if(document.getElementById("st_shift").value==""){
		textError+="please Enter your Shift";
  document.getElementById("st_shift").style.broderColor="RED";
		}
		
		else if(document.getElementById("st_section").value==""){
		textError+="please Enter your Section";
  document.getElementById("st_section").style.broderColor="RED";
		}
		
		else if(document.getElementById("st_probid").value==""){
		textError+="please Enter your probidan";
  document.getElementById("st_probid").style.broderColor="RED";
		}
		
		else if(document.getElementById("st_gender").value==""){
		textError+="please Enter your Gender";
  document.getElementById("st_gender").style.broderColor="RED";
		}
		
		else if(document.getElementById("st_relagion").value==""){
		textError+="please Enter your Relagion";
  document.getElementById("st_relagion").style.broderColor="RED";
		}
		else if(document.getElementById("st_father").value==""){
		textError+="please Enter your Father Name";
		 document.getElementById("st_father").style.borderColor="RED";
		}
		else if(document.getElementById("st_mother").value==""){
		textError+="please Enter your Mother";
		 document.getElementById("st_mother").style.borderColor="RED";
		} 
	
		else if(document.getElementById("datepicker_add").value==""){
		textError+="please Enter your Date of Brith";
		document.getElementById("datepicker_add").style.borderColor="RED";
		}
		 else if(document.getElementById("st_phon").value==""){
		textError+="please Enter your Phon Number";  
 document.getElementById("tea_phon").style.borderColor="RED";
		}
	 else if(document.getElementById("Permanent_addre").value==""){
		textError+="please Enter your Permanent Address";
 document.getElementById("Permanent_addre").style.borderColor="RED";
		}
	  else if(document.getElementById("present_addre").value==""){
		textError+="please Enter your Permanent Address";
		document.getElementById("present_addre").style.borderColor="RED";
		} 
		
		 else if(document.getElementById("fileToUpload").value==""){
		textError+="please Enter your image Select";
		document.getElementById("fileToUpload").style.borderColor="RED";
		}
		if(textError!=""){
		 alert(textError);
		 return "";
		}else{
		documen.cookie="cdd=1";
		return true;}
		
 
		}
		</script>	
 	 
<style>
 form{
 width:110%;
 }
 
 input[type=text]{
 height:50px;
 margin-left:20px;
 font-size:18px;
 width:600px;
 }
 .date_test{
  height:40px;
 margin-left:20px;
 font-size:18px;
 width:600px;
 }
  
  label{
  margin-left:20px;
  }
  textarea{
    height:90px;
   font-size:18px;
   margin-left:20px;
   width:600px;
 }
  
  select{
   margin-left:20px;
    width:600px; 
	height:50px;
	font-size:18px;
  }
.header{
  background-color: Indigo;
	 width: 122%;
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

<div class="header">

     <ul>
   	<li><a href="#">Student Information</a></li>		
    <li><a href="#"> Homepage</a></li>
	<li><a href="#"> Result</a></li>
     </ul>
	</div> 


<form id="form1" name="form1" method="post" action="StudentInformationAdd.php" enctype="multipart/form-data">
  <table width="110%" border="" bgcolor="LightGoldenRodYellow">
 <tr>
  <th scope="row"  style="background-color:Indigo; color:#FFFFFF; font-size:24px; padding:10px; margin-top:0px; text-align:center;">Student's information Add All  Technology 
	  
  <marquee direction="right">Student Information Update for Registration, Department,Semester,Section,probidan</marquee>
	  </th>
    </tr>

  
    <tr>
      <th scope="row" align="left" height="40%"><br>
	<input type="hidden" name="up_roll" value="<?php echo $roll; ?>"/>


 <input name="Search_btn" type="submit"  value="Search" style="font-size:24px;  float:right; margin-right:20%; margin-top:20px; background-color: #006600;  width:150px;   text-align:center; padding:4px; color:Azure; "/>
	
  
	  <input name="sear_phon_roll" autocomplete="off"
	  type="text" placeholder="Phone Number OR Roll:" 
	      id="tea_id" style="float:right; width:400px; margin-top:20px; margin-right:8px;   position:relative; "
	 />



	
	     <label>Student Roll:</label><br> 
	  <input name="st_roll" type="text" 
	  placeholder="Your Roll" size="40" maxlength="20" 
	  autocomplete="off" id="st_roll"
	 />
	  <br><br>
	  
	   <label>Registration:</label><br>
	  <input name="st_regist" type="text" placeholder="Your Registration"  size="40"    autocomplete="off" id="st_regist"
	  value="<?php echo $st_reg; ?>"
	 />
	  <br><br>
	  
	  
	  
	   <label>Session:</label><br>
	  <input name="st_session" type="text"  placeholder="Your Session"  size="40"    autocomplete="off" id="st_session"
	 />
	  <br><br>
	 
	 
	  
	   <label>Student Name:</label><br>
	  <input name="st_name" placeholder="Your Name"  type="text" size="78" maxlength="20" autocomplete="off" id="st_name"
	 />
	  <br><br>
	      
		   
	     <label>Department:</label><br>
	   <select name="st_depart" >
    <option><?php if(!empty($st_depear))
{echo $st_depear;}else{echo "Select Department";}?></option>
 
	   <?php while($row=mysqli_fetch_array($result)):; ?>
	 <option><?php  echo $row[1];?></option>
	 <?php endwhile; ?>
	 
	 </select>
	  <br><br>
	  

	  
  <label>Shift:</label><br>
	 <select name="st_shift" autocomplete="off" id="st_shift">
	 <option>Select</option>
	 <option>First Shift</option>
	 <option>Second Shift</option>
	 </select>
	 
	  <br><br>
	  

	  
	    <label>Semester:</label><br>  
	  <select name="st_semester"   id="st_semester">
	  <option ><?php if(!empty($st_semester))
{echo $st_semester;}else{echo "Select Semester";}?></option>
	  <option>First Semester</option>
	  <option>Second Semester</option>
	  <option>Third Semester</option>
	  <option>Fourth Semester</option>
	  <option>Fivth Semester</option>
	  <option>Sixth Semester</option>
	  <option>Seventh Semester</option>
	   <option>Eight Semester</option>
	 </select>
	 
	  <br><br>
	  
	  <label>Section:</label><br>
	  
	  <select name="st_section" id="st_section">
	 <option><?php if(!empty($st_section))
{echo $st_section;}else{echo "Select Section";}?></option>
	 <option>A</option>
	 <option>B</option>
	 </select>
	 
	  <br><br>
	  
   <label>probidan:</label><br>
	  <input name="st_probid" id="st_probid"
	   placeholder="Your probidan"  type="text"  
	    maxlength="20"  
	   autocomplete="off" value="<?php echo $st_probid;?>"
	 />	 <br><br>
	 
	 
 
	   <label>Gender:</label><br>
	   
	   <select name="st_gender" id="st_gender" >
	 <option>Select</option>
	 <option>Male</option>
	 <option>Female</option>
	 </select>
	  <br><br>
	  
    <label>Relagion:</label><br>
	  <input name="st_relagion" placeholder="Your Relagion" type="text" 
	  autocomplete="off"  id="st_relagion"/><br><br>
	  
	   <label>Date of Birth:</label><br>
	  <input name="st_dateB" type="text" 
	  id="datepicker_add" class="date_test"
	  placeholder="Date of Birth"autocomplete="off"
	  style="margin-left:20px;   width:545px;"/>
	  <br><br>
	  
	     <label>Father Name:</label><br>
	  <input name="st_father" id="st_father"
	   placeholder="Your Father Name" 
	   autocomplete="off"
	   type="text" size="78"  /><br><br>
	  
	  
	     <label>Mother Name:</label><br>
	  <input name="st_mother" id="st_mother"
	  placeholder="Your Mother Name" autocomplete="off"
	  type="text"   /><br><br>
	  
	  <label>present Address:</label><br> 
	  <textarea name="present_addre" row="6" id="present_addre"
	   placeholder="Your present Address"  
	   autocomplete="off" cols="72" style="margin-left:20px;"></textarea><br><br>
	 
   <label>Permanent Address:</label> <br>
	  <textarea name="Permanent_addre" placeholder="Your Permanent Address" row="6" autocomplete="off" cols="72" id="Permanent_addre"></textarea><br><br>
	 
  <label>phon Number:</label><br>
	  <input name="st_phon" placeholder="Your phon Number" type="text" 
	   id="st_phon"
	  autocomplete="off"  value="<?php echo $st_phonNum; ?>"
	 />
	  <br><br>	 
	 
	  
	 
		  
<input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" 
style="font-size:24px; margin-left:20px; " /><br><br> <br> 
	 
 <input name="addbtn" type="submit" class="btn-outline-primary btn-lg"  value="Add" style="font-size:24px;  width:150px; margin-left:150px; text-align:center;"/>
 
    <input name="showbutton" type="submit" class="btn-outline-primary btn-lg" value="Show" style="font-size:24px;  width:150px; margin-left:20px; "/>

   <input name="update_button" type="submit" class="btn-outline-primary btn-lg"   value="Update" style="font-size:24px; width:150px; margin-left:20px; "/>
<br><br>

 
  
 </th>
 </tr>
 
  </table>
  
  <?php 
 if( $connet==1){

  if(isset($_POST["addbtn"]))
{

$roll=$_POST["st_roll"];
  $regist=$_POST["st_regist"];
	
  $match_rl_reg="SELECT *FROM `student_information_add` WHERE `Roll`='$roll' AND `Registration`='$regist'";
  
	  $re=mysqli_query($sm,$match_rl_reg);
	  if($row=mysqli_fetch_row($re)){
	   // $ad=$row[0];
	 echo '<script>alert("Your Roll And Registration Alrady Exist")</script>'; 
	  }else{
			
  $match_rol="SELECT *FROM `student_information_add` WHERE `Roll`='$roll'";	
	  $result=mysqli_query($sm,$match_rol);
	  if($row=mysqli_fetch_row($result)){
	   // $ad=$row[0];
	 echo '<script>alert("Your Roll Alrady Exist")</script>'; 
	 }else{ 
			
   $roll=$_POST["st_roll"];
    $regist=$_POST["st_regist"];
	 $session=$_POST["st_session"];
	  $name=$_POST["st_name"];
	   $department=$_POST["st_depart"];
	    $shift=$_POST["st_shift"];
	    $gender=$_POST["st_gender"];
		
		$phon=$_POST["st_phon"];
		
	    $relagion=$_POST["st_relagion"];
	     $semester=$_POST["st_semester"];
	     $section=$_POST["st_section"];
	     $probid=$_POST["st_probid"];
		 $date=$_POST["st_dateB"];
		  $father=$_POST["st_father"];
		  $mother=$_POST["st_mother"];
		  $present=$_POST["present_addre"]; 
		  $PermanentAdd=$_POST["Permanent_addre"];
		  
    if(empty($_POST["st_roll"])){
	 echo '<script>alert("Your Roll Empty")</script>';
      }
      else if(empty($_POST["st_regist"])){
	 echo '<script>alert("Your Registration Number Empty")</script>';
      }
	  else if(empty($_POST["st_depart"])){
	 echo '<script>alert("Your Depeartment Name Empty")</script>';
      }
	  else if(empty($_POST["st_session"])){
	 echo '<script>alert("Your Session Empty")</script>';
      }
	 
	   else if(empty($_POST["st_name"])){
	 echo '<script>alert("Your  Name Empty")</script>';
      } 
	  
	   else if(empty($_POST['st_shift'])){
	  echo '<script>alert("Your Shift  Empty")</script>';
	  
	   }else if(empty($_POST['st_gender'])){
	echo '<script>alert("Your Gender is Empty")</script>';
	
	   } else if(empty($_POST['st_phon'])){
	echo '<script>alert("Your phon Number is Empty")</script>';
	
	   }else if(empty($_POST['st_relagion'])){
	echo '<script>alert("Your Relagion is Empty")</script>';
	   }else if(empty($_POST['st_section'])){
	echo '<script>alert("Your Section  is Empty")</script>';
	   }
	   
	   else if(empty($_POST['st_probid'])){
	echo '<script>alert("Your Probiden is Empty")</script>';
	   } 
	      else if(empty($_POST['st_dateB'])){
	echo '<script>alert("Your Date of Barth is Empty")</script>';
	   } 
	      else if(empty($_POST['st_father'])){
	echo '<script>alert("Your Father Name is Empty")</script>';
	   } 
	      else if(empty($_POST['st_mother'])){
	echo '<script>alert("Your Mother is Empty")</script>';
	   } 
	       else if(empty($_POST['present_addre'])){
	echo '<script>alert("Your Present Address is Empty")</script>';
	   } 
	   else if(empty($_POST['Permanent_addre'])){
	echo '<script>alert("Your Permanent Address is Empty")</script>';
	   } 
	   else{ 
 
		 $target_dir = "studentImage/";
			
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
 //if(isset($_POST["submit"])) {
 
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
	
	echo '<script>alert "File is not an image.."</script>'; 
		 
  
    $uploadOk = 0;
  }


// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
  
    echo '<script type="text/javascript">
		  
	   swal({
  title: "Sorry, file already exists.",
  text: "Sorry, file already exists.",
  button: "Close",
});

  </script>';
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
 // echo "Sorry, your file is too large.";
  
  
  echo '<script type="text/javascript">
		  
	   swal({
  title: "Sorry, your file is too large.",
  text: "Sorry, your file is too large.",
  button: "Close",
});

  </script>';
  
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  
     	echo '<script type="text/javascript">
		  
	   swal({
  title: "Sorry, only JPG, JPEG, PNG & GIF files are allowed.",
  text: "Sorry, only JPG, JPEG, PNG & GIF files are allowed.",
  button: "Close",
});

  </script>';
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
}else {

if($connet==1){
 
  if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  
 $sq="INSERT INTO `student_information_add`VALUES('$roll','$name','$regist','$department',
 '$semester','$shift','$section','$session','$probid','$gender',' $relagion','$date','$father','$mother',' $present','$PermanentAdd','$phon','$target_file')";
  
 $pa=mysqli_query($sm,$sq);
	if($pa>0){
	  // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
	   
	   	echo '<script type="text/javascript">
		  
	   swal({
  title: "Your Image Upload SuccessFull..",
  text: "You clicked the button!",
  icon: "success",
  button: "Close!",
});

  </script>';
  
  showAll("SELECT *FROM `student_information_add`");
	} else{
 
 echo '<script type="text/javascript">
		  
	   swal({
  title: "Your Image Upload Faild..",
  text: "You clicked the button!",
  button: "Close !",
});

  </script>';
	} 
 
  } else {
   echo "Sorry, there was an error uploading your file.";
	
  }
   }
} }
 }
 }
 	}	  
 
 }
  ?>
  
  
  
  
  
  <?php 
 
   if($connet==1){
   
     if(isset($_POST["showbutton"])){
	 
   $pq="SELECT *FROM `student_information_add`";
  $result=mysqli_query($sm,$pq);
	  
   echo"<table width='120%' style='width:120%;' class='table table-bordered table-hover thead-light text-center  table-striped'>
      <thead class='thead-dark'>
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
	<td align='center'>Image</td>
	<td align='center'>Action</td> 
	</tr></thead>";
	
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
  <a href='StudentInformationAdd.php?up_roll=$row[0]'  style='margin-left:8px;color:Red; text-decoration:none; font-size:21px;'>Delete</a> 
	 <a href='StudentInformationAdd.php?st_roll=$row[0]&&st_regist=$row[2]&&st_depeart=$row[3]&&st_semester=$row[4]&&st_section=$row[6]&&st_probiden=$row[8]&&st_phon=$row[16]'
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
 
     $roll=$_POST["up_roll"];
     $regist=$_POST["st_regist"];
	   $department=$_POST["st_depart"];
		$phon=$_POST["st_phon"];
		
	     $semester=$_POST["st_semester"];
	     $section=$_POST["st_section"];
	     $probid=$_POST["st_probid"];
	 
   if(empty($_POST["st_regist"])){
   echo '<script>alert("Your  Registration is Empty")</script>';
      }
	  else if(empty($_POST["st_depart"])) {
     echo '<script>alert("Depeartment Name is Empty")</script>';
	 
      } else if(empty($_POST["st_section"])) {
	  
     echo '<script>alert("Section is Empty")</script>';
      } else if(empty($_POST["st_gender"])) {
	  
     echo '<script>alert("Gender Name is Empty")</script>';
      } 
	   else if(empty($_POST["st_phon"])) {
     echo '<script>alert("phon Number is Empty")</script>';
	 
      } else if(empty($_POST["st_probid"])) {
     echo '<script>alert("Relagion Name is Empty")</script>';
      }
	  else if(empty($_POST["st_semester"])) {
     echo '<script>alert("Semester Name is Empty")</script>';
      }else{
	  
   $pq="UPDATE `student_information_add` SET `Registration`='$regist',`Department`='$department',`Semester`='$semester',`Section`='$section',
   `probidan`='$probid',`phon_number`='$probid' WHERE `Roll`='$roll'";
   
   $pa=mysqli_query($sm,$pq);
    
   if($pa>0){
   echo '<script>alert("Your Data Update SuccessFull..")</script>';
   
    showAll("SELECT *FROM `student_information_add`");
   }else{
   echo '<script>alert("Your Data Update Faild..")</script>';
   }

 }
	
 }
 }
?>
  
  

<?php 

if($connet==1){

 function showAll($pq){
 
$sm=mysqli_connect("localhost","root","","collage_management");
  $result=mysqli_query($sm,$pq);
	  
   echo"<table width='110%' class='table table-bordered table-hover table-primary table-striped'>
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
	<td align='center'>Image</td>
	<td align='center'>Action</td> 
	</tr></thead>";
	
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
	  <a href='StudentInformationAdd.php?st_roll=$row[0]' 
	  style='margin-left:8px;color:Red; text-decoration:none; font-size:21px;'>Delete</a>
	  
	   <a href='StudentInformationAdd.php?st_roll=$row[0]&&
	  &&st_regist=$row[2]&&st_depeart=$row[3]&&st_semester=$row[4]&&st_section=$row[6]&&st_probiden=$row[8]&&st_phon=$row[16]'
	   style='margin-left:12px; color:Magenta; text-decoration:none; font-size:21px;'>Update</a>
	  </td></tr>";
	 }
	 echo"</table>";	
 }
}
?>




<?php
//search 
 
   if($connet==1){
   
     if(isset($_POST["Search_btn"])){
	   $roll=$_POST["sear_phon_roll"];//roll or phone number
	   
   $pq="
SELECT *FROM `student_information_add` WHERE `Roll`='$roll' OR `phon_number`='$roll'";
  $result=mysqli_query($sm,$pq);
	  
   echo"<table width='120%' class='table table-bordered table-hover table-primary table-striped'>
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
  <a href='StudentInformationAdd.php?up_roll=$row[0]'  style='margin-left:8px;color:Red; text-decoration:none; font-size:21px;'>Delete</a> 
	 <a href='StudentInformationAdd.php?st_roll=$row[0]&&st_regist=$row[2]&&st_depeart=$row[3]&&st_semester=$row[4]&&st_section=$row[6]&&st_probiden=$row[8]&&st_phon=$row[16]'
	   style='margin-left:12px; color:Magenta; text-decoration:none; font-size:21px;'>Update</a>  
	  </td></tr>";
	 } 
	 echo"</tr></table>";	
   }
    } 
?>
</form>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
