<?php
// Define the smtp_mailer function
function smtp_mailer($to, $subject, $msg) {
    include('smtp/PHPMailerAutoload.php');
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "ipokkwieer@gmail.com";
    $mail->Password = "nhoj nonk fsbg zxyt";
    $mail->setFrom("ipokkwieer@gmail.com");
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->addAddress($to);
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
    if (!$mail->send()) {
        echo $mail->ErrorInfo;
    } else {
        // return 'Sent';
    }
}

session_start();
if (isset($_SESSION['user'])) {
    if ($_SESSION['user'] == 'admin') {
        header("Location: index_admin.php");
    }
    if ($_SESSION['user'] == 'student_int') {
        header("Location: index_student_intern.php");
    }
    if ($_SESSION['user'] == 'student_place') {
        header("Location: index_student_placement.php");
    }
    if ($_SESSION['user'] == 'company') {
        header("Location: index_company.php");
    }
}
?>

<?php
$student_id = "";
$student_name = "";
$st_password = "";
$password = "";
$st_mail = "";
$errors = array();
$positives = array();
$db = mysqli_connect('localhost', 'root', '', 'placement');
if (isset($_POST['intern_forgot'])) {
    $student_id = mysqli_real_escape_string($db, $_POST['student_id']);
    if (empty($student_id)) {
        array_push($errors, "Student Id is required");
    }
    $user_check_query = "SELECT * FROM student WHERE STUDENT_ID='$student_id'  LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) {
        $st_mail = $user['EMAIL'];
        $student_name = $user['STUDENT_NAME'];

        function random_password($length = 8) {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
            $password = substr(str_shuffle($chars), 0, $length);
            return $password;
        }

        $st_password = random_password(8);
        $message = "Your temporary password is: " . $st_password . ". You can update your password on Portal.<br><br>Regards,<br>Internship & Placement Portal<br>KKWIEER, Nashik";
echo smtp_mailer($st_mail, 'Reset Your Password', $message);



        // echo smtp_mailer($st_mail, 'Reset Your Password', 'Your new temporary password is: ' . $st_password. '.' . '\nYou can update your password on Portal.'. '\n\n\nRegards\nInternship & Placement Portal\nKKWIEER,Nashik');

        if (count($errors) == 0) {
            $password = md5($st_password);
            $query = "UPDATE student set S_PASSWORD='$password' where STUDENT_ID='$student_id'";
            $results = mysqli_query($db, $query);
            array_push($positives, "New Password is sent to your email");
        } else {
            array_push($errors, "Student does not exist");
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Intern Forgot Password</title>
  <link rel="stylesheet" type="text/css" href="1.css">
  <link rel="shortcut icon" type="image/png" href="/Images/KKWagh Logo.png">
  <link rel="stylesheet" type="text/css" href="stl.css">
</head>
<body>
  <div class="list-unstyled3" >
		  <ul>
			<li><a href="kkw.php"><img src="./Images/KKWagh Logo.png" alt="kk wagh logo"  class="logo2" height="40"  align="left"/></a></li>
			 <!-- <li style="float:right"><a  href="logout.php">Log Out</a></li> -->
  
			<div class="para">
			<p> Internship &amp; Placement, KKWIEER</p>
				</div>  
				   </ul>
		  
		</div>
  <div class="header">
	<h2>Forgot Password</h2>
  </div>
<!--/*The PHP superglobals $_GET and $_POST are used to collect form-data.-->  
  <form method="post" action="intern_forgot.php">
  <?php include('wrong.php'); ?>
  <?php include('positive.php'); ?>
  <div class="input-group">
	  <label>Student Id</label>   
	  <input type="text" name="student_id" >
	</div>
	<div class="input-group">
	  <button type="submit" class="btn" name="intern_forgot">Enter</button>
	</div>
	 <p>
	  Got new password?<a href="student_login_int.php">Login</a>
	</p> 
  </form>
 
</body>
</html>