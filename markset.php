<?php 
 //include('header.php'); 
  $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
	
	  $dep="";
		 $s_roll="";
		 $rege="";
		  $semest="";
		  
		  
		  $father_name="";
		  $mather_name="";
		  $st_name="";
		  $secion="";
		  
		$p=0;
 
   if(!$sm){
   echo "Connection not Found";
   }else{
   
    $pq="SELECT *FROM `add_departments`";
     $result=mysqli_query($sm,$pq);
       
	   $connet=1;
	   
	//<a href="markset.php?dp=$row[0] &&roll=$row[4] && reg=$row[5]&&
	//  sem=$row[6]"/> 
	  
//fath=$row[3]&&math=$row[4]
 //&&st_name=$row[2] &&seccin=$row[8]&&roll=$row[5]
 
if(!empty($_GET["dp"]) && !empty($_GET["roll"])&& !empty($_GET["reg"])&& !empty($_GET["sem"])&& !empty($_GET["fath"])&&!empty($_GET["math"])
&&!empty($_GET["st_name"])&& !empty($_GET["seccin"])&& !empty($_GET["seccin"]))
   
	 {
	   	 
	     $dep=$_GET["dp"];
		 $s_roll=$_GET["roll"];
		 $rege=$_GET["reg"];
		  $semest=$_GET["sem"];
		  
		  
		  $father_name=$_GET["fath"];
		  $mather_name=$_GET["math"];
		  $st_name=$_GET["st_name"];
		  $secion=$_GET["seccin"];
		  
		$p=1;
 
   }else{
	 echo '<script>alert("Your Data is Empty..")</script>';
   }
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


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
<style>
 form{
 width:90%;
 }
 
 input[type=text]{
 height:40px;
 margin-left:20px;
 font-size:18px;
 width:400px;
 
 }
  
  label{
  margin-left:0px;
  left:0;
  
  }
 
  
  select{
   margin-left:20px;
    width:40%; 
	height:40px;
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

 <div class="table_center">
 
<form id="form1" name="form1" method="post" action="markset.php"  >
				   
  <table style="width:900px;" border="" bgcolor="LightYellow" style="padding:8px;">
	<tr>
	<br><br> 
   <th scope="row" style=" font-size:35px; 
   color:#000000;background-color:Beige; 
   font-family: 'Audiowide', cursive;text-align:center;"  
>


 <button  onclick="window.print();" style="font-size:20px; margin-right:20px; height:50px; margin-top:10px; width:80px; float:right;" class="btn btn-primary">Print</button>
 <br>
  Feni polytechnic Institiute Feni Result Set
    <br>
	 
	
  <label style="font-size:18px;color:#000000;text-align:center; "> ACADEMIC TRANSCRIPT</label>
    </th>
  </tr >
 </th>
 </tr> 
 
 
 <tr>
 <th>
 <p style="text-align:center;"> DIPLOMA-IN-ENGINEERING EXAMINATION(Duration 4-Year)</p>
    <br> 
	<br> 
	<br> 
	 
	 
	<table width="300px" border="" bgcolor="LightYellow" 
	style="float:right;">
	<tr>
	<th  scope="row">Numerical Grade Ragne</th>
	 
	<th  scope="row">Letter Grade</th>
	
	<th  scope="row">Grade Point</th>

	</tr>
	
	 <tr>
		<th  scope="row">80 and Abova</th>
		<th scope="row">A+</th>
		<th  scope="row">4.00</th>

	</tr>
	
	 <tr>
		<th  scope="row">75-79</th>
		<th scope="row">A</th>
		<th  scope="row">3.75</th>
	</tr>
	
	 <tr>
		<th  scope="row">70-74</th>
		<th scope="row">A-</th>
		<th  scope="row">3.75</th>
	</tr>
	
	 <tr>
		<th  scope="row">70-74</th>
		<th scope="row">B+</th>
		<th  scope="row">3.00</th>
	</tr>
	
	
	 <tr>
		<th  scope="row">60-74</th>
		<th scope="row">C+</th>
		<th  scope="row">2.50</th>
	</tr>
	
	 <tr>
		<th  scope="row">60-74</th>
		<th scope="row">D</th>
		<th  scope="row">2.00</th>
	</tr>
	
	 <tr>
		<th  scope="row">Less Than 40</th>
		<th scope="row">F</th>
		<th  scope="row">0.00</th>
	</tr>
	
	</table>
	<br> 
	 
	<br> 
	<br> 
	<br> 
	<br> 
	<br> 
	<br> 
	<br> 
	<br> 
	<br>
	<br> 
	<br>
	
	<div style="margin-left:0px; left:0px; float:left;">
 <input name="depeart" type="hidden" value="<?php 
 echo  $dep; ?>" />
	
	
 <label>Department:</label> 
 <br> 
  <input type="text"disabled="disabled" style=""
	   value="<?php echo  $dep;?>"  
	 /><br><br>
	  
  <label>Student Name:</label>
   <br> 
	  <input  type="text"   value="<?php echo $st_name; ?> " disabled="disabled"
	 />
	 <br> <br>
	   
  <label>Father Name:</label>
    <br>
 <input  type="text"  
	  value="<?php echo $father_name; ?>" disabled="disabled"
	    
	 /><br><br>
	
	
  <label>Mather Name:</label>
    <br>
 <input  type="text"  
 value="<?php echo $mather_name; ?>" disabled="disabled"/>   
	 <br><br> 
  
  
<label>Roll No:</label>  <br>

 <input  type="text"  value="<?php echo $s_roll; ?>" disabled="disabled"
	 /><br><br>
	
	 
<label>Registration No:</label> <br>
	 
	  <input  type="text"
	  value="<?php echo $rege; ?>"  disabled="disabled"
	 
	 /><br><br>
	 
 	 
 <label>Session:</label><br> 
 <input  type="text"   
	  value="<?php echo $secion;?>" disabled="disabled"
	 /><br><br>
 
	
	<label>Semester:</label><br>

 <input  type="text"  
	  value="<?php echo $semest;?>" disabled="disabled"
	 />
	 <br><br>  
	 </div>
	  <br><br>     
 	 
	 <?php 
 if($p==1){
 showData("SELECT *FROM `st_mark` WHERE `st_mark`.`Department_name`='$dep' 
AND `st_mark`.`Semester`='$semest' AND `st_mark`.`Student_Roll`='$s_roll' AND `st_mark`.`Student_Registration`='$rege'");}

 function showData($pq){
    $mark=0;
    $get_mark=0;
	
    $Count_mark=0;
	
	 $Count_sub=0;
	 
	 $ad_mark=0;
	  $total_gp=0;
	  
  $sm=mysqli_connect("localhost","root","","collage_management");
  $result=mysqli_query($sm,$pq);
  
    
  
 echo "<table width='900px' border='1' bgcolor='LightSkyBlue'    style='font-size:21px;'>
   <tr><td align='center'>SL NO</td>
 	<td align='center'>Subject Name</td>
	<td align='center'>Full Mark</td>
	<td align='center'>Mark Obtained</td>
	<td align='center'>Letter Grade</td>
	<td align='center'>Grade Point</td>
	<td align='center'>Grade Point Avarage(GPA)</td>
	</tr>";
	$mm=mysqli_num_rows($result);
	
 while($row=mysqli_fetch_array($result))
 {$Count_sub=$Count_sub+1;
   $Count_mark=$Count_mark+$row[13];
	$mark=$row[11];//student mark
	
	 ///200 subject mark
    if($mark>=160 &&$mark<=200){
	  $get_mark="A+"; 
	 }else if($mark>=150 && $mark<=160){
	 $get_mark="A";
	 }else if($mark>=140 && $mark<=150){
	 $get_mark="A-";
	 }else if($mark>=130 && $mark<=140){
	 $get_mark="B+";
	 }else if($mark>=120 && $mark<=130){
	 $get_mark="B";
	 }else if($mark>=110 && $mark<=120){
	 $get_mark="B-";
	 }else if($mark>=100 && $mark<=110){
	 $get_mark="C+";
	 }else if($mark>=90 && $mark<=100){
	 $get_mark="C";
	 }else if($mark>=80&& $mark<=100){
	 $get_mark="D";
	 }
	 
	 //150 subject mark
	
	 else if($mark>=120 && $mark>=150){
	  $get_mark="A+"; 
	 }else if($mark>=112 && $mark<=120){
	 $get_mark="A";
	 }else if($mark>=105 && $mark<=110){
	 $get_mark="A-";
	 }else if($mark>=97 && $mark<=105){
	 $get_mark="B+";
	 }else if($mark>=90 && $mark<=97){
	 $get_mark="B";
	 }else if($mark>=82 && $mark<=97){
	 $get_mark="B-";
	 }else if($mark>=75 && $mark<=97){
	 $get_mark="C++";
	 }else if($mark>=67 && $mark<=75){
	 $get_mark="C";
	 }else if($mark>=60 && $mark<=67){
	 $get_mark="D";
	 } 
	 
	 
  //100 mark subject add
	 
	else if($mark>=80 && $mark<=80){
	  $get_mark="A+"; 
	 }else if($mark>=75 && $mark<=80){
	 $get_mark="A";
	 }else if($mark>=70 && $mark<=75){
	 $get_mark="A-";
	 }else if($mark>=65 && $mark<=70){
	 $get_mark="B+";
	 }else if($mark>=60 && $mark<=65){
	 $get_mark="B";
	 }else if($mark>=55 && $mark<=65){
	 $get_mark="B-";
	 }else if($mark>=50 &&$mark<=55){
	 $get_mark="C++";
	 }else if($mark>=45 &&$mark<=50){
	 $get_mark="C";
	 }else if($mark>=40 &&$mark<=45){
	 $get_mark="D";
	 }else{
	  $get_mark="F";
	 }
	  
    
 
    echo "<tr>
   <td align='center' >".$row[0]."</td>
	<td align='center' >".$row[9]."</td>
	<td align='center' >".$row[10]."</td>
	<td align='center' >".$row[11]."</td>
	<td align='center' >".$get_mark."</td>
	<td align='center' >".$row[13]."</td>
	"?>
	
	<?php 
	     $pp="0.0";
	 if($row[13]==0){
	 $total_gp= $row[13];
	 }
	 
 if($mm==$Count_sub)
{
 if($row[13]==0){
	 echo "<td rowspan='12' align='center'>0.00-Failed</td>";
 echo"</tr>";
	 }else{
echo "<td rowspan='12' align='center'>".$Count_mark/$Count_sub."</td>";
 echo"</tr>"; }
 }
	
 

 //echo "<br>Grade:".$Count_sub;
}
  }   
 ?>
 
 </th>
 </tr> 
  
  </table>
    

</form>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
