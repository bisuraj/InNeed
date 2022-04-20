<?php
	ob_start();
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Sign in </title>
<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo.png">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 400px;
    margin: 30px auto;
}
.login-form form {        
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .login-btn {
    border-radius: 2px;
}
.input-group-prepend .fa {
    font-size: 18px;
}
.login-btn {
    font-size: 15px;
    font-weight: bold;
  	min-height: 40px;
}
.social-btn .btn {
    border: none;
    margin: 10px 3px 0;
    opacity: 1;
}
.social-btn .btn:hover {
    opacity: 0.9;
}
.social-btn .btn-secondary, .social-btn .btn-secondary:active {
    background: #507cc0 !important;
}
.social-btn .btn-info, .social-btn .btn-info:active {
    background: #64ccf1 !important;
}
.social-btn .btn-danger, .social-btn .btn-danger:active {
    background: #df4930 !important;
}
.or-seperator {
    margin-top: 20px;
    text-align: center;
    border-top: 1px solid #ccc;
}
.or-seperator i {
    padding: 0 10px;
    background: #f7f7f7;
    position: relative;
    top: -11px;
    z-index: 1;
}   
</style>
</head>
<?php
	if(!empty($_SESSION['EMP_ID']) || !empty($_SESSION['SEEK_ID']))
	{ include 'navbar.loggedin.php'; }
	else {	include 'navbar.php';  }
?>
<body>
<div class="login-form">
<form action="employer.login.php" method="post" name="form_emplogin" onsubmit="return EmpLogin()">
				<br />
                <h1 class="text-center">Employer</h2>
        <h2 class="text-center">Sign in</h2>   
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input type="text" class="form-control" name="emp_email_login" placeholder="Email" required="required">				
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                    </span>                    
                </div>
                <input type="password" class="form-control" name="emp_pass_login" placeholder="Password" required="required">				
            </div>
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-primary login-btn btn-block" name="emp_btn_login" value="Employer Login" >Sign in</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="#" class="float-right"><font color="#FF0000">Forgot Password?</font></a>
        </div>
    </form>
    <p class="text-center text-muted small">Don't have an account? <a href="employer.joinus.php"><font color="#FF0000">Signup Here</font></a></p>
</div>

</body>

<?php
include 'footer.php';

if($_SESSION['flag_emp_logincheck'] == 2)
{	
	echo '<script> alert("Username and Password is inorrect."); </script>';
	$_SESSION['flag_emp_logincheck'] = 0;
	unset($_SESSION['flag_emp_logincheck']); 
}

if($_SESSION['emp_loggedin'] == 1)
{
	echo '<script> alert("You are already logged in"); </script>';
	$_SESSION['emp_loggedin'] = 0;
	unset($_SESSION['emp_loggedin']);
}

if($_SESSION['EMP_JOINED'] == 1)
{
	echo '<script> alert("You are now joined with us. Login to access your account."); </script>';
	$_SESSION['EMP_JOINED'] = 0;
	unset($_SESSION['EMP_JOINED']);
}
?>

</html>