

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<style>
 form{
 width:95%;
 
 }
</style>
</head>
 
<body>

<form id="form1" name="form1" method="post" action="post">
  <table width="100%" border="1">
  
    <tr>
        <th scope="row"><img src="fenipoly_logo.png" height="120px" width="100%"/> 
    </tr>
	
	 <tr>
      <th scope="row"  style="background-color:Indigo; color:#FFFFFF; font-size:24px; padding:10px;">Student information Of 
	  Computer Technology Show</th>
    </tr>
	
	<tr>
 
	<th>
	 <?php 
  $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
   if(!$sm){
   echo "Connection not Found";
   }else{
   
    $pq="SELECT *FROM `student_information_add`";
	  $result=mysqli_query($sm,$pq);
	  
       echo"<table width='100%' border='1'>
      <tr>
	 
    <td align='center'>Roll</td><td align='center'>Name</td><td align='center'>Registration</td>  <td align='center'>Department</td>
	<td align='center'>Semester</td><td align='center'>Shift</td><td align='center'>Section</td><td align='center'>Session</td>
	
	<td align='center'>probidan</td><td align='center'>Gender</td><td align='center'>Relagion</td> <td align='center'>Date of Birth</td><td align='center'>Father Name</td>
	<td align='center'>Mather Name</td><td align='center'>present Address</td><td align='center'>Permanent Address</td>
	 <td align='center'>Phon Number</td><td align='center'>Image</td>
	</tr>";
	
  	while($row=mysqli_fetch_row($result)){
	
	  echo "<tr><td align='center'>".$row[0]."</td><td align='center'>
	  ".$row[1]."</td> <td align='center'>".$row[2]."</td><td align='center'>
	  ".$row[3]."</td><td align='center'>".$row[4]."</td><td align='center'>
	  ".$row[5]."</td> <td align='center'>".$row[6]."</td><td align='center'>
	  ".$row[7]."</td><td align='center'>".$row[8]."</td><td align='center'>
	  ".$row[9]."</td> <td align='center'>".$row[10]."</td><td align='center'>
	  ".$row[11]."</td><td align='center'>".$row[12]."</td><td align='center'>
	  ".$row[13]."</td> <td align='center'>".$row[14]."</td><td align='center'>
	  ".$row[15]."</td> <td align='center'>".$row[16]."</td>
	   <td align='center'>
 <img src='".$row[17]."'  height='120px' width='200px'/></td></tr>";
	}
	echo"</table>";	
   }
?>
	
	
	</th> 
	 </tr>
   
	
  </table>
</form>

</body>
</html>
