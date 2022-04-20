<?php
session_start();
$_SESSION['captcha'] = rand(1000, 9999);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="css/master.css" type="text/css" />
	<link rel="stylesheet" href="css/join.us.css" type="text/css" />
	<script type="text/javascript" src="js/EmpRegistrationValidate.js" ></script>
	<title>Employer Registration </title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo.png">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
	.reg-form {
    width: 600px;
    margin: 30px auto;
}
.reg-form form {        
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.reg-form h2 {
    margin: 0 0 15px;
}
	</style>
</head>

<!-- Start of title and navigation bar div -->
<?php
	if(!empty($_SESSION['EMP_ID']) || !empty($_SESSION['SEEK_ID']))
	{ include 'navbar.loggedin.php';  }
	else {	include 'navbar.php';  }
?>

<div class="reg-form">

<form method="post" action="employer.joinus.register.php" onclick="return EmpValidate()" name="form_empjoinus" >
        <h1 class="text-center">Employer</h2>
        <h2 class="text-center">Registrations</h2>   
		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="emp_user_name" placeholder="Username" >			
            </div>
        </div>

		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-at"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="emp_email" placeholder="Email-ID" >			
            </div>
        </div>
		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-lock"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="password" name="emp_pass" placeholder="Password" >			
            </div>
        </div>
		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-lock"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="emp_repass" placeholder="Confirm Password" >			
            </div>
        </div>
		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-building"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="emp_cmpname" placeholder="Company Name" >			
            </div>
        </div>
		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-lock"></span>
                    </span>                    
                </div>
				<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="emp_cmptype" value="Company">
  <label class="form-check-label" >Company</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox"  name="emp_cmptype" value="Consultant">
  <label class="form-check-label" >Consultant</label>
</div>
			
        </div>

				<select class="form-select" aria-label="Select Industry Type " name="emp_industry_type">
									<option value="0">Accounting / Finance</option>
									<option value="1">Advertising / PR / MR / Event Management</option>
									<option value="2">Agriculture / Dairy</option>
									<option value="3">Animation / Gaming</option>
									<option value="4">Architecture / Interior Design</option>
									<option value="5">Automobile / Auto Anciliary / Auto Components</option>
									<option value="6">Aviation / Aerospace Firms</option>
									<option value="7">Banking / Financial Services / Broking</option>
									<option value="8">BPO / Call Centre / ITES</option>
									<option value="9">Brewery / Distillery</option>
									<option value="10">Ceramics / Sanitary ware</option>
									<option value="11">Chemicals / PetroChemical / Plastic / Rubber</option>
									<option value="12">Construction / Engineering / Cement / Metals</option>
									<option value="13">Consumer Electronics / Appliances / Durables</option>
									<option value="14">Courier / Transportation / Freight / Warehousing</option>
									<option value="15">Education / Teaching / Training</option>
									<option value="16">Electricals / Switchgears</option>
									<option value="17">Export / Import</option>
									<option value="18">Facility Management</option>
									<option value="19">Fertilizers / Pesticides</option>
									<option value="20">FMCG / Foods / Beverage</option>
									<option value="21">Food Processing</option>
									<option value="22">Fresher / Trainee / Entry Level</option>
									<option value="23">Gems / Jewellery</option>
									<option value="24">Glass / Glassware</option>
									<option value="25">Government / Defence</option>
									<option value="26">Heat Ventilation / Air Conditioning</option>
									<option value="27">Industrial Products / Heavy Machinery</option>
									<option value="28">Insurance</option>
									<option value="29">Iron and Steel</option>
									<option value="30">IT-Hardware &amp; Networking</option>
									<option value="31">IT-Software / Software Services</option>
									<option value="32">KPO / Research / Analytics</option>
									<option value="33">Legal</option>
									<option value="34">Media / Entertainment / Internet</option>
									<option value="35">Internet / Ecommerce</option>
									<option value="36">Medical / Healthcare / Hospitals</option>
									<option value="37">Mining / Quarrying</option>
									<option value="38">NGO / Social Services / Regulators / Industry Associations</option>
									<option value="39">Office Equipment / Automation</option>
									<option value="40">Oil and Gas / Energy / Power / Infrastructure</option>
									<option value="41">Pulp and Paper</option>
									<option value="42">Pharma / Biotech / Clinical Research</option>
									<option value="43">Printing / Packaging</option>
									<option value="44">Publishing</option>
									<option value="45">Real Estate / Property</option>
									<option value="46">Recruitment / Staffing</option>
									<option value="47">Retail / Wholesale</option>
									<option value="48">Security / Law Enforcement</option>
									<option value="49">Semiconductors / Electronics</option>
									<option value="50">Shipping / Marine</option>
									<option value="51">Strategy / Management Consulting Firms</option>
									<option value="52">Telcom / ISP</option>
									<option value="53">Textiles / Garments / Accessories</option>
									<option value="54">Travel / Hotels / Restaurants / Airlines / Railways</option>
									<option value="55">Tyres</option>
									<option value="56">Water Treatment / Waste Management</option>
									<option value="57">Wellness / Fitness / Sports</option>
									<option value="58">Other</option>
								</select>            
           	<div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="emp_gender"  value="Male">
  <label class="form-check-label" for="inlineRadio1">Male </label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="emp_gender"  value="Female">
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Address</label>
    <textarea class="form-control" name="emp_add"  rows="5"></textarea>
  </div>

  <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-globe"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="emp_city" placeholder="City  Name" >			
            </div>
        </div>
		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-building"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="emp_state" placeholder="State" >			
            </div>
        </div>
		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-globe"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="emp_country" placeholder="Country" >			
            </div>
        </div>
		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-flag"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="emp_pincode" placeholder="Your Area Pincode" >			
            </div>
        </div>
		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-phone"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="emp_phno" placeholder="Your Contact Number" >			
            </div>
        </div>
					
		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="emp_name" placeholder="Contact Person Name" >			
            </div>
        </div>
					
		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span ><input type="checkbox" name="emp_agree" onclick="LoadPage()"/> </span>
                    </span>                    
                </div>
				   I agree on <a href="index.php" style="text-decoration:none; color:#0000FF">Terms &amp; Conditions</a>
							<font color="#FF0000">&nbsp;*</font>	
                  </div>
          </div>
					<div align="center">
						<input type="submit" value="Register Me" id="button" name="emp_btn_register" class="btn head-btn1" onclick="EmpValidate()">
					</div>
				
					<div>
						<input type="hidden" value="<?php echo $query_run_num_username; ?>" name="emp_hddn_username" /> 
					</div>
				</form>
				
				</div>
</div>

</body>

<?php
	include 'footer.php';
?>	

</html>
