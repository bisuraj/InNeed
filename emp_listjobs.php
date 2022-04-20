<?php
ob_start();
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>List Jobs</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="js/job_listvalidation.js"></script>
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

<?php	
	//Including database connection files to the page
	require 'db_connect.php';
?>

<body>
    <?php
	include 'navbar.emp.loggedin.php';
    ?>
	
    <div class="reg-form">

<form method="post" action="emp.listjobs.php"  name="list_jobs"  onsubmit="return listjobs()">
        <h1 class="text-center">Job </h2>
        <h2 class="text-center">Listing</h2>   
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-building"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="company_name" placeholder="Company Name" >			
            </div>
        </div>

        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-building"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="job_name" placeholder="Job profile" >			
            </div>
        </div>


		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-key"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="key_skill" placeholder="Key Skill" >			
            </div>
        </div>
		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-globe"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="location" name="location" placeholder="location" >			
            </div>
        </div>
		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-lock"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="ctc" placeholder="CTC" >			
            </div>
        </div>
		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span >Exp</span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="exp_required" placeholder="Experience Required" >			
            </div>
        </div>
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span>Job</span>
                    </span>                    
                </div>
                <input id="textarea" class="form-control" type="textarea" name="jd" placeholder="Job Description" >			
            </div>
        </div>
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span >Start Date</span>
                    </span>                    
                </div>
                <input id="date" class="form-control" type="date" name="Date" placeholder="Joining Date" >			
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
								</select>               <br>
     
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span >V</span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="number" name="vaccancies" placeholder="Vaccancies" >			
            </div>
        </div>
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span >Expiry Date</span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="Date" name="expiry_date" placeholder="Expiry Date" >			
            </div>
        </div>
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-globe"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="number" name="website" placeholder="website" >			
            </div>
        </div>

					<div align="center">
						<input type="submit" value="Post" id="button" name="emp_btn_post" class="btn head-btn1" >
					</div>

				</form>
				
				</div>
</div>
<?php
	include 'footer.php';
    ?>
    
</body>

</html>
