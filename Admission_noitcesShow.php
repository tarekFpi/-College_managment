<?php 
 include('header.php');
  $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
	$pp=0;
   if(!$sm){
   echo "Connection not Found";
   }else{
 
	   $connet=1;

    
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="UTF-8"/>
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="Admission.css" />

 <link rel="stylesheet" href="themes/bootstrap-theme/ej.web.all.min.css" />
		<script src="scripts/external/jquery-3.1.1.min.js"></script> 
		<script src="scripts/web/ej.web.all.min.js"> </script>
 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 
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

 
  editor{
    height:100px;
   font-size:18px;
   margin-left:50px;
   
 }
 
</style>

</head>

<body>

<form   name="form1"  method="post" 
action="Admission_noitcesShow.php" enctype="multipart/form-data">

  <table width="100%" border="" bgcolor="Ivory">

<tr>
  <th scope="row" align="left" height="40%" style="font-size:24px; color:#FFFFFF; text-align:center; background-color:DarkGreen;">
 
  <p><marquee direction="left">Admissoin Information Show</marquee></p>  </th>	
	</tr>
	
    <tr>  
   <th scope="row" align="left" height="40%"><br><br><br>
    
   <?php 
   
  if($connet==1){
 
  
    $pq="SELECT  *FROM `admission_notificationadd`"; 
	$re=mysqli_query($sm,$pq);
     
  echo"<table width='100%'class='table table-bordered table-hover table-primary table-striped'>
      <tr style='font-size:20px;'>  
	   <td align='center'>Notices</td>
	</tr>";
 
 while($row=mysqli_fetch_array($re)){
 
    echo "<tr style='font-size:21px;'>
	 	<td align='center'>".$row[1]."</td>  
 </td>"; 
 
 }
  echo "</tr></table>";
 
 
 }
 
 ?>
  </th>
 </tr>
  </table>
 
  
   
 	
</form>
   
   
   
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>
