<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

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



<style>
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
	top: 30px;
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
 top: 30px;
 position: fixed;

}
</style>
</head>

<body>


<?php if($stp=="Admin"){ ?>

<input type="checkbox" id="check"/>

<label for="check">
	 <i class="fas fa-bars" id="btn"></i>

	  <i class="fas fa-times" id="cancle"></i>
</label>

	<div class="sldebar">

 <header>MY Deshboard</header>  
     <ul>
   	<li><a data-toggle="modal"  data-target="#exampleModal"  href="#">Department  Add</a></li>	

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
	
     </ul>
	</div> 

<?php }?>
 

     <div class="head">

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
					 <li><a href="Teacher_informationShow.php?pd=Computer">Techer'sInformation</a></li>	
					 
	              
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
		 
		  <li  style="float:right; font-size:22px; background:Aqua;"><a href="student_login.php">STUDENT LOGIN</a></li>	
     	</ul>


     </div>

 
</body>
</html>
