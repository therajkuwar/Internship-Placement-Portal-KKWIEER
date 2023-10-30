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
  <title>Admin Index</title>
  <link rel="stylesheet" type="text/css" href="1.css"> 
  <link rel="shortcut icon" type="image/png" href="Mnit_logo.png">
  <link rel="stylesheet" type="text/css" href="stl.css">
</head>
<body >
  <div class="list-unstyled3" >
          <ul>
            <li><a href="kkw.php"><img src="./Images/KKWagh Logo.png" alt="kk wagh logo"  class="logo2" height="40"  align="left"/></a></li>
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

<div class="index_admin">
				
				<ul class="list-unstyled5 list-horizontal-layout right-align">
						<a href="admin_company_approval.php" class="btn5 ">Company Approval</a>
						<a href="admin_student_status.php" class="btn4">Change Student Status</a>
						
						
				</ul>
				<ul class="list-unstyled5 list-horizontal-layout right-align">
					    <a href="admin_register_admin.php" class="btn9">Add Admin</a>
						<a href="admin_notification.php" class="btn9">Notifications</a>
						
						<a href="admin_absent_student.php" class="btn9">Add Absentees</a>
				</ul>
				<ul class="list-unstyled5 list-horizontal-layout right-align">
						<!--<a href="profile_student2.php" class="btn4 ">View Profile</a> -->
						<a href="add_intern_gen_noti.php" class="btn6">Add Internship Notifications</a>
						<a href="add_place_gen_noti.php" class="btn6">Add Placement Notifications</a>
				</ul>
</div>

<div class="col-sm-4">
				<h3 class="mg-md  text-right tc-dim-gray">
					Internship &amp; Placement Office
				</h3>
				<p class="text-right">
				K. K. Wagh Institute Of Engineering Education And Research<br>Hirabai Haridas Vidyanagari, Mumbai Agra Road Amrutdham, Panchavati, Nashik,<br>Maharashtra 422003
				</p>
				<p class="footer1">
					<strong>Phone</strong> <br><a href="tel:+918390521455">+91-8390521455</a> <br><a href="tel:+919890892202">+91-9890892202</a> 
				</p>
				<p class="footer2">
				<strong>Email</strong> <br><a href="mailto:rajkuwar229@gmail.com">placements@kkwieer.ac.in</a>
				</p>
			</div> 
</body>
</html>
<?php
 //header("Location: logout.php");

?>