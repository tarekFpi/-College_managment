<?php 
 include('header.php'); 
  $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
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
		
		</script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
		</script>


  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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

<div class="header">

     <ul>
    		
    <li><a href="#"> Homepage</a></li>
	<li><a href="#"> Result</a></li>
     </ul>
	</div> 

<form   name="form1"  method="post" 
action="institute_galleryShow.php" enctype="multipart/form-data">

  <table width="100%" border="" bgcolor="Ivory">

<tr>
  <th scope="row" align="left" height="40%" style="font-size:24px; color:#FFFFFF; text-align:center; background-color:DarkGreen;">
 
  <p><marquee direction="left">Institute Image Gallery Show</marquee></p>  </th>	
	</tr>
	
    <tr>  
   <th scope="row" align="left" height="40%"><br>
 <?php 
   
  if($connet==1){
 
    $pq="SELECT *FROM `institute_imageupload`"; 
	$re=mysqli_query($sm,$pq);
     
	echo"<table width='100%' bgcolor='Beige'>
      <tr style='font-size:20px;'>  
	  <td align='center'>Image</td>
	</tr>";
	
	$i=0;
 while($row=mysqli_fetch_assoc($re)){
 
 
 if($i%3==0){
 echo "<tr>";
 }
  
 echo "<td><img src='".$row['pImage']."' height='120px'
 width='400px'/> </td>";
 
 if($i%3==2){
 echo "</tr>";
 }
 $i++;
 }
  echo "</table>";
 

 }
 
 ?>
  </th>
 </tr>
  </table>
 
   
   
		
 

</form>

    
</body>

</html>
