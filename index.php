
	<?php
	include('header.php');
	if(!empty($_GET["status"])){
	 $stp=$_GET["status"];
	}
	
  $Depart="";
   $semest="";
   $date ="";
   $target_dir="";
   $fileName="";
  $sm=mysqli_connect("localhost","root","","collage_management");
    $connet=0;
   if(!$sm){
   echo "Connection not Found";
   }else{
    
 $connet=1;


}
?>
 

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Schoolmenu.css" rel="stylesheet" media="all"/>
	
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
" type="text/css" media="all" rel="stylesheet" />

<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
" type="text/css" media="all" rel="stylesheet" />

<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



   <style type="text/css">
   	
   	.image_1{
     	position: absolute;
  	   margin-top: 20px;
        margin-left: 10%;
  	  	height: 300px;
      width: 800px;
      background-color: black;
      background-size: 100%  100%;
      box-shadow: 1px 2px 10px 5px width;
      background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRm0jtyKUFhgKMjISn6ipLAZBeS4QgMeAJl9A&usqp=CAU');
      background-size: 100% 100%;
    animation:slider 9s infinite linear;
     
  }

    @keyframes slider{
		0%{ background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRm0jtyKUFhgKMjISn6ipLAZBeS4QgMeAJl9A&usqp=CAU');}	

		35%{background-image: url('https://i.ytimg.com/vi/Uc5KZKF5WcQ/hqdefault.jpg');}

		75%{background-image: url('https://i.ytimg.com/vi/Uc5KZKF5WcQ/hqdefault.jpg');}
		}


.sldebar{
	 z-index: 20;
	    float: left;
		left: -255px;
		position: fixed;
		width: 255px;
		height: 100%;
		background-color: black;
		transition: all .5s ease;
	}
    
   .sldebar header{
     color: white;
     text-align: center;
     font-size: 14px;
     line-height: 70px;
     background-color: red;
   }

    .sldebar ul a{
    	text-decoration: none;
    	width: 100%
    	height :100%;
    	display: block;
    	line-height: 60px;
    	font-size: 15px;
    	color: white;
       padding-left: 10px;
    	box-sizing: border-box;
    	border-bottom: 1px solid white;
    	border-top: 1px solid rgba(255,255,255,.1);
    	transition: 4s;
    }
	    
.sldebar ul li:hover a{
margin-left:8px;
 
 }

  #check{
  	display: none;
  }

  label #btn ,label #cancle{
  	position: absolute;
  	cursor: pointer;
  	background-color: black;
  }

label #btn{
position: fixed;
top: 0;
	left: 10px;
	top: 20px;
	font-size: 30px;
	background: white;
   padding: 6px 5px;
   z-index: 20;
}


label #cancle{

	 position: absolute;
	 left: -250px;
	 z-index: 1111;
    top: 22px;
	font-size: 30px;
	color: green;
	padding: 4px 9px;
	transition: all .5s ease;
}

#check:checked ~.sldebar{
	left: 0;
}

#check:checked ~ label #btn{
	left: 270px;
	opacity: 0;
	pointer-events: none;

}

#check:checked ~ label #cancle{
 left: 200px;
 top: 50px;
 position: fixed;

}

   </style>
	 
</head>


<body background="coral">


<?php if($stp=="Admin"){ ?>

<input type="checkbox" id="check"/>

<label for="check">
  <i class="fas fa-bars" id="btn"></i>

  <i class="fas fa-times" id="cancle"></i>
</label>

	<div class="sldebar">

 <header>MY Deshboard</header>  
     <ul>
   	<li><a  data-toggle="modal" data-target="#exampleModal"  href="#">Department  Add</a></li>	

	<li><a  href="StudentInformationAdd.php">Student information Add </a></li>
	 
<li><a href="TacherInformationAdd.php">Teacher Information Add </a></li>
	<li><a href="Depeartment_notices.php">Depeartment Notices Upload</a></li>	
	<li><a href="Department_routin.php">Depeartment Routin Upload</a></li>	
	<li><a href="general_Notices.php">General Notices Upload</a></li>
	<li><a href="subjectAdd.php">Subject  Mark Add</a></li>
	<li><a href="StudentMark_add.php">Student Subject Mark Add</a></li>
	<li><a href="student_permission.php">Student Login permission</a></li>
    <li><a href="Teacher_permission.php">Teacher Login permission</a></li>
	<li><a href="adminLogin_infromation.php">Admin Login Information</a></li>
	<li><a href="final_mark.php"> Student Search Result</a></li>
	<li><a href="institute.php">Institute Image Upload</a></li>
	<li><a href="Admission_notification.php">Admission Notices Upload</a></li>
     </ul>
	</div> 

<?php }?>
 

  <div class="head">

 <div class="contact">
   <ul>
 
  </ul>
</div>

     	<ul>
		
       <li><a href="#">HOME</a>
        <li><a href="#">INSTITUTE</a>

	          <ul>

	         <li><a href="#">About The Institute</a></li>	
	         <li><a href="#">Misssion  & Vision</a></li>	
	         <li><a href="#">Hostry</a></li>	
	         <li><a href="#">Infrastruture</a></li>	

	          </ul>

        </li>	
 
 <li><a href="#">DEPARTMENT</a>
                
  <ul>
                 
   <li><a href="#">Civil Technology</a>
  <ul>
  <li><a href="AboutCivil.php">About Deportment</a></li>	
  <li><a href="Teacher_informationShow.php?pd=AIDT">Techer'sInformation</a></li>	
					 

  </ul>
 </li>	
                
   <li><a href="#">Electrical Technology</a>

  <ul>
		     
  <li><a href="Electrical.php">About Deportment</a></li>	
  <li><a href="Teacher_informationShow.php?pd=Electrical">Techer'sInformation</a></li>	
 </ul>

  </li>	

   <li><a href="#">Mechanical Techology</a>

  <ul>
		         
  <li><a href="About_mechanica.php">About Deportment</a></li>	
  <li><a href="Teacher_informationShow.php?pd=Mechanical">Techer'sInformation</a></li>	
  </ul>

 </li>


 <li><a href="#">powar Techology</a>

  <ul>
		     
  <li><a href="About_powar.php">About Deportment</a></li>	
  <li><a href="Teacher_informationShow.php?pd=powar">Techer'sInformation</a></li>		
						 
  </ul>

  </li>	

 <li><a href="#">Computer Techology</a>
 <ul>
		      
  <li><a href="AboutComputer.php">About Deportment</a></li>	
  <li><a href="Teacher_informationShow.php?pd=Computer">Techer'sInformation</a>
  </li>
  </ul>	
  </li>	

   <li><a href="#">AIDT Techology</a>

  <ul>
		         	
  <li><a href="About_AIDT.php">About Deportment</a></li>	
 <li><a href="Teacher_informationShow.php?pd=AIDT">Techer'sInformation</a></li>	
					   
  </ul>

  </li>	

  </ul>
  </li>

   <ul>
 
  </ul>

      	


 <li><a href="final_mark.php">RESULT</a></li> 
		  
 <li  style="float:right;font-size:15px; background:Chartreuse;"><a href="student_login.php">STUDENT LOGIN</a></li>	
		  
 </div>

     <div class="maincont">
    <div id="slider">
	
   <figure>
		<img src="back.jpg" alt>
		<img src="about_fpi.jpg" alt>
		<img src="f-prk.jpg" alt>
		<img src="back.jpg" alt>
  </figure>

	</div>
     
     </div>

     <div class="studentlevel justify-content-center">
     <li style="list-style-type: none; text-align: center; font-size: 24px; color: white; font-style: initial; ">FENI POLYTECHNIC INSTITUTE</li>

       <div class="box">

	   <a href="institute_galleryShow.php"><img src="Gallery.png" height="120px" width="200px" /></a>    
	  <p class="title_photo"> photo Gallay</p>
	    
        </div>

        <div class="box_student"> 
	        	<img src="images.jpg" height="120px" width="200px" />
	        	<p class="title_student">Student panal</p>
             </div>

	       <div class="box_admisson"> 
			 <a href="Admission_noitcesShow.php"><img src="admisson.jpg" height="120px" width="200px" /></a>    
				 <p class="title_admisson">Student Admisson</p>

	       </div>

      
  <div class="box_result">
	        <a href="final_mark.php"><img src="resultt.png" height="120px" width="200px" /></a>   
	            <p class="title_result">Student Result</p>
	   </div>
      

        </div>


 <div class="deatils"> 
   <p  style="font-size: 24px; color: black; font-style: inherit; margin-left: 10%;" >WELCOME TO FENI POLYTECHNIC INSTITUTE </p>
  <img src="about_fpi.jpg" style="margin-left: 10%;" height="220px" width="700px" class="deatils_image"  /> 

<div class="general_notices" style="height:150px; overflow:scroll; margin-right:40px;">

<table width="550px%" border="1">
<tr>
<tr>
  <th scope="row" align="left" height="40%" style="font-size:24px; color:#FFFFFF; text-align:center; background-color:DarkGreen;">Notices</th>
  </tr>
 <?php 
  if($connet==1){
   $select="SELECT `id`,`upload_date`,`notices`FROM `general_notices`";
   
$result =mysqli_query($sm,$select);

  echo "<table width='550px' border='1' bgcolor='Linen'>
      <tr >  
	<td align='center' style='padding:6px;'>Upload Date</td>
	<td align='center'>Notices</td>
     <td align='center'>Action</td>
	</tr>";
while($row=mysqli_fetch_array($result)){
    //$Depart = $row[0];
   //$semest = $row[1];
 //   $date = $row[2];
 // $target_dir= $row[3];
 // $fileName=split("/",$target_dir);
 
 $mm=explode("/",$row[2]);
  	 echo "
	   <td align='center'>".$row[1]."</td>
	   <td align='center'>".$mm[1]."</td>
 <td align='center'><a href='noticesShow.php?file_name=$row[0]'style='color:Red; text-decoration:none; font-size:21px;'>View</a>  
  
  <a href='noticesShow.php?file_dowan=$row[0]'style='margin-left:8px;color:Red; text-decoration:none; font-size:21px; margin-left:10px;'>Dowanload</a>
  </td> </tr>
";
	   
}

 echo "</tr></table>";
  }
 
 ?>
 
</table>
</div>

<!--</td></tr></table>
   
</table> -->
 
   

<p  style="font-size: 20px; color: black;  margin-left: 10%; width: 700px;" >
	In 29th February 1964, Feni Polytechnic started its journey as Feni Technical with Civil and Mechanical Engineering departments in a 15.97 Acre campus near old Dhaka-Chittagong Highway road, just 500 meters east to Feni Sadar Hospital. In 1972 with the addition of Power department, the institution finally became Feni Polytechnic Institute. Later additional departments as Electrical engineering (1978), Computer engineering (2002), Architecture & Interior design technology (2006) was added to give the institution its present form.

From its very first day, Feni polytechnic has been under supervision of excellent administration lead by many highlighted individuals from Technical Education field. Currently the institution is run by 60 teachers lead by the Principal, 50 third grade and 26 fourth grade government staffs. Today, Feni Polytechnic Institute operates an additional second shift to its usual operation for its 6 departments and the institution is hence filled with students all through the operating period and comes to life from morning till evening.<br><br>


Today Feni Polytechnic has a magnificent campus consisting of a two floor administrative building, 1 three floor academic building, 3 campus accommodations for its students, auditorium, mosque and accommodations for its Principal and staffs. The pond, field, canteen and the various trees all around the campus simply is a treat for our eyes.<br> <br>

Feni Polytechnic Institute is highly regulated and monitored by the Directorate of Technical Education(DTE) under Ministry of Education(MoE) for the Governments of the people\'s republic of Bangladesh. The academic section is supervised by the Bangladesh Technical Education Board (BTEB).

 </p>
 <div>
 	<button class="button_style">LEARN MORE</button><br><br><br>

 	 <button class="button_style2">Mission & Vission</button><br>

 	 <p style="font-size: 20px; font-size: 20px; color: black;  margin-left: 10%; width: 700px; margin-top: 10px">01 . Feni Polytechnic Institute always provide quality education and training with the students and techers.

02 . It create skilled Professional Engineer.<br>

03 . It aim to reduce digital divide between urban and rural people through ICT education and training.<br>

04 . To extend support to the industry in the field of ICT.<br>

05 . To provide employable skilled manpower for the country as well as abroad in the field of ICT.<br>

06 . It create act a leading institute in the field of ICT.<br>

07 . It always help to student how to acquire practical education.<br><br>


The salient objective of establishing such a Bangladesh study center is to develop the resources of the country through quality education. In the present age of globalization, the main demand of the developing countries is skilled manpower but huge number of students in Bangladesh is unable to get engineering education. Though many Bangladeshi students have shown their good performance in abroad, but it is a fact that the degrees from overseas attract their attention in Bangladesh and in abroad regarding employment.<br><br> 

It is possible to full-fill the requirement of Engineers for foreign countries along with internal demand, if the curriculum and environment are advanced like foreign study center. Foreign remittance is a very important factor to increase our GDP but most of the people who are working abroad are not skilled. If they would be trained up by Engineering education, undoubtedly the remittance could be increased about two to three times. Engineering degree from foreign study center can make the self-sufficient. On the other hand their increased income can play it a Loreto free our country from debt-burden. Thus Feni Polytechnic Institute center is determined to develop the country and to open a golden opportunity for Bangladeshi young engineers to stay abroad peacefully along with their noble contribution to their family and homeland.</p><br><br>
 </div>

 <div class="Principal_1">
 	Message From The Principal

1964, Feni Polytechnic opened its door with the aim to develop the country through technical and vocational education. The effective education and training provided by the institution has open many opportunities both in foreign and domestic, and is playing an important role for the social development.

From its first day Feni Polytechnic, overcoming its limitation has successfully help the government in economic and social development by creating <a href="#" style="color: red; text-decoration: none;"> Read More</a>

 </div>

 <div>
 	<img src="Principle.jpg" height="64px" width="64px" style="border-radius: 50%; margin-left: 10%; border: 1px solid black; margin-top: 20px;">
   
 	<li style="float: right; list-style-type: none; text-align: center; position: absolute; margin-left:8%;">MD. MOSTAFIZUR RAHMAN KHAN</li><br> 

 	<li style="float: right; list-style-type: none; text-align: center; text-align: center; position: absolute; 
  	margin-left:8%; margin-top: 20px;  "><a href="#" style="text-decoration: none; color: 	#bf00ff;"> Principal Of Feni Polytechnic Institute</a></li> 
 </div>

   <div style=" height: 500px; width: 100%; background-color: #00ffff;">


   	 <div class="teacher_deteails">

	 	<div class="computer_teacher">
       <img src="com.jpg"  height= "150px" width="150px"/>
	     	  <p style="font-size: 16px; font-style: normal;">Engr. Mohammed Meher Ul Karim<br>
               (Computer -Technology)</p>
	 	</div>

		 		<div class="electrical_teacher">
                  
	            <img src="Electrical.jpg.jpg"  height= "150px" width="150px"/>
	              <p style="font-size: 16px; font-style: normal;">Md. Emdadul Islam<br> (Electrical - Technology) </p>
		 	  </div>

		 	<div class="power_teacher">
	         <img src="pwor.jpg"  height= "150px" width="150px"  />

	  <p style="font-size: 16px; font-style: normal;">Md. Emdadul Islam<br> (Electrical - Technology) </p>	   
		 	</div>
	 	

		 	<div class="aidt_teacher">
			  <img src="pwor.jpg"  height= "150px" width="150px"  />
			 <p style="font-size: 16px; font-style: normal;">Md. Emdadul Islam<br> (Electrical - AIDT) </p>	
			</div>
			
		 	 <div class="Civil_teacher">
			   <img src="pwor.jpg"  height= "150px" width="150px"  />
   <p style="font-size: 16px; font-style: normal;">Md. Emdadul Islam<br> (Electrical - Civil) </p>	
			 </div>
			   
		     <div class="mechanical_teacher">
			   <img src="pwor.jpg"  height= "150px" width="150px"  />
			  <p style="font-size: 16px; font-style: normal;">Md. Emdadul Islam<br> (Electrical - Civil) </p>	
			 </div>
    </div>

      <div style="background-color: Indigo;">

	    <div class="student_count">
	    	    
 <!--    <div class="student_part">
		 <img src="student.png" height="64px" width="64px" style="text-align: center; margin-top: 8px;"></div>

           <div class="technology_part">
         	<img src="book.png" height="64px" width="64px" style="text-align: center; margin-top: 8px;">

         </div>
            <div class="TEACHER_STAFFS">
         	<img src="man-silhouette.png" height="64px" width="64px" style="text-align: center; margin-top: 8px;">

         </div>
 -->
   </div>

   <div class="image_col">

   <div class="image_1">   </div>

    <div class="image_aniation2"></div>
   </div>

   </div>

   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.7965107994833!2d91.40849871480094!3d23.03124258494857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375369ae3d72f73b%3A0xaf6db3b21c8e61e9!2sFeni%20Polytechnic%20Institute-FPI!5e0!3m2!1sen!2sbd!4v1607535053388!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<hr style="color: black;">

<div class="Institute_informaton">

		<p style=" margin-left: 10%; color: white; font-size: 24px; margin-top: 20px; font-family:'Times New Roman', Times, serif;">FENI POLYTECHNIC INSTITUTE FENI </p>

			<p style=" margin-left: 10%; color: white; font-size: 18px; margin-top: 10px;">
			  Foleshwor<br>

			 <li style="list-style-type: none; font-size: 20px; margin-left: 10%; color: white;"><i class="fa fa-phone-square" aria-hidden="true"></i> 01688709257(Principal),<br>
               0331 74030,Fax- 0331 69031</li>

               	 <li  style="list-style-type: none; font-size: 20px; margin-left: 10%; color: white;"><i class="fa fa-envelope" aria-hidden="true"></i> Post -Malipur, Post Code-3900</li>

               <li  style="list-style-type: none; font-size: 20px; margin-left: 10%; color: white;"><i class="fa fa-globe" aria-hidden="true"></i> info@fenipoly.edu.bd,
               reg_fpi@fenipoly.edu.bd</li>
 
			  </p>

			  <p >
			  	 <li  style="list-style-type: none; font-size: 30px; position: relative; float: right; margin-right: 86%; margin-left: 10%;"><a href="https://www.facebook.com/FeniPolytechnicInstitute.edu/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li> 
               
            <li style="list-style-type: none; font-size: 30px; position: absolute; margin-left: 10%; ">
            <a href="https://www.facebook.com/FeniPolytechnicInstitute.edu/"><i class="fa fa-twitter" aria-hidden="true">
            	
   </i></a></li>
   	</p>


  <p style="position: relative; float: right; margin-top:-14%;  margin-right:50%; color: white; font-size: 24px;">Usefull Links
  <br>

   <h5 style="float: right;margin-top:-11%; margin-right:52%; color: white;text-decoration: none; color: white;"><a href="#" >Home</a></h5> <br><br><br>
  
   <h5 style="float: right;margin-top:-10%; margin-right:52%;text-decoration: none; color: white; "><a href="#"  >Result</a></h5> <br> 

  <h5 style="float: right;margin-top:-9%; margin-right:51%; 
  text-decoration: none; color: white;"><a href="#"> Class Routen</a></h5> 
  <br>  <br>
     <hr>
			  
    <li style="font-size: 18px; color:white; list-style-type: none; margin-left: 10%;">Copyright ©2021 UTC. All Rights Reserved.| Developed by</li>
        	</p>
        	        	

</div>

</div>


<div class="container">
	
 <div class="modal" id="exampleModal">
 <div class="modal-dialog">
	   		
<div class="modal-content">
<div class="modal-header">
	   				
	 <h5 class="modal-title" id="exampleModalLabel">Depeartment Add</h5>		   	        
	 <button type="button" class="close" data-dismiss="modal">&times;</button>               
		   
 </div>
				
 <div class="modal-body">
	   				
	   			
 <form action="index.php" method="post" >
 
  <div class="form-group">
  <label >Deportment Name:</label>                     
   <input type="text" name="deName" class="form-control" id="deName" placeholder="Departments Name" autocomplete="off">
  </div>
	
	   <div class="modal-footer  justify-content-center">
        <button type="submit" class="btn btn-primary" 
	 name="add" >Save</button> </div>
	
	 </div>		   
 		 
 <?php 
		 
//session_destroy();
   $sm=mysqli_connect("localhost","root","","collage_management");
    $sp=0;
   if(!$sm){
   echo "Connection not Found";
   }else{
   
 if(isset($_POST["add"])){
 
    $Name=$_POST["deName"];

$qu="INSERT INTO `add_departments`(`Department_name`) VALUES('$Name')";
	$sb=mysqli_query($sm,$qu);
	 
		  if($sb>0){
	echo '<script>alert("Your Department Add SuccessFull..")</script>';
		  }else{
		echo '<script>alert("Your Department Add Faild..")</script>';
		  }
	      } 
         }
		 
?>
  </form>
  

	
	 </div>
	   	</div>
	   </div>

</div>

		 




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js" integrity="sha512-1lagjLfnC1I0iqH9plHYIUq3vDMfjhZsLy9elfK89RBcpcRcx4l+kRJBSnHh2Mh6kLxRHoObD1M5UTUbgFy6nA==" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>