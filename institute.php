<?php 
include('header.php');
  $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
	$pp=0;
   if(!$sm){
   echo "Connection not Found";
   }else{
   
    $pq="SELECT *FROM `add_departments`";
	  $result=mysqli_query($sm,$pq);
       
	   $connet=1;
	   
if(!empty($_GET["upid"])){
 $idd=$_GET["upid"];
 
 
  $pa="DELETE FROM `institute_imageupload` WHERE `pid`='$idd'"; 
    	$re=mysqli_query($sm,$pa);
    if($re>0){
  echo '<script>alert("Your Image Delete SuccessFull..")</script>';
  $pp=1;
	 }else{
	 echo '<script>alert("Your Image Delete Faild..")</script>';
	 }
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
.header ul{

float:left;
list-style-type:none;
  
}

.header ul li{
color:#FFFFFF;
 font-size:20px;
 float:left;
 margin-left:20px;
 text-decoration:none;
 border:1px solid white; 
 width:180px;
 text-align:center;
 height:30px;
 line-height:30px;
}

.header ul li a{
color:#FFFFFF;
 text-decoration:none;
 display:block;
}



.img-box{margin-top: 20px;}
    .img-block{float: left; margin-right: 5px; text-align: center;}
    p{margin-top: 0;}
    img{width: 375px; min-height: 250px; margin-bottom: 10px; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; border:6px solid #f7f7f7;}
} 
</style>

</head>

<body>

 
<form   name="form1"  method="post" 
action="institute.php" enctype="multipart/form-data">

  <table width="100%" border="" bgcolor="Ivory" style="margin-top:50px;">

<tr>
  <th scope="row" align="left" height="40%" style="font-size:24px; color:#FFFFFF; text-align:center; background-color:DarkGreen;">
 
  <p><marquee direction="left">Institute Image Upload</marquee></p>  </th>	
	</tr>
	
    <tr>  
   <th scope="row" align="left" height="40%"><br>

<br> <br>
 <input type="file" name="fileToUpload" accept="image/*" 
style="font-size:24px; margin-left:20px; " /><br><br>  
	 
	 
 <input name="addbtn" type="submit"   value="Add" style="font-size:24px;  width:150px; margin-left:150px;  text-align:center;"/>
 
  <input name="showbtn" type="submit"   value="Show" style="font-size:24px;  width:150px; margin-left:20px;"  />
  
  <br>
  <br> 
  
  <?php 
 
   if($connet==1){
   
   $sm=mysqli_connect("localhost","root","","collage_management");
   
   if(isset($_POST["addbtn"])){

	  $target_dir ="Institutes_image/";
 
 $target_file =$target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
 
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
  
// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

 

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)) {
		 
  $sq="INSERT INTO `institute_imageupload`(`pImage`)VALUES('$target_file')";
   $pa=mysqli_query($sm,$sq);
  
  if($pa>0){
 //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded."; 
	   
	/*echo '<script type="text/javascript">
	   swal({
  title: "Your Image Upload SuccessFull..",
  text: "You clicked the button!",
  icon: "success",
  button: "Close!",
});

  </script>';  
 */ 
  echo '<script>alert("Your Image Upload SuccessFull..")</script>';
  
 showAll("SELECT *FROM `institute_imageupload`"); 
   }else{
  echo '<script>alert("Your Data Insert Faild..")</script>';
   }

  }
}
		 
  }
 
  }

?> 


<?php 
if($pp==1){

 if($connet==1){  
 
 
    $pp="SELECT *FROM `institute_imageupload`"; 
	$re=mysqli_query($sm,$pp);
     
  echo"<table width='100%' bgcolor='Lavender'>
      <tr style='font-size:20px;'>  
	  <td align='center'>Image</td>
	<td align='center'>Action</td>
	</tr>";
	
 while($row=mysqli_fetch_array($re)){
 
    echo "<tr style='font-size:21px;'>
	  <td align='center'>
	  <img src='".$row[1]."' height='120px'
 width='150px' style='padding:5px;'/></td>
      <td align='center'>
	  <a href='institute.php?upid=$row[0]' style=' text-decoration:none; font-size:21px;'>Delete</a>

 </td>";
    }
    

	echo"</tr></table>";
	}
	}
 
?>
 

<?php 
 
 if($connet==1){  
 function showAll($pp){
 
    $pp="SELECT *FROM `institute_imageupload`"; 
	$re=mysqli_query($sm,$pp);
     
  echo"<table width='100%' bgcolor='Beige'>
      <tr style='font-size:20px;'>  
	  <td align='center'>Image</td>
	<td align='center'>Action</td>
	</tr>";
	
 while($row=mysqli_fetch_array($re)){
 
    echo "<tr style='font-size:21px;'>
	  <td align='center'>
	  <img src='".$row[1]."' height='120px'
 width='150px' style='padding:5px;'/></td>
      <td align='center'>
	  <a href='institute.php?upid=$row[0]' style=' text-decoration:none; font-size:21px;'>Delete</a>

 </td>";
    }
    

	echo"</tr></table>";
	}
	}
	 
?>
  </th>
 </tr>
  </table>
 
   <?php 
   
  if($connet==1){
  if(isset($_POST["showbtn"])){
  
    $pq="SELECT `pid`,`pImage` FROM `institute_imageupload`"; 
	$re=mysqli_query($sm,$pq);
     
  echo"<table width='100%' class='table table-bordered table-hover table-primary table-striped'>
   <thead class='table-dark'>
      <tr style='font-size:20px;'>  
	  <td align='center'>Image</td>
	<td align='center'>Action</td>
	</tr></thead>";
 
	$i=0;
 while($row=mysqli_fetch_array($re)){
 
     echo "<tr style='font-size:21px;'>
	  <td align='center'>
	  <img src='".$row[1]."' height='120px'
 width='150px' style='padding:5px;'/></td>
      <td align='center'>
	  <a href='institute.php?upid=$row[0]'style=' text-decoration:none; font-size:21px;'>Delete</a>

 </td>"; 
 
 
 }
  echo "</table>";
 
 }
 }
 
 ?>
   
		
 

</form>


      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    
</body>

</html>
