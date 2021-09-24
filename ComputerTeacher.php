

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
<style>
 form{
 width:90%;
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
  
  select{
   margin-left:20px;
    width:69%; 
	height:36px;
	font-size:18px;
  }
.header{
  background-color:MediumVioletRed;
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

<body bgcolor="Purple">

<div class="header">

     <ul>
   	<li><a href="#">NOTICES</a></li>		
  
     </ul>
	</div> 


<form id="form1" name="form1" method="post" action="ComputerTeacher.php" enctype="multipart/form-data">
  <table width="90%" border="" >
    <tr>
      <th scope="row"><img src="fenipoly_logo.png" height="110px" width="100%"/> 
    </tr> 
	  
	 <tr> <br> 
      <th scope="row"  style="background-color:Indigo; color:#FFFFFF;    font-size:24px; padding:10px;">Teacher's information Of Computer 
	  Technology </th>
    </tr>
	 
    <tr>
      <th scope="row" align="left" height="40%">
	  <a href=""
 </th>
 </tr>

 <?php 
  $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
   if(!$sm){
   echo "Connection not Found";
   }else{
       
	    $pd=$_GET["Computer"];
		$statu=$_GET["Teacher"];  
		 
   $pq="SELECT `Name`,`Department`,`Designation`,`phone_number`,`Image`FROM    `teacher_information_add`
  WHERE `Department`='$pd' AND `status`='$statu' ";
  $result=mysqli_query($sm,$pq);
	  
    echo"<table width='90%' border='1' bgcolor='Aqua'>
      <tr>  
	  
    <td align='center'>Name</td><td align='center'>Department</td><td align='center'>Designation</td> <td align='center'>phone Number</td>
	<td align='center'>Image</td>
	</tr>";
	
	 while($row=mysqli_fetch_row($result)){
	   echo "<tr>
	   <td align='center'>".$row[0]."</td><td align='center'>".$row[1]."</td><td align='center'>".$row[2]."</td>
	   <td align='center'>".$row[3]."</td>
	 
	   <td align='center'><img src='".$row[5]."' height='120px'
	    width='150px' style='padding:5px;'/>
 </td>";
	 }
	 echo"</table>";	
   }
?>
  </table>
  
 
 
</form>
 

</body>
 
</html>
