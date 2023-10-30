<?php

	session_start();
		if(!isset($_SESSION['user']))
		{
			header("Location: kkw.php");
		}
		if($_SESSION['user']=='student_int' )
    {
      header("Location: index_student_intern.php");
    }
    if($_SESSION['user']=='student_place' )
    {
      header("Location: index_student_placement.php");
    }
		if($_SESSION['user']=='company')
		{
			header("Location: index_company.php");
		}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin notifications</title>
  <link rel="stylesheet" type="text/css" href="1.css"> 
  <link rel="shortcut icon" type="image/png" href="Mnit_logo.png">
  <link rel="stylesheet" type="text/css" href="stl.css">
</head>
<body >
  <div class="list-unstyled3" >
          <ul>
            <li><a href="kkw.php"><img src="/Images/KKWagh Logo.png" alt="kk wagh logo"  class="logo2" height="40"  align="left"/></a></li>
              <li style="float:right"><a  href="logout.php" title="<?php echo $_SESSION['admin_name']; ?> ">Log Out</a></li> 
	
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
						<a href="admin_noti_reg_int.php " class="btn7 ">Registered Students for Internship</a>
						<a href="admin_noti_reg_place.php " class="btn7">Registered Students for Placement</a>
				</ul>
				<ul class="list-unstyled4 list-horizontal-layout right-align">
						<a href="admin_noti_select_int.php " class="btn7 ">Selected Students for Internship</a>
						<a href="admin_noti_select_place.php" class="btn7">Selected Students for Placement</a>
				</ul>
		<!--		<ul class="list-unstyled4 list-horizontal-layout right-align">
						<a href="profile_student_update_place.php" class="btn5 ">Update Profile</a>
						<a href=" " class="btn5">Apply For Company</a>
				</ul>  -->
</div>

<div class="col-sm-4">
				<h3 class="mg-md  text-right tc-dim-gray">
					Internship &amp; Placement Office
				</h3>
				<p class="text-right">
					K K Wagh Institute of Engineering Education & Research <br>Hirabai Haridas Vidyanagari, Mumbai Agra Road Amrutdham, Panchavati, Nashik<br> Maharashtra 422003
				</p>
				<p class="footer1">
					<strong>Phone</strong> <br><a href="tel:+918390521455">+91-8390521455</a> <br><a href="tel:+919890892202">+91-9890892202</a> 
				</p>
				<p class="footer2">
				<strong>Email</strong> <br><a href="http://www.mnit.ac.in/placement/index.php">placements@kkwieer.ac.in</a>
				</p>
			</div>  
</body>
</html>