<?php 
include('header.php');
  $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
	 
/*	    $depart="";
	 $semester="";
     $roll="";
	 $regist="";*/
		  
   if(!$sm){
   echo "Connection not Found";
   }else{
   
    $pq="SELECT *FROM `add_departments`";
     $result=mysqli_query($sm,$pq);
       
	   $connet=1;
/*	   
 if(!empty($_GET["uid"]) && !empty($_GET["subName"])&& !empty($_GET["subMark"])&& !empty($_GET["section"]))
   
	   {
	  
	     $id=$_GET["uid"];
		 $subNa=$_GET["subName"];
		 $submark=$_GET["subMark"];
		  $submark=$_GET["section"];
		 
	   }
*/
   }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<link rel="preconnect" href="https://fonts.gstatic.com"/>

<link rel="preconnect" href="https://fonts.gstatic.com"/>
 

<link rel="stylesheet" type="text/css" href="Admission.css" />


<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Redressed&display=swap" rel="stylesheet">


 <link rel="stylesheet" href="themes/bootstrap-theme/ej.web.all.min.css" />
		<script src="scripts/external/jquery-3.1.1.min.js"></script> 
		<script src="scripts/web/ej.web.all.min.js"> </script>
		
		</script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
		</script>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		
		<script type="text/javascript">
		  function empty_check(){
		  var textError="";
		 
		 if(document.getElementById("st_depart").value==""){
		textError+="please Enter your Depeartment Name";
		document.getElementById("st_depart").style.borderColor="RED";
		  }  
		  else if(document.getElementById("st_semester").value==""){
		textError+="please Enter your Semester Name";
		document.getElementById("st_semester").style.borderColor="RED";
	  
		  }
	 else if(document.getElementById("stud_roll").value==""){
		textError+="please Enter your Roll";
		document.getElementById("stud_roll").style.borderColor="RED";
		  }
		else  if(document.getElementById("stud_regist").value==""){
		textError+="please Enter your Registration";
		document.getElementById("stud_regist").style.borderColor="RED";
		
		  }
	
		   if(textError!=""){
		   alert(textError);
		   return false;
		   }else{
      document.getElementById("st_depart").style.borderColor="#FFFFFF";
      document.getElementById("st_semester").style.borderColor="#FFFFFF";
	  document.getElementById("stud_roll").style.borderColor="#FFFFFF";
	  document.getElementById("stud_regist").style.borderColor="#FFFFFF";
		return false;
		   }
		   
		  }
		</script>
<style>
 form{
 width:90%;
 }
 
 input[type=text]{
 height:50px;
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
	height:50px;
	font-size:18px;
  }
  
.header{
  background-color:Navy;
	 width: 100%;
	 height: 90px;
}
.header ul{
float:left;
list-style-type:none;
  
}

 
 
 .design{
    margin-top:50px;
    justify-content: center;
    text-align: center;
	 display: flex;
 }
 
 .design.table.center {
  margin-left: auto; 
  margin-right: auto;
}
 
</style>
</head>

<body>

 
	
<div class="design">
<form id="form1" name="form1" method="post" 
action="final_mark.php" >
                           
						   
  <table width="90%" border="" bgcolor="LightGreen">
   <tr>
      <th scope="row"><img src="fenipoly_logo.png" height="110px" width="100%"/>
   </tr>
   
	<tr>
   <th  scope="row" style="font-size:35px; color:#000000;background-color:Beige; font-family: 'Audiowide', cursive;
"  
  ><marquee direction="left"> Feni polytechnic Institiute  Result Set Search</marquee>
    </th>
  </tr>
  
    	
	 
     <tr>
      <th scope="row" align="left" height="40%">
	  
        <input name="pid" type="hidden" value="<?php 
 echo $id; ?>" />
	  
	     <label>Department:</label><br>
	   <select name="st_depart" id="st_depart" >
	    <option >Select</option>
	   <?php while($row=mysqli_fetch_array($result)):; ?>
	 <option><?php  echo $row[1];?></option>
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
	 </select><br><br>
		 
	   
  <label>Roll:</label><br> 
	  <input name="stud_roll" autocomplete="off" type="text"
	  value="" placeholder="Roll" 
	  size="55" maxlength="20"  id="stud_roll"
	 />
	  <br><br>
	  
	   <label>Registration :</label><br>
	  <input name="stud_regist" autocomplete="off" type="text" 
	     placeholder="Registration" id="stud_regist"
	   size="55" maxlength="20" 
	   
	 />
	 
	  <br><br>
  <input name="Search" type="submit" class="btn-outline-primary btn-lg"  value="Search" style="font-size:24px; margin-left:40px;  width:180px; height:50px;"/> <br><br>
 
 </th>
 </tr> 
 
  
 <?php 
  if($connet==1){
   if(isset($_POST["Search"])){
   $sm=mysqli_connect("localhost:3306","root","","collage_management");
    $depart=$_POST["st_depart"];
	 $semester=$_POST["st_semester"];
     $roll=$_POST["stud_roll"];
	 $regist=$_POST["stud_regist"];
	 
	 if(empty($_POST['st_depart'])){
	echo '<script>alert("Your Depeartment is Empty")</script>';
	   }else if(empty($_POST['st_semester'])){
	   echo '<script>alert("Your Semester is Empty")</script>';
      }else if(empty($_POST['stud_roll'])){
	   echo '<script>alert("Your Roll is Empty")</script>';
      }else if(empty($_POST['stud_regist'])){
	   echo '<script>alert("Your Registration  is Empty")</script>';
      }else
	  {
	  
 $pq2="SELECT *FROM `st_mark` WHERE `st_mark`.`Department_name`='$depart' 
AND `st_mark`.`Semester`='$semester' AND `st_mark`.`Student_Roll`='$roll' AND `st_mark`.`Student_Registration`='$regist'";
 
  $result2=mysqli_query($sm,$pq2);

  if($row=mysqli_fetch_row($result2)){
  	// $_SESSION[$row[0]];
 
 echo "<script>window.location.assign('markset.php?dp=$row[1]&&fath=$row[3]&&math=$row[4]&&st_name=$row[2]&&seccin=$row[8]&&roll=$row[5]&&reg=$row[6]&& sem=$row[7]'
	 )</script>"; 
	 
 
  }else{
 echo '<script>alert("Your Data Not Match...!!!")</script>';
  }
   }
  }
 
 }
 ?>
 
  </table>
    
 
</form>

</div>
</body>
</html>
