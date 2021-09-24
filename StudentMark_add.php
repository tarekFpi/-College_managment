<?php 
 include('header.php'); 
  $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
	
	     $id="";
		 $stud_mark="";
		 $stud_roll="";
		$stud_registe=""; 
		 $subject_mark="";
		 $pp=0;
		 
   if(!$sm){
   echo "Connection not Found";
   }else{
   
    $pq="SELECT *FROM `add_departments`";
	  $result=mysqli_query($sm,$pq);
      $result2=mysqli_query($sm,$pq);  
	   $connet=1;
	 
	 
	   if(!empty($_GET["upid"])){
	     $up_id=$_GET["upid"];
    $pa="DELETE FROM `student_subjectmark_add` WHERE `id`='$up_id'";
	 $re=mysqli_query($sm,$pa);
	   
	 if($re>0){
	  echo '<script>alert("Your Data Delete SuccessFull..")</script>';
	  $pp=1;
	 }else{
	 echo '<script>alert("Your Data Delete Faild..")</script>';
	 }
	   }
	 
	//  showData("SELECT *FROM `student_subjectmark_add`");
	   //$pq="SELECT *FROM `student_subjectmark_add`";
     	/// if(!empty($pq)){
		// showData($pq); sub_mark
		 //}
	 
	  if(!empty($_GET["uid"]) && 
	  !empty($_GET["st_mark"])&&
  !empty($_GET["st_roll"])&& !empty($_GET["st_regist"])&& !empty($_GET["sub_mark"]))
	   {
	   
	     $id=$_GET["uid"];
		 $stud_mark=$_GET["st_mark"];
		 $stud_roll=$_GET["st_roll"];
		$stud_registe=$_GET["st_regist"]; 
		 $subject_mark=$_GET["sub_mark"];
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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
<style>
 form{
 width:100%;
 }
 input[type=text]{
 height:50px;
 margin-left:20px;
 font-size:18px;
 width:550px;
 }
  
  label{
  margin-left:20px;
  }
 
  
  select{
   margin-left:20px;
    width:550px; 
	height:50px;
	font-size:18px;
  }
 

</style>

<script>

	function my_function(){
    var st_depart = document.getElementById('st_depart').value;
	var subj = document.getElementById('subject_list').value;
	var semester = document.getElementById('semester').value;
	
	if(window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
	
	}else{
		xmlhttp=new  ActiveXObject("Microsoft.XMLHTTP");

	}
	xmlhttp.onreadystatechange=function(){
		if(this.readyState==4 && this.status==200){
		if(st_depart && subj && subj !== 'Select' && semester){
		console.log(this.responseText);
	 document.getElementById('sub_mark').value=this.responseText;
	 }else{
	 document.getElementById('subject_list').innerHTML=this.responseText;
	 }

	}
	}
	if(st_depart && subj && subj !== 'Select' && semester){
	
	xmlhttp.open("GET","getSubjectList.php?value="+semester+"&st_depart="+st_depart+"&subj="+subj,true);
	}else{
	xmlhttp.open("GET","getSubjectList.php?value="+semester+"&st_depart="+st_depart,true);
	}
	
 xmlhttp.send();
}


</script>



<script type="text/javascript">
		  function checktextfild(){
		  var textError="";
		  
		 if(document.getElementById("st_depart").value==""){
		textError+="please Enter your Depeartment Name";
		document.getElementById("st_depart").style.broderColor="RED";
		
		  }   if(document.getElementById("semester").value==""){
		textError+="please Enter your Semester Name";
		document.getElementById("st_semester").style.broderColor="RED";
	 
		  }
		     if(document.getElementById("subject_list").value==""){
		textError+="please Enter your Subject Name";
		document.getElementById("section").style.broderColor="RED";
		  }
		 if(document.getElementById("sub_mark").value==""){
		textError+="please Enter your Subject Name ";
		document.getElementById("sub_mark").style.broderColor="RED";
		  }
		 
		   if(document.getElementById("student_mark").value==""){
		textError+="please Enter your Subject Cord ";
		document.getElementById("student_mark").style.broderColor="RED";
		  }
	  if(document.getElementById("st_roll").value==""){
		textError+="please Enter your Subject Mark ";
		document.getElementById("st_roll").style.broderColor="RED";
		  } 
		  
		   if(document.getElementById("st_regist").value==""){
		textError+="please Enter your Student Registration";
		document.getElementById("st_regist").style.broderColor="RED";
		  } 
		  
	 
		   
		   if(textError!=""){
		   alert(textError);
		   return false;
		   }
		   
		  }
		</script>
</head>

<body>

  
<form id="form1" name="form1" method="post" action="StudentMark_add.php" >
  <table width="100%" border="" bgcolor="Cornsilk" style="margin-top:50px;">
    <tr>
      <th scope="row" style="padding:10px; font-size:24px; background-color:DarkOrchid; text-align:center; color:#FFFFFF;">Student Subject Marks Add</th>
    </tr>
	
    <tr>
      <th scope="row" align="left" height="40%">
 
 <input type="hidden"  name="update_id" value="<?php echo $id?>"/>
 
  <input type="submit" name="search_btn" class="btn btn-primary" value="Search" style="font-size:20px; float:right; width:130px; margin-top:65px; padding:6px; margin-right:8px; height:50px;"/><br>
  
 <br>
<select name="search_semester" style="float:right; width:300px; margin-right:10px; margin-top:20px;">
	 <option>Select Semester</option>
	 <option>First Semester</option>
	  <option>Second Semester</option>
	  <option>Third Semester</option>
	  <option>Fourth Semester</option>
	  <option>Fivth Semester</option>
	  <option>Sixth Semester</option>
	  <option>Seventh Semester</option> 
	  <option>Eight Semester</option>
	 </select>
 
 
  
  <select name="search_depart"   id="search_depart" 
  style="float:right; width:300px; margin-right:10px;margin-top:20px;" >
	       <option>Select Department</option>
	   <?php while($row=mysqli_fetch_array($result2)):; ?>
 <option value="<?php  echo $row[1];?>"><?php  echo $row[1];?></option>
	 <?php endwhile; ?>
	 </select>
	 
	
	  

	 <label>Department:</label><br>
	   <select name="st_depart"   id="st_depart" >
	    <option>Select</option>
	   <?php while($row=mysqli_fetch_array($result)):; ?>
 <option value="<?php  echo $row[1];?>"><?php  echo $row[1];?></option>
	 <?php endwhile; ?>
	 </select><br><br>
	 
	 
<label>Semester:</label><br>
 
<select name="st_semester" id="semester" onchange="my_function();" >
	 <option>Select</option>
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
	  
	  
  <label>Subject Name:</label><br> 
	 <select name="subject_list" id="subject_list" onchange="my_function();">
	 <option>Select</option> 
	 </select>
    <br><br>		 
	
	
	<label>Subject Mark:</label><br> 
	  <input name="sub_mark" id="sub_mark" 
	  type="text" placeholder="Subject Mark"
	 autocomplete="off" value="<?php echo $subject_mark;?>"
	   size="40" maxlength="20"  
	 /><br> <br> 
 
		   
 <label>Studnet Mark:</label><br> 
	  <input name="student_mark" id="sub_mark" 
	  type="text" placeholder="Student Subject Mark"
	   value="<?php echo $stud_mark;?>"
	   size="40" maxlength="20" 
	   autocomplete="off" 
	 />
	 
	
		 
	  <br><br>
	<label>Student Roll:</label><br> 
<input name="st_roll" type="text" placeholder="Your Roll" size="40" maxlength="20"  onclick="value=''" id="st_roll"
autocomplete="off"
onclick=" value=''"
 value="<?php echo $stud_roll;?>"
	 />
	  <br><br>
	  
  
	<label>Student  Registration:</label><br> 
	  <input name="st_regist" type="text" id="st_regist"
	   placeholder="Your Registration" size="40" maxlength="20" 
	   autocomplete="off"
	   onclick="value=''"
	   value="<?php echo $stud_registe;?>" 
	 />
  <br><br> <br>
	  
 <input name="addbtn" type="submit" class="btn-outline-primary btn-lg" value="Save" style="font-size:24px;  width:100px; margin-left:150px; text-align:center;"/>
 

  <input name="showbtn" type="submit" class="btn-outline-primary btn-lg" value="Show" style="font-size:24px;  width:150px; margin-left:20px; "/> 
  
 <input name="Update" type="submit" class="btn-outline-primary btn-lg" value="Update" style="font-size:24px;  width:150px;  margin-left:20px; "/> <br> <br> 
    
   
 </th>
 </tr>

  </table>
  <?php 
  
   
   if($connet==1){
   
   if(isset($_POST["Update"])){
   
     $pid=$_POST["update_id"];
	 $st_mark=$_POST["student_mark"];
	 $st_roll=$_POST["st_roll"];
	 $st_resi=$_POST["st_regist"];
	 
	 
	 if(empty($_POST['student_mark'])){
	  echo '<script>alert("Your Student Mark is Empty")</script>';
	   } 
	 else  if(empty($_POST['st_roll'])){
	 echo '<script>alert("Your Roll is Empty")</script>';
	 }
	 else if(empty($_POST['st_regist'])){
	echo '<script>alert("Your Registration  is Empty")</script>';
	   }else if($subject_markelse<$st_mark){
	echo '<script>alert("Your Student Mark is Over ")</script>';
	   } else if(empty($_POST['update_id'])){
	echo '<script>alert("Your Serial ID  is Empty")</script>';
	   }
	   else{
	  
     $pa="UPDATE `student_subjectmark_add` SET `Student_Mark`='$st_mark', `Student_Roll`='$st_roll',
`Student_Registration`='$st_resi' WHERE `id`='$pid'"; 

  $qa=mysqli_query($sm,$pa);
  if($qa>0){
   echo '<script>alert("Your Data Update SuccessFull..")</script>';
   
   showData("SELECT *FROM `student_subjectmark_add`");
  }else{
   echo '<script>alert("Your Data Update Faild..")</script>';
  }
  }
  }
  }
  
  ?>
  
  
  
  
  <?php 
    
   if($connet==1){
  $get_mark=0;
  $ad="";
   if(isset($_POST["addbtn"])){
    
     $dp=$_POST["st_depart"];
     $semest=$_POST["st_semester"];
	 $subject_na=$_POST["subject_list"];
	 $submark=$_POST["sub_mark"];
	 $mark=$_POST["student_mark"];
	 $rol_num=$_POST["st_roll"];
	 $regist=$_POST["st_regist"];
	  

     $match_data="SELECT *FROM `student_subjectmark_add` WHERE
  `Subject_Name`='$subject_na' AND `Student_Roll`='$rol_num' AND `Student_Registration`='$regist'";
  
	  $re=mysqli_query($sm,$match_data);
	  if($row=mysqli_fetch_row($re)){
	   echo '<script>alert("Your Data alrady Exite")</script>'; 
	  }else{	  
	   
	   
      if(empty($_POST['st_depart'])){
	  echo '<script>alert("Your Depeartment Name is Empty")</script>';
	   } 
	  	else  if(empty($_POST["st_semester"])){
	 echo '<script>alert("Your Semester Name Empty")</script>';
	 }
	 else if(empty($_POST['sub_mark'])){
	echo '<script>alert("Your Subject Mark  is Empty")</script>';
	   }  else if(empty($_POST['student_mark'])){
	echo '<script>alert("Your Student Name is Empty")</script>';
	   }
	     else if(empty($_POST['st_roll'])){
	echo '<script>alert("Your Student Roll is Empty")</script>';
	   }
	     else if(empty($_POST['st_regist'])){
	echo '<script>alert("Your Registration Cord  is Empty")</script>';
	
	   } else if($submark<$mark){
	echo '<script>alert("Your Studnet Mark over...")</script>';
	   }else{
 
	 ///200 subject mark
    if($mark>=160 &&$mark<=200){
	  $get_mark=4.00; 
	 }else if($mark>=150 && $mark<=160){
	 $get_mark=3.75;
	 }else if($mark>=140 && $mark<=150){
	 $get_mark=3.50;
	 }else if($mark>=130 && $mark<=140){
	 $get_mark=3.25;
	 }else if($mark>=120 && $mark<=130){
	 $get_mark=3.00;
	 }else if($mark>=110 && $mark<=120){
	 $get_mark=2.75;
	 }else if($mark>=100 && $mark<=110){
	 $get_mark=2.50;
	 }else if($mark>=90 && $mark<=100){
	 $get_mark=2.25;
	 }else if($mark>=80&& $mark<=100){
	 $get_mark=2.00;
	 }
	 
	 //150 subject mark
	
	else if($mark>=120 && $mark>=150){
	  $get_mark=4.00; 
	 }else if($mark>=112 && $mark<=120){
	 $get_mark=3.75;
	 }else if($mark>=105 && $mark<=110){
	 $get_mark=3.50;
	 }else if($mark>=97 && $mark<=105){
	 $get_mark=3.25;
	 }else if($mark>=90 && $mark<=97){
	 $get_mark=3.00;
	 }else if($mark>=82 && $mark<=97){
	 $get_mark=2.75;
	 }else if($mark>=75 && $mark<=97){
	 $get_mark=2.50;
	 }else if($mark>=67 && $mark<=75){
	 $get_mark=2.25;
	 }else if($mark>=60 && $mark<=67){
	 $get_mark=2.00;
	 } 
	 
	 
  //100 mark subject add
	 
	else if($mark>=80 && $mark<=80){
	  $get_mark=4.00; 
	 }else if($mark>=75 && $mark<=80){
	 $get_mark=3.75;
	 }else if($mark>=70 && $mark<=75){
	 $get_mark=3.50;
	 }else if($mark>=65 && $mark<=70){
	 $get_mark=3.25;
	 }else if($mark>=60 && $mark<=65){
	 $get_mark=3.00;
	 }else if($mark>=55 && $mark<=65){
	 $get_mark=2.75;
	 }else if($mark>=50 &&$mark<=55){
	 $get_mark=2.50;
	 }else if($mark>=45 &&$mark<=50){
	 $get_mark=2.25;
	 }else if($mark>=40 &&$mark<=45){
	 $get_mark=2.00;
	 }  
 	
	  
$sq="INSERT INTO `student_subjectmark_add`(`Department_name`,`Semester`,
`Subject_Name`,`Subject_Mark`,`Student_Mark`,`Student_Roll`,
`Student_Registration`,`GPA`)VALUES('$dp','$semest','$subject_na','$submark','$mark','$rol_num','$regist','$get_mark')";

 $pa=mysqli_query($sm,$sq);

 if($pa>0){
  echo '<script>alert("Your Data Add SuccessFull..")</script>';
 
    showData("SELECT *FROM `student_subjectmark_add`");
  
  }else{
  echo '<script>alert("Your Data Add Faild..")</script>';
  }
	}	
 }
 }
  } 
  ?>
  
  
  
  
  <?php 
  
  if($connet==1){
   if(isset($_POST["showbtn"])){
     $pa="SELECT *FROM `student_subjectmark_add`";
	 $result=mysqli_query($sm,$pa);
	 
	  echo"<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
	  <thead class='table-dark'>
      <tr style='font-size:20px;'>  
      <td align='center'>Id</td>
	<td align='center'>Department Name</td>
	<td align='center'>Semester Name</td>
	<td align='center'>Subject Name</td>
	<td align='center'>Subject Mark</td>
	<td align='center'>Student Mark</td>
	<td align='center'>Student Roll</td>
	<td align='center'>Registration</td>
	<td align='center'>GPA</td>
	<td align='center'>Action</td>
	</tr> </thead>";
	
	 while($row=mysqli_fetch_array($result)){
	   echo "<tr style='font-size:21px;'>
	  <td align='center' >".$row[0]."</td>
	  <td align='center'>".$row[1]."</td>
	  <td align='center'>".$row[2]."</td>
	  <td align='center'>".$row[3]."</td>
	  <td align='center'>".$row[4]."</td>
	   <td align='center'>".$row[5]."</td>
	    <td align='center'>".$row[6]."</td>
		 <td align='center'>".$row[7]."</td>
		<td align='center'>".$row[8]."</td>
      <td align='center'>
	  <a href='StudentMark_add.php?upid=$row[0]' 
	  style='margin-left:10px; text-decoration:none; font-size:21px;'>Delete</a>
	  
	   <a href='StudentMark_add.php?uid=$row[0]&&sub_mark=$row[4]&&st_mark=$row[5]
	  &&st_roll=$row[6]&&st_regist=$row[7]'
	   style='margin-left:20px; text-decoration:none; font-size:21px;'>Update</a>
	  </td>";
    } 
  	echo"</tr>";
   }
  }
  ?>
  
  
  <?php 
  
  if($pp==1){
    showData("SELECT *FROM `student_subjectmark_add`"); 
  } 
  ?>
  
  <?php 
   //show data
   function showData($pa){
    $sm=mysqli_connect("localhost","root","","collage_management");
   
	 $result=mysqli_query($sm,$pa);
	 
	  echo"<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
	  <thead class='table-dark'>
      <tr style='font-size:20px;'>  
      <td align='center'>Id</td>
	<td align='center'>Department Name</td>
	<td align='center'>Semester Name</td>
	<td align='center'>Subject Name</td>
	<td align='center'>Subject Mark</td>
	<td align='center'>Student Mark</td>
	<td align='center'>Student Roll</td>
	<td align='center'>Registration</td>
	<td align='center'>GPA</td>
	<td align='center'>Action</td>
	</tr></thead>";
	
	 while($row=mysqli_fetch_array($result)){
	   echo "<tr style='font-size:21px;'>
	  <td align='center' >".$row[0]."</td>
	  <td align='center'>".$row[1]."</td>
	  <td align='center'>".$row[2]."</td>
	  <td align='center'>".$row[3]."</td>
	  <td align='center'>".$row[4]."</td>
	   <td align='center'>".$row[5]."</td>
	    <td align='center'>".$row[6]."</td>
		 <td align='center'>".$row[7]."</td>
		<td align='center'>".$row[8]."</td>
      <td align='center'>
	  <a href='StudentMark_add.php?uid=$row[0]' 
	  style='margin-left:10px; text-decoration:none; font-size:21px;'>Delete</a>
	  
	   <a href='StudentMark_add.php?uid=$row[0]&&sub_mark=$row[4]&&st_mark=$row[5]
	  &&st_roll=$row[6]&&st_regist=$row[7]'
	   style='margin-left:20px; text-decoration:none; font-size:21px;'>Update</a>
	  </td>";
    } 
  	echo"</tr></table>";
   }
  
  ?>
  
  
  
  
  <?php 
  
  if($connet==1){
   if(isset($_POST["search_btn"])){
   
    $depeart=$_POST["search_depart"];
     $semeset=$_POST["search_semester"];
	 
$pp="SELECT *FROM `student_subjectmark_add` WHERE `Department_name`='$depeart' AND `Semester`='$semeset'";
	 $result=mysqli_query($sm,$pp);
	 
	  echo"<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
	  <thead class='table-dark'>
      <tr style='font-size:20px;'>  
      <td align='center'>Id</td>
	<td align='center'>Department Name</td>
	<td align='center'>Semester Name</td>
	<td align='center'>Subject Name</td>
	<td align='center'>Subject GPA</td>
	<td align='center'>Student Mark</td>
	<td align='center'>Student Roll</td>
	<td align='center'>Registration</td>
	<td align='center'>GPA</td>
	<td align='center'>Action</td>
	</tr></thead>";
	
	 while($row=mysqli_fetch_array($result)){
	   echo "<tr style='font-size:21px;'>
	  <td align='center' >".$row[0]."</td>
	  <td align='center'>".$row[1]."</td>
	  <td align='center'>".$row[2]."</td>
	  <td align='center'>".$row[3]."</td>
	  <td align='center'>".$row[4]."</td>
	   <td align='center'>".$row[5]."</td>
	    <td align='center'>".$row[6]."</td>
		 <td align='center'>".$row[7]."</td>
		<td align='center'>".$row[8]."</td>
      <td align='center'>
	  <a href='StudentMark_add.php?upid=$row[0]' 
	  style='margin-left:10px; text-decoration:none; font-size:21px;'>Delete</a>
	  
	   <a href='StudentMark_add.php?uid=$row[0]&&sub_mark=$row[4]&&st_mark=$row[5]
	  &&st_roll=$row[6]&&st_regist=$row[7]'
	   style='margin-left:20px; text-decoration:none; font-size:21px;'>Update</a>
	  </td>";
    }  
  	echo"</tr></table>";
   }
  }
  ?>
</form>
</body>
</html>
