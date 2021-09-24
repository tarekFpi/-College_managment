<?php 
//include('header.php');
  $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
	
	$date ="";
   $target_dir="";
    $dow="";
	
   if(!$sm){
   echo "Connection not Found";
   }else{
    
  $connet=1;
 
  // $sm=mysqli_connect("localhost","root","","collage_management");
   
  if(!empty($_GET["file_name"]))
  { 
  
  $pid=$_GET["file_name"];
	 //echo $pid;  
 // $filepath="Department_notice/";
//$file="";

 $pp="SELECT *FROM `general_notices` WHERE `id`='$pid'";
$re=mysqli_query($sm,$pp);

 while($row=mysqli_fetch_array($re)){
    //$date = $row[3];
	$file=$row[4];
	//echo $file;
  }
 
/*header('Content-type: application/pdf'); 
header('Content-Disposition: inline; filename="'.$file.'"'); 
header('Content-Transfer-Encoding: binary'); 
header('Accept-Ranges: bytes'); 
@readfile($file); */


header('Content-type: application/pdf'); 
header('Content-Disposition: inline; filename="'.$file.'"'); 
header('Content-Transfer-Encoding: binary'); 
header('Accept-Ranges: bytes'); 
@readfile($file);
  }

 
 if(!empty($_GET["file_dowan"])){ 
    $dow=$_GET["file_dowan"];
	
 $pa ="SELECT *FROM `general_notices` WHERE `id`='$dow'";
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
    width:49%; 
	height:40px;
	font-size:18px;
  }
  
  
  
.header{
  background-color:Indigo;
	 width: 100%;
	 height: 90px;
}
 
 
</style>

</head>

<body>

 
<form id="form1" name="form1" method="post" 
action="noticesShow.php" enctype="multipart/form-data">

 
</form>


      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>

