
 <?php 
  include('header.php'); 
  $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
	
	$t_id="";
      $t_phon="";  
	   
	  $t_gmail="";
      $t_skil="";
	  
	   $gmail="";
      $password="";
	  
   if(!$sm){
   echo "Connection not Found";
   }else{
      
	  $connet=1;
	  
    if(!empty($_GET["gm"]) && !empty($_GET["pa"])){
	 $gmail=$_GET["gm"];
      $password=$_GET["pa"]; 
	}
 
	  
  if(!empty($_GET["pid"]) && !empty($_GET["phon"])&&
   !empty($_GET["gmail"]) && !empty($_GET["skil"])){
   
    $t_id=$_GET["pid"];
      $t_phon=$_GET["phon"];  
	   
	  $t_gmail=$_GET["gmail"];
      $t_skil=$_GET["skil"];
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script
		
 	><link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
	
		
		
		<script>
		function checktextfild(){
		var textError="";
		if(document.getElementById("tea_email").value==""){
		textError+="please Enter your Email";
	//	document.getElementById("tea_id").style.borderColor="#B22222";
	  }else if(document.getElementById("tea_phon").value==""){
		textError+="please Enter your  Phone Number";  
 //document.getElementById("tea_name").style.borderColor="#B22222";
		}
	  else if(document.getElementById("tea_skill").value==""){
		textError+="please Enter your  Skill";  
// document.getElementById("tea_designation").style.borderColor="#B22222";
		}	
		 
		if(textError!=""){
		 alert(textError);
		 return false;
		}
		}
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
 width:500px;
 }
  input[type=number]{
   height:50px;
 margin-left:20px;
 font-size:18px;
 width:500px;
  }
  
  input[type=email]{
   height:50px;
 margin-left:20px;
 font-size:18px;
 width:500px;
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

<form id="form1" name="form1" method="post" action="teacher_informationUpdate.php" >
  <table width="100%" border="" bgcolor="Ivory" style="margin-top:50px;">

	 <tr> 
      <th scope="row"  style="background-color:Indigo; color:#FFFFFF;    font-size:24px; padding:10px; text-align:center;">Teacher's information 
	  Technology Show</th>
    </tr>
	 
    <tr>   
      <th scope="row" align="left" height="40%">
	  
	   <input type="hidden" name="ppid" value="<?php echo $t_id;?>" />
	   
	   <br>
	 <label>Email:</label><br>
	  <input name="tea_email"
	   placeholder="Email" autocomplete="off" type="email" 
	   id="tea_email" value="<?php echo  $t_gmail;?>"
	  size="78" maxlength="20" 
	 />
	  <br><br>	 
	  
	    <label>phone Number:</label><br>
	  <input name="tea_phon" id="tea_phon" placeholder="phone Number" 
	  type="number" 
	  size="78" maxlength="20" autocomplete="off" id="tea_phon"
	   value="<?php echo $t_phon; ?>"onfocus="this.value=''"
	 />
	  <br><br>	
	  	 
	     <label>Professional Skill:</label><br>
	  <input name="tea_skill" placeholder="Skill" autocomplete="off" id="tea_skill"  type="text" 
	   maxlength="20" autocomplete="off" style="height:50px;"
	   value="<?php echo $t_skil;?>"
	 />
	  <br><br><br>	
	 
 <input name="update_button" type="submit"class="btn-outline-primary btn-sm"  value="Update" style="font-size:24px;  width:140px; margin-left:20px; "/>
<br><br>
 </th>
 </tr>
    
<?php 
 //
if($connet==1){
$sm=mysqli_connect("localhost","root","","collage_management");

 if(isset($_POST["update_button"])){
 
  $up_gmail=$_POST["tea_email"];
  $up_phon=$_POST["tea_phon"];
  $up_skil=$_POST["tea_skill"];
  
   $t_id=$_POST["ppid"];
 
 
 	  if(empty($_POST['tea_email'])){
	echo '<script>alert("Your Gamil is Empty")</script>';
	   }
	   else if(empty($_POST['tea_phon'])){
	echo '<script>alert("Your password is Empty")</script>';
	   } else if(empty($_POST['tea_skill'])){
	echo '<script>alert("Your Skill is Empty")</script>';
	   } else if(empty($_POST['ppid'])){
	echo '<script>alert("Your Serial Id is Empty")</script>';
	   }else{
	       
  $pp="UPDATE `teacher_information_add`SET `Email`='$up_gmail',`Mobile_No`='$up_phon',`Professional_Skill`='$up_skil' WHERE `Id`='$t_id'";
    
   $pp=mysqli_query($sm,$pp);
      if($pp>0){
  echo '<script>alert("Your Data Update SuccessFull..")</script>';
  
       showAll("SELECT *FROM `teacher_log`");
	  }else{
	echo '<script>alert("Your Data Update Faild..")</script>';  
	  }
	  }
   }
}
?>  



<?php 

if($connet==1){
$sm=mysqli_connect("localhost","root","","collage_management");


$pq="SELECT *FROM `teacher_log` WHERE `Gmail`='$gmail' AND  `Password`='$password'";  
  $result=mysqli_query($sm,$pq);
	  
   echo"<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
   <thead class='table-dark'>
      <tr>  
    <td align='center'>id</td>
	<td align='center'>Name</td>
	<td align='center'>Designation</td>  
	<td align='center'>Department</td>
	<td align='center'>Date of Birth</td>
	<td align='center'>Gender</td>
	<td align='center'>Relagion</td>
	<td align='center'>Father Name</td>
	<td align='center'>Mother Name</td>
	<td align='center'>phon Number</td>
	<td align='center'>Email</td>
	<td align='center'>Present Address</td>
	<td align='center'>Permanent Address</td>
	<td align='center'>Joining_Date</td>
	<td align='center'>Joining Date Of Current_Designation</td>
	<td align='center'>Educational qualification</td>
	<td align='center'>Professional Skill</td>
	<td align='center'>Login Gmail</td>
	<td align='center'>Login password</td>
	<td align='center'>Image</td>
	<td align='center'>Action</td>
	</tr><thead>";
	
  while($row=mysqli_fetch_array($result)){
	 
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
 <td align='center'>
	  <a href='teacher_informationUpdate.php?pid=$row[0]&&phon=$row[9]&&gmail=$row[10]
	  &&skil=$row[16]' 
	  style='margin-left:8px;color:Red; text-decoration:none; font-size:21px;'>Update</a></td>";
	 }
	 echo"</table>";	
   }
?>



<?php 

  function showAll($pq){
  $sm=mysqli_connect("localhost","root","","collage_management");
  $result=mysqli_query($sm,$pq);
   echo"<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
     ";
  while($row=mysqli_fetch_array($result)){
	 
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
 <td align='center'>
 <a href='teacher_informationUpdate.php?pid=$row[0]&&phon=$row[9]&&gmail=$row[10]&&skil=$row[16]'
	   
	  style='margin-left:8px;color:Red; text-decoration:none; font-size:21px;'>Update</a></td>";
	 }
	 echo"</table>";
  }
?>

  </table>
   
 
</form>
 

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
 
</html>


