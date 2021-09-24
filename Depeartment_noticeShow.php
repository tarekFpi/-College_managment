<?php  
//include('header.php');
  $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
	$pid=0;
   if(!$sm){
   echo "Connection not Found";
   }else
   {
  
	   $connet=1;
	   
	  if(!empty($_GET["up_id"])){ 
	   $pid=$_GET["up_id"];
	  }
	  
 if(!empty($_GET["file_id"])){ 
 $pd=$_GET["file_id"];

  //$filepath="Department_notice/";
$select ="SELECT *FROM `department_notices` WHERE `id`='$pd'";
$re=mysqli_query($sm,$select);
while($row =mysqli_fetch_array($re)){
$file=$row[4];
  
  }

// Add header to load pdf file
header('Content-type: application/pdf'); 
header('Content-Disposition: inline; filename="'.$file.'"'); 
header('Content-Transfer-Encoding: binary'); 
header('Accept-Ranges: bytes'); 
@readfile($file);
 
 }
 
 
 
  if(!empty($_GET["file_dowan"]))
  { 
    $dow=$_GET["file_dowan"];
	
 $pa ="SELECT *FROM `department_notices` WHERE `id`='$dow'";
$res=mysqli_query($sm,$pa);
while($row =mysqli_fetch_array($res)){
$filepath=$row[4];
  
  }
   header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
 header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: '.filesize($filepath));
        @readfile($filepath);
        exit; 
    }

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
	
<style>

 .search_com{
   width:20%; 
	height:45px;
	font-size:18px;
  }


 form{
 width:100%;
 }
 
 input[type=text]{
 height:40px;
 margin-left:20px;
 font-size:18px;
 }
  
  label{
  margin-left:20px;
  }
  textarea{
    height:100px;
   font-size:18px;
   margin-left:20px;
   
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

 
<form id="form1" name="form1" method="post" 
action="Depeartment_noticeShow.php" >
  <table width="100%" border="" bgcolor="LightGoldenRodYellow">
   
<tr>
  <th scope="row" align="left" height="40%" style="font-size:24px; color:#FFFFFF; text-align:center; background-color:DarkGreen;">Department Notices</th>	
	</tr>
 
 
 <?php 
 
  if($connet==1){
 
  //$semet=$_POST["searc_semester"];
  
 $pa="SELECT *FROM `department_notices` WHERE `Department_name`='$pid'";
 $re=mysqli_query($sm,$pa);
	
	  echo "<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
	  <thead class='table-dark'>
      <tr >  
	<td align='center'style='padding:6px;'>Department</td> 
	<td align='center'>Semester</td>
	<td align='center'>Upload Date</td>
	<td align='center'>Notices</td>
	<td align='center'>Action</td>
	</tr></thead>";
	
	while($row=mysqli_fetch_array($re)){
        
		 $not=explode("/",$row[4]);
	 echo "
	   <td align='center'>".$row[1]."</td>
	   <td align='center'>".$row[2]."</td>
	   <td align='center'>".$row[3]."</td>
	   <td align='center'>".$not[1]."</td>
	   
	    <td align='center'><a href='Depeartment_noticeShow.php?file_dowan=$row[0]' 
	  style='margin-left:8px;color:Red; text-decoration:none; font-size:21px;'>Dowanload</a>
 <a href='Depeartment_noticeShow.php?file_id=$row[0]' 
 style='margin-left:12px;color:Red; text-decoration:none; font-size:21px;'>View</a></td>
	  </td></tr>"; 
	}
	echo"</tr></table>";
  
}
 ?>

  </table>
  
 
</form>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>
