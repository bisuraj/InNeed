<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/SeekRegistrationValidate.js" ></script>


<style>
	.reg-form {
    width: 700px;
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
}</style>
</head>
<body onload="SeekerPageLoad()">
<div class="reg-form">
<form action="seeker.joinus.php" method="post" name="form_registerseeker" onsubmit="return SeekerValidate()" enctype="multipart/form-data"> 
<h1 class="text-center">Seeker</h2>
        <h2 class="text-center">Registrations</h2>   
		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-at"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="user_email" placeholder="Email" >			
            </div>
        </div>
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-at"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="user_reemail" placeholder="Confirm Email Id" >			
            </div>
        </div>

		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-lock"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="password" name="user_pass" placeholder="Password" >			
            </div>
        </div>
        
		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-lock"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="password" name="user_repass" placeholder="Password" >			
            </div>
        </div>
        <br>
        <h2 class="text-center">Contact-Details</h2>

		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="user_fname" placeholder="Your First Name" >			
            </div>
        </div>
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="user_lname" placeholder="Your Last Name" >			
            </div>
        </div>
        <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="seeker_gender"  value="Male">
  <label class="form-check-label" for="inlineRadio1">Male </label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="seeker_gender"  value="Female">
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>

<div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="seeker_marriage"  value="Single">
  <label class="form-check-label" for="inlineRadio1">Single </label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="seeker_marriahge"  value="Married">
  <label class="form-check-label" for="inlineRadio2">Married</label>
</div>
<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-phone"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="user_mob" placeholder="Your Contact Number" >			
            </div>
        </div>
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-phone"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="user_home" placeholder="Your Home Number" >			
            </div>
        </div>
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Address</label>
    <textarea class="form-control" name="user_add"  rows="5"></textarea>
  </div>

  <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-globe"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="user_city" placeholder="City  Name" >			
            </div>
        </div>
		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-building"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="user_state" placeholder="State" >			
            </div>
        </div>
		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-globe"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="user_country" placeholder="Country" >			
            </div>
        </div>
		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-flag"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="user_pincode" placeholder="Your Area Pincode" >			
            </div>
        </div>
		
<br>
<h2 class="text-center">Employement-Details</h2>

<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="user_key_skill" placeholder="Key Skills such as C, Java, etc." >			
            </div>
        </div>

							<select class="form-select" name="seeker_exp_ddl" onchange="ChangeExperienceDDL()">
								<option value="-1">Select Experience</option>
								<option value="0">Fresher</option>
								<option value="1">1 Year</option>
								<option value="2">2 Years</option>
								<option value="3">3 Years</option>
								<option value="4">4 Years</option>
								<option value="5">5 Years</option>
								<option value="6">6 Years</option>
								<option value="7">7 Years</option>
								<option value="8">8 Years</option>
								<option value="9">9 Years</option>
								<option value="10">10 Years</option>
								<option value="11">11 Years</option>
								<option value="12">12 Years</option>
								<option value="13">13 Years</option>
								<option value="14">14 Years</option>
								<option value="15">15 Years</option>
								<option value="16">16 Years</option>
								<option value="17">17 Years</option>
								<option value="18">18 Years</option>
								<option value="19">19 Years</option>
								<option value="20">20 Years</option>
								<option value="21">21 Years</option>
								<option value="22">22 Years</option>
								<option value="23">23 Years</option>
								<option value="24">24 Years</option>
								<option value="25">25 Years</option>
								<option value="26">26 Years</option>
								<option value="27">27 Years</option>
								<option value="28">28 Years</option>
								<option value="29">29 Years</option>
								<option value="30">30+ Years</option>
							</select>
<br>

							<select class="form-select " name="seeker_industry_type_ddl" >
									<option value="-1">Select Industry</option>
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
<br>
					

							<select class="form-select" name="seeker_func_area_ddl">
								<option value="-1">Select</option>
								<option value="0"><li>Accounts / Finance / Tax / CS / Audit</li></option>
								<option value="1"><li>Agent</li></option>
								<option value="2"><li>Analytics &amp; Business Intelligence</li></option>
								<option value="3"><li>Architecture / Interior Design</li></option>
								<option value="4"><li>Banking / Insurance</li></option>
								<option value="5"><li>Content / Journalism</li></option>
								<option value="6"><li>Corporate Planning / Consulting</li></option>
								<option value="7"><li>Engineering Design / R&amp;D</li></option>
								<option value="8"><li>Export / Import / Merchandising</li></option>
								<option value="9"><li>Fashion / Garments / Merchandising</li></option>
								<option value="10"><li>Guards / Security Services</li></option>
								<option value="11"><li>Hotels / Restaurants</li></option>
								<option value="12"><li>HR / Administration / IR</li></option>
								<option value="13"><li>IT Software - Application Programming / Maintenance</li></option>	
								<option value="14"><li>IT Software - Client Server</li></option>
								<option value="15"><li>IT Software - Mainframe</li></option>
								<option value="16"><li>IT Software - Middleware</li></option>
								<option value="17"><li>IT Software - Mobile</li></option>
								<option value"18"><li>IT Software - Other</li></option>
								<option value"19"><li>IT Software - System Programming</li></option>
								<option value"20"><li>IT Software - Telecom Software</li></option>
								<option value"21"><li>IT Software - DBA / Datawarehousing</li></option>
								<option value"22"><li>IT Software - E-Commerce / Internet Technologies</li></option>
								<option value"23"><li>IT Software - Embedded /EDA /VLSI /ASIC /Chip Des.</li></option>
								<option value"24"><li>IT Software - ERP / CRM</li></option>
								<option value"25"><li>IT Software - Network Administration / Security</li></option>
								<option value"26"><li>IT Software - QA &amp; Testing</li></option>
								<option value"27"><li>IT Software - Systems / EDP / MIS</li></option>
								<option value"28"><li>IT- Hardware / Telecom / Technical Staff / Support</li></option>
								<option value="29"><li>ITES / BPO / KPO / Customer Service / Operations</li></option>
								<option value"30"><li>Legal</li></option>
								<option value"31"><li>Marketing / Advertising / MR / PR</li></option>
								<option value"32"><li>Packaging</li></option>
								<option value"33"><li>Pharma / Biotech / Healthcare / Medical / R&amp;D</li></option>
								<option value="34"><li>Production / Maintenance / Quality</li></option>
								<option value"35"><li>Purchase / Logistics / Supply Chain</li></option>
								<option value"36"><li>Sales / BD</li></option>
								<option value"37"><li>Secretary / Front Office / Data Entry</li></option>
								<option value"38"><li>Self seekerloyed / Consultants</li></option>
								<option value"39"><li>Shipping</li></option>
								<option value"40"><li>Site Engineering / Project Management</li></option>
								<option value"41"><li>Teaching / Education</li></option>
								<option value"42"><li>Ticketing / Travel / Airlines</li></option>
								<option value"43"><li>Top Management</li></option>
								<option value"44"><li>TV / Films / Production</li></option>
								<option value"45"><li>Web / Graphic Design / Visualiser</li></option>
								<option value"46"><li>Other</li></option>
							</select>

			
<br>
           <h2 class="text-center">Education-Details</h2>

							<select class="form-select" name="seeker_highest_course" onchange="ChangeHighestCourse()">
								<option value="-1">Select Education Level</option>
								<option value="0">Not Pursued Graduation</option>
								<option value="1">Graduation</option>
								<option value="2">Post-Graduation</option>
								<option value="3">Others</option>								
							</select>
<br>
            <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_edu_describe" placeholder="Others" >			
            </div>
        <br>
        <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_hsc" placeholder="Name Of HSC Board" >			
            </div>
            <br>

        <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_hsc_special" placeholder="Specialisation" >			
            </div>
            <br>

        <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_hsc_percentage" placeholder="Percentage/CGPA in  Board" >			
            </div>
            <br>

        <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_hsc_rollno" placeholder="HSC Roll No" >			
            </div>
            <br>

        <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_hsc_college" placeholder="Name Of Schoool" >			
            </div>
            <br>

        <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_hsc_batch" placeholder="Passing Batch" >			
            </div>
            <br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_ssc" placeholder="Name Of Degreee" >			
            </div>
            <br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_ssc_special" placeholder="Specialisation" >			
            </div>
            <br>

        <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_ssc_percentage" placeholder="Percentage/CGPA in  Board" >			
            </div>
            <br>

        <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_ssc_rollno" placeholder="HSC Roll No" >			
            </div>
            <br>

        <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_ssc_college" placeholder="Name Of Schoool" >			
            </div>
            <br>

        <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_ssc_batch" placeholder="Passing Batch" >			
            </div>
            <br>
            <br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_bachelor" placeholder="Name Of Degree" >			
            </div>
            <br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_bachelor_special" placeholder="Specialisation" >			
            </div>
            <br>

        <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_bachelor_percentage" placeholder="CGPA" >			
            </div>
            <br>

        <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_bachelor_rollno" placeholder="Bachelor Roll No" >			
            </div>
            <br>

        <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_bachelor_college" placeholder="Name Of College" >			
            </div>
            <br>

        <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_bachelor_batch" placeholder="Graduating Year" >			
            </div>
            <br>
   
            <br>
            <br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_master" placeholder="Name Of Degree Cousrse" >			
            </div>
            <br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_master_special" placeholder="Specialisation Of the Degree" >			
            </div>
            <br>

        <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_master_percentage" placeholder="CGPA" >			
            </div>
            <br>

        <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_master_rollno" placeholder="Bachelor Roll No" >			
            </div>
            <br>

        <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_master_college" placeholder="Name Of College" >			
            </div>
            <br>

        <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input id="textbox" class="form-control" type="text" name="seeker_master_batch" placeholder="Graduating Year" >			
            </div>
            <br>
            <h2 class="text-center">Upload Your Resume</h2>

            <input type="file"  class="form-control" name="seeker_resume" id="file" /><br />
            <input type="submit" value="Register" class="btn head-btn2"  id="button" name="seeker_register">
	
						<div >
							<input type="checkbox" name="seeker_agree"  onclick="SeekerPageLoad()" />I agree on 
							<a href="index.php" style="text-decoration:none; color:#0000FF">
									Terms &amp; Condition<font color="#FF0000">&nbsp;*</font>
							</a><br />
							<input type="checkbox" name="seeker_notifications" />Notifications from us.<br />
							<input type="checkbox" name="seeker_call_sms" />Receive Call and SMS from us.<br />
						</div><br>
<div align="center">
							<input type="submit" value="Register" class="btn head-btn1"  id="button" name="seeker_register"></div>
				</form>
</div>
</div>

</body>
</html>