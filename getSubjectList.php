<?php 

  $semester = $_GET['value'];
   $st_depart = $_GET['st_depart'];
   $subject = $_GET['subj'];
   
   $sm=mysqli_connect("localhost","root","","collage_management");
   $connet=0;
  if(!$sm){
   echo "Connection not Found";
   }else{
   
   if(isset($semester) && isset($st_depart) && isset($subject)){
	$pa="SELECT `Subject_mark` FROM `department_subjectadd` WHERE 
 `Department_name`='$st_depart' AND `Semester_name`='$semester' AND `Subject_Name`='$subject'";   
  $ra=mysqli_query($sm,$pa);
 if($row=mysqli_fetch_array($ra)){
 	//echo json_encode($row);
	echo $row[0];
  }
   }else{
   $pq="SELECT `Subject_name` FROM `department_subjectadd` WHERE 		`Department_name`='$st_depart' AND `Semester_name`='$semester'";
  $re=mysqli_query($sm,$pq);
  
  echo"<option>Select</option>"; 
  while($row=mysqli_fetch_assoc($re)){
 echo "<option>".$row["Subject_name"]."</option>"; 
  }
   }
   
   }
   ?>