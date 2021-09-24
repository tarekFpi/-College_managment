<?php 
 include('header.php'); 
  $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
	
	    $id="";
		 $subNa="";
		 $submark="";
		  $secti="";
		  $subje_cord="";
		    $pp=0;
		  
   if(!$sm){
   echo "Connection not Found";
   }else{
   
    $pq="SELECT *FROM `add_departments`";
     $result=mysqli_query($sm,$pq);
	 $re_ser=mysqli_query($sm,$pq);
       
	   $connet=1;
	   
	    //delete
	    if(!empty($_GET["upid"])){
		
	    $idd=$_GET["upid"];
		  
 $pq="DELETE FROM `department_subjectadd` WHERE `id`='$idd'";

  $pa=mysqli_query($sm,$pq);
 
  if($pa>0){
  echo '<script>alert("Your Data Delete SuccessFull..")</script>';
    $pp=1;
  
  }else{
  echo '<script>alert("Your Data Delete Update Faild..")</script>';
  } 
 }
	   
  
	   
 if(!empty($_GET["uid"])&&!empty($_GET["subName"])
 &&!empty($_GET["subMark"])&&
  !empty($_GET["section"])&&
  !empty($_GET["sub_cord"]))
	   {
	   
	     $id=$_GET["uid"];
		 $subNa=$_GET["subName"];
		 $submark=$_GET["subMark"];
		  $secti=$_GET["section"];
		  $subje_cord=$_GET["sub_cord"];
		  
 //echo "id".$id."subject".$subNa."mark".$submark."Section".$secti."cord".$subje_cord;
		  
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
 
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script
		
 	><link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
 
 
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
    width:550px; 
	height:40px;
	font-size:18px;
	height:50px;
  }
 
.body{
    justify-content: center;
    align-items: center;
    display: flex;
}
</style>

<script type="text/javascript">
		  function checktextfild(){
		  var textError="";
		  
		 if(document.getElementById("st_depart").value==""){
		textError+="please Enter your Depeartment Name";
		document.getElementById("st_depart").style.borderColor="RED";
		
		  }else if(document.getElementById("st_semester").value==""){
		textError+="please Enter your Semester Name";
		document.getElementById("st_semester").style.borderColor="RED";
		  }
		   else  if(document.getElementById("section").value==""){
		textError+="please Enter your Section";
		document.getElementById("section").style.borderColor="RED";
		  }
		else if(document.getElementById("sub_name").value==""){
		textError+="please Enter your Subject Name ";
		document.getElementById("sub_name").style.borderColor="RED";
		  }
		 
		  else if(document.getElementById("sub_cord").value==""){
		textError+="please Enter your Subject Cord ";
		document.getElementById("sub_cord").style.borderColor="RED";
		  }
	    else  if(document.getElementById("sub_mark").value==""){
		textError+="please Enter your Subject Mark";
		document.getElementById("sub_mark").style.borderColor="RED";
		  }  
		  
		   if(textError!=""){
		   alert(textError);
		   return false;
		   }else{
		   
 document.getElementById("sub_mark").style.borderColor="#FFFFFF";
 document.getElementById("sub_cord").style.borderColor="#FFFFFF";
 document.getElementById("sub_name").style.borderColor="#FFFFFF";
 document.getElementById("section").style.borderColor="#FFFFFF";
 document.getElementById("st_semester").style.borderColor="#FFFFFF";
 document.getElementById("st_depart").style.borderColor="#FFFFFF"; 
		   return false;
		   }
		 
		  }
		</script>
 	
		
</head>


<body>

 

<form id="form1" name="form1" method="post" action="subjectAdd.php" >

                           
						   
  <table width="100%" border="" bgcolor="LightYellow" style="margin-top:50px;">
   
	<tr>
	<br>
   <th scope="row" style="font-size:27px; color:#FFFFFF;background-color:DarkGreen; text-align:center;">Student Department Subject Add</th>
    </tr>	
	 
    <tr>
      <th scope="row" align="left" height="40%">
	  
 <input name="pid"  id="pid" type="hidden" value="<?php echo $id; ?>" />

 
 
 
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
	   <?php while($row=mysqli_fetch_array($re_ser)):; ?>
<option value="<?php  echo $row[1];?>"><?php  echo $row[1];?></option>
	 <?php endwhile; ?>
	 </select>
	 
 
 
	  
	     <label>Department:</label><br>
         <select name="st_depart" id="st_depart" >
           <option>Select</option>
           <?php while($row=mysqli_fetch_array($result)):; ?>
           <option>
           <?php  echo $row[1];?>
           </option>
           <?php endwhile; ?>
         </select>
        <br><br>
	  
  
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
        </select>
	    <br><br>
		 
	   <label>Session:</label><br>
	   <input name="section" type="text" value="<?php echo $secti; ?>"  placeholder="Section " autocomplete="off" onfocus="this.value=''"
	   size="55" maxlength="20"  id="section"  
	 />
	   <br><br>
	   	
			  
  <label>Subject Name:</label><br> 
	  <input name="sub_name" autocomplete="off" type="text" value="<?php echo $subNa; ?>" placeholder="Subject Name" 
	  size="55" maxlength="20"  id="sub_name"
	  onfocus="this.value=''"
	 />
	  <br><br>
	  
	 <label>Subject Cord:</label><br> 
	  <input name="sub_cord" autocomplete="off" type="text" value="<?php echo $subje_cord; ?>" placeholder="Subject Cord" 
	  size="55" maxlength="20" id="sub_cord"  
	  onfocus="this.value=''"
	 />
	  <br><br>  
	  
 
	   <label>Subject Mark:</label><br>
	  <input name="sub_mark" autocomplete="off" type="text" value="<?php echo $submark; ?>"  placeholder="Subject Mark" 
	   size="55" maxlength="20"  id="sub_mark"
	   onfocus="this.value=''"
	 />
	  <br><br><br>
 
  <input name="addbtn" type="submit"  class="btn-outline-primary btn-lg"  value="Save" style="font-size:24px; margin-left:40px;  width:150px;"/> 
 
  <input name="showbtn" type="submit" class="btn-outline-primary btn-lg" value="Show" style="font-size:24px;  width:150px; margin-left:20px;"/> 
  
   <input name="Update" type="submit" class="btn-outline-primary btn-lg" value="Update" 
   style="font-size:24px;  width:150px; margin-left:20px;"/> 
   
 
    <br><br> </th>
 </tr> 

 <?php 
 
  if($connet==1){
     // $sub_mark=0;
    $get_mark=0;
	
	 $cord="";
	 $dp="";
	 $sem="";
	 $sub="";
		
	  
   if(isset($_POST["addbtn"])){
   
     $depart=$_POST["st_depart"];
     $subject=$_POST["sub_name"];
	 $semester=$_POST["st_semester"];
	 $mark=$_POST["sub_mark"];
	 $secti=$_POST["section"];
  $subject_cord=$_POST["sub_cord"];
  
  
      
  
   if($mark>=200){
	  $get_mark=4.00; 
	 }else if($mark>150){
	 $get_mark=4.00;
	 }else if($mark>=100){
	 $get_mark=4.00;
	 }
	 
$match_data="SELECT  `Subject_Cord`,`Department_name`,`Semester_name`,`Subject_name` FROM `department_subjectadd`";
		  $re=mysqli_query($sm,$match_data);
	  while($row=mysqli_fetch_row($re)){
	    $cord=$row[0];
		$dp=$row[1];
		$sem=$row[2];
		$sub=$row[3];
	  }
	  		
if((strcasecmp($cord,$subject_cord)==0) &&(strcasecmp($dp,$depart)==0)
&&(strcasecmp($sem,$semester)==0)&&(strcasecmp($sub,$subject)==0)){
   
	  echo '<script>alert("Your Data Alrady Exist.")</script>';
	 } else{
  
  
  
  	    if(empty($_POST['st_depart'])){
	  echo '<script>alert("Your Depeartment Name Empty")</script>';
	   } 
	  	else  if(empty($_POST["sub_name"])){
	 echo '<script>alert("Your Subject Name Empty..")</script>';
	 }
	   else if(empty($_POST['st_semester'])){
	echo '<script>alert("Your Semester Name is Empty..")</script>';
	   }
	     else if(empty($_POST['sub_mark'])){
	echo '<script>alert("Your Subject Mark  is Empty..")</script>';
	   }
	     else if(empty($_POST['section'])){
	echo '<script>alert("Your Section  is Empty")</script>';
	   }
	       else if(empty($_POST['sub_cord'])){
	echo '<script>alert("Your Subject Cord  is Empty")</script>';
	   }else{
	   
 $pq="INSERT INTO `department_subjectadd`  (`Subject_Cord`,`Department_name`,`Semester_name`,`Subject_name`,`Subject_mark`,`Section`,`GPA`) VALUES('$subject_cord','$depart','$semester','$subject','$mark','$secti','$get_mark')"; 

  $pa=mysqli_query($sm,$pq);
  if($pa>0){
  
  ShowAll("select *from `department_subjectadd`");
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
   
 $pq="select *from `department_subjectadd`";
 
 echo "<table width='100%' class='table table-bordered table-hover table-primary table-striped' style='font-size:21px;'>
    <thead class='table-dark'>
 <tr><td align='center'>ID</td>
 <td align='center'>Subject Cord</td>
    <td align='center'>Depeartment</td>
	<td align='center'>Semester</td>
	<td align='center'>Subject Name</td>
	<td align='center'>Subject Mark</td>
	<td align='center'>Session</td>
	<td align='center'>Subject GPA</td>
	<td align='center'>Action</td></tr></thead>";
 
  $result=mysqli_query($sm,$pq);
   $mark=0;
    $get_mark=0;
   while($row=mysqli_fetch_row($result)){
  
   echo "<tr style='font-size:21px;'><td align='center'>".$row[0]."</td>
    <td align='center'>".$row[1]."</td>
	<td align='center'>".$row[2]."</td>
	<td align='center'>".$row[3]."</td>
	<td align='center'>".$row[4]."</td>
	<td align='center'>".$row[5]."</td>
	<td align='center'>".$row[6]."</td>
	<td align='center'>".$row[7]."</td>
	  
	<td align='center'><a href='subjectAdd.php?uid=$row[0]&&sub_cord=$row[1]&&subName=$row[4]	&&subMark=$row[5]&&section=$row[6]'style='font-size:21px; text-decoration:none;border:1px solid Azure;padding:5px; color:Black; width:60px;' >Update</a>  

  <a href='subjectAdd.php?upid=$row[0]' style='margin-left:10px; font-size:21px; text-decoration:none; border:1px solid Azure;padding:5px; color:Black; width:60px; height:30px;'>Delete</a></td>";
		
  }
   echo "</tr>"; 
  
   }
 }
 ?>


<?php 
 
  if($connet==1){
 
   if(isset($_POST["Update"])){
    
	     $idd=$_POST["pid"];
	     $subject=$_POST["sub_name"];
	    $mark=$_POST["sub_mark"];
		 $cord=$_POST["sub_cord"];
	 
	  if(empty($_POST['sub_name'])){
	echo '<script>alert("Your Subject Name  is Empty.")</script>';
	   }
	  else if(empty($_POST['sub_mark'])){
	echo '<script>alert("Your Subject Mark  is Empty.")</script>';
	   }   
	    else if(empty($_POST['sub_cord'])){
	echo '<script>alert("Your Subject Cord  is Empty..")</script>';
	   }  else if(empty($_POST['pid'])){
	echo '<script>alert("Your Serial Id is Empty..")</script>';
	   }
	   else{ 
	 
	 
 $pq="UPDATE `department_subjectadd` SET `Subject_name`='$subject', `Subject_mark`='$mark',`Subject_Cord`='$cord' WHERE `id`='$idd'";

  $pa=mysqli_query($sm,$pq);
  
  if($pa>0){
  
  echo '<script>alert("Your Update SuccessFull..")</script>';
  
   ShowAll("select *from `department_subjectadd`");
  }else{
  echo '<script>alert("Your Update Faild..")</script>';
  }
 }
 
   }
   
 }
 ?>
 
  
 
 <?php  
 if($pp==1){
 ShowAll("select *from `department_subjectadd`");
 }
 ?>
 
 
 
 <?php 
 
   function ShowAll($pq){
     $mark=0;
    $get_mark=0;
	
   $sm=mysqli_connect("localhost","root","","collage_management");
  $result=mysqli_query($sm,$pq);
  
  echo "<table width='100%'   style='font-size:20px;' class='table table-bordered table-hover table-primary table-striped'> 
 <tr><td align='center'>ID</td>
 <td align='center'>Subject Cord</td>
    <td align='center'>Depeartment</td>
	<td align='center'>Semester</td>
	<td align='center'>Subject Name</td>
	<td align='center'>Subject Mark</td>
	<td align='center'>Session</td>
	<td align='center'>Subject GPA</td>
	<td align='center'>Action</td></tr>";
   
   while($row=mysqli_fetch_row($result)){
  
   echo "<tr style='font-size:21px;'><td align='center'>".$row[0]."</td>
    <td align='center'>".$row[1]."</td>
	<td align='center'>".$row[2]."</td>
	<td align='center'>".$row[3]."</td>
	<td align='center'>".$row[4]."</td>
	<td align='center'>".$row[5]."</td>
	<td align='center'>".$row[6]."</td>
	<td align='center'>".$row[7]."</td>
	 
 <td align='center'><a href='subjectAdd.php?uid=$row[0]&&sub_cord=$row[1]&&subName=$row[4]  
	&&subMark=$row[5]&&section=$row[6]' style='font-size:21px; text-decoration:none;border:1px solid #0099FF; width:60px;' >Update</a>
	
  <a href='subjectAdd.php?upid=$row[0]' style='margin-left:10px; font-size:21px; text-decoration:none; border:1px solid #0099FF;  width:60px; height:30px;'>Delete</a></td>";
	
  }
   echo "</tr></table>"; 
  
   }
 

 ?>
 
 
 
 <?php 
  if($connet==1){
  ///search
 if(isset($_POST["search_btn"])){
   
 $ser_dep=$_POST["search_depart"];
 $sear_semest=$_POST["search_semester"];
		 
 $pq="SELECT *FROM `department_subjectadd` WHERE  `Department_name`='$ser_dep' AND `Semester_name`='$sear_semest'";
 
 echo "<table width='100%' class='table table-bordered table-hover table-primary table-striped' style='font-size:21px;'>
 <thead class='table-dark'>
 <tr><td align='center'>ID</td>
 <td align='center'>Subject Cord</td>
    <td align='center'>Depeartment</td>
	<td align='center'>Semester</td>
	<td align='center'>Subject Name</td>
	<td align='center'>Subject Mark</td>
	<td align='center'>Session</td>
	<td align='center'>Subject GPA</td>
	<td align='center'>Action</td></tr></thead>";
 
  $result=mysqli_query($sm,$pq);
   $mark=0;
    $get_mark=0;
   while($row=mysqli_fetch_row($result)){
  
   echo "<tr style='font-size:21px;'><td align='center'>".$row[0]."</td>
    <td align='center'>".$row[1]."</td>
	<td align='center'>".$row[2]."</td>
	<td align='center'>".$row[3]."</td>
	<td align='center'>".$row[4]."</td>
	<td align='center'>".$row[5]."</td>
	<td align='center'>".$row[6]."</td>
	<td align='center'>".$row[7]."</td>
	  
	<td align='center'><a href='subjectAdd.php?uid=$row[0]&&sub_cord=$row[1]&&subName=$row[4]	&&subMark=$row[5]&&section=$row[6]'style='font-size:21px; text-decoration:none;border:1px solid Azure;padding:5px; color:Black; width:60px;' >Update</a>  

  <a href='subjectAdd.php?upid=$row[0]' style='margin-left:10px; font-size:21px; text-decoration:none; border:1px solid Azure;padding:5px; color:Black; width:60px; height:30px;'>Delete</a></td>";
		
  }
   echo "</tr>"; 
  
   }
 }
 ?>
  </table>
  
  
 
</form>

     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
