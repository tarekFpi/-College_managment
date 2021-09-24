<?php 
 include('header.php'); 
 $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
   if(!$sm){
   echo "Connection not Found";
   }else{
    
	$connet=1;
	
    if(!empty($_GET["pd"])){
	   $depert=$_GET["pd"];
   
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
		
 	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 


<style>
 form{
 width:100%;
 }
 
 *{padding:0; margin:0;}
 input[type=text]{
 height:40px;
 margin-left:20px;
 font-size:18px;
 }
  
  label{
  margin-left:20px;
  }
   textarea{
    height:70px;
   font-size:18px;
   margin-left:20px;
   
 }
 
.header{
  background-color:Indigo;
	 width: 100%;
	 height: 90px;
}
.header ul{
margin-top:20px;
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
 color: Azure;
}

.header ul li a{
color: Azure;
 text-decoration:none;
 display:block;
}
</style>
</head>

<body>

<div class="header">
 
<form id="form1" name="form1" method="post" action="Teacher_informationShow.php" >
  <table width="100%" border="" bgcolor="LightSkyBlue">
    <tr>
    
	  
	 <tr>
      <th scope="row"  style="font-size:24px; padding:10px; text-align:center;">Teacher's information Of 
	  Technology Show</th>
    </tr>
	 
    <tr>
      <th scope="row" align="left" height="40%">
	
 </th>
 </tr>

 <?php 

 if($connet==1){
	
$pq="SELECT `Id`,`Name`,`Department`,`Designation`,`Mobile_No`,`Image`FROM   `teacher_information_add` WHERE `Department`='$depert'";
  $result=mysqli_query($sm,$pq);
	  
       echo"<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
	    <thead class='table-dark'>
      <tr>  
    <td align='center'>Name</td>
	<td align='center'>Department</td>
	<td align='center'>Designation</td>  
	<td align='center'>phone Number</td>
	<td align='center'>Image</td>
	</tr></thead>";
	
  while($row=mysqli_fetch_array($result)){
	 
 echo "<tr> <td align='center'><a href='TeacherAllDeatils.php?pid=$row[0]&&pname=$row[1]'/>".$row[1]."</td>
 <td align='center'>".$row[2]."</td>
 <td align='center'>".$row[3]."</td>
 <td align='center'>".$row[4]."</td>
 <td align='center'><img src='".$row[5]."' height='120px'
  width='150px' style='padding:5px;'/>
 </td>";
	 }
	 echo"</tr> </table>";	
   } 
   
?>
  </table>
   
</form>
 
 
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
 
</html>
