<?php

  session_start();
    if(!isset($_SESSION['user']))
    {
      header("Location: kkw.php");
    }
    if($_SESSION['user']=='admin')
    {
      header("Location: index_admin.php");
    }
    
    if($_SESSION['user']=='student_int' )
    {
      header("Location: index_student_intern.php");
    }
    if($_SESSION['user']=='company')
    {
      header("Location: index_company.php");
    }

?>
<!DOCTYPE html>
<html>
<head>
  <title>Student notifications</title>
  <link rel="stylesheet" type="text/css" href="1.css"> 
  <link rel="shortcut icon" type="image/png" href="./Images/KKWagh Logo.png">
  <link rel="stylesheet" type="text/css" href="stl.css">
</head>
<body >
  <div class="list-unstyled3" >
          <ul>
           <li><a href="kkw.php"><img src="./Images/KKWagh Logo.png" alt="kk wagh logo"  class="logo2" height="40"  align="left"/></a></li>
              <li style="float:right"><a  href="logout.php" title="<?php echo $_SESSION['student_name']; ?> ">Log Out</a></li> 
  
            <div class="para">
            <p> Internship &amp; Placement, KKWIEER Nashik</p>
                </div>  
                   </ul>
          
        </div>
<!--    
  <div class="header">
    <h3> <a style="color:white "href="profile_student2.php">View Profile</a></h3>
  </div>
  <div class="header">
    <h3> <a style="color:white "href="profile_student_update_place.php">Update Profile</a></h3>
  </div>  -->

<div class="index_student_intern">
        <ul class="list-unstyled4 list-horizontal-layout right-align">
            <a href=" place_visit_company.php" class="btn8 ">Visiting Companies</a>
            <a href=" place_reg_company.php" class="btn8">Registered Companies</a>
        </ul>
        <ul class="list-unstyled4 list-horizontal-layout right-align">
            <a href="place_general_notification.php " class="btn5 ">General Notifications</a>
      <!--      <a href=" " class="btn5">Apply For Company</a>  -->
        </ul>
</div>

<div class="col-sm-44">
						<h3 class="mg-md  text-right tc-dim-gray">
							Internship &amp; Placement Office
						</h3>
						<p class="text-right">
							K K Wagh Institute of Engineering Education & Research<br>Hirabai Haridas Vidyanagari, Mumbai Agra Road Amrutdham, Panchavati, Nashik<br>Maharashtra 422003
						</p>
						<p class="footer3">
							<strong>Phone</strong> <br><a href="tel:+918390521455">+91-8390521455</a> <br><a href="tel:+919890892202">+91-9890892202</a>
						</p>
						<p class="footer4">
							<strong>Email</strong> <br><a href="mailto:rajkuwar229@gmail.com">placements@kkwieer.ac.in</a>
						</p>
					</div>
</body>
</html>