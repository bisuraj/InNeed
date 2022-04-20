<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">


    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/price_rangs.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
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
}
		</style>
</head>

<body>
    <main>

        <div class="slider-area ">
            <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Get Your Job </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
        <div class="reg-form">
                                <div class="small-section-tittle2 mb-45">
                                    <div class="ion"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="12px">
                                    <path fill-rule="evenodd"  fill="rgb(27, 207, 107)"
                                        d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"/>
                                    </svg>
                                    </div>
                                    <h4>Search Jobs</h4>
                                </div>
                    
						<form action="search.jobs.search.php" method="post">	
						    <div class="single-listing">
                                <div class="small-section-tittle2">
                                    <h4>Keywords</h4>
                                </div>
						        <div class="input-form" >
								<input id="search_key" class="form-control"  type="text" name="search_keyword" placeholder="Keywords">
							    </div>
                             </div>
							 <br>
							 <br>
                            <!-- single two -->
                            <div class="single-listing">
                                <div class="small-section-tittle2">
                                    <h4>Job Location</h4>
                                </div>	
							     <div class="input-form">
								<input id="textbox" class="form-control" type="text" placeholder="Locations" name="search_location" />
							    </div>

                             </div>
							

                                <br>
                                <br>
                                <!--  Select job items End-->
                                <div class="single-listing">
                                <div class="small-section-tittle2">
                                    <h4>Salary</h4>
                                </div>
                                <!-- Select job items start -->
                                <div class="select-job-items2">
                                    <select name="search_salary_ddl"  id="ddl">
									<optgroup label="Salary Expected"></optgroup>
									<option value="1">100000 pa</option>
									<option value="2">200000 pa</option>
									<option value="3">300000 pa</option>
									<option value="4">400000 pa</option>
									<option value="5">500000 pa</option>
									<option value="6">600000 pa</option>
									<option value="7">700000 pa</option>
									<option value="8">800000 pa</option>
									<option value="9">900000 pa</option>
									<option value="10">1000000 pa</option>
									<option value="11">1100000 pa</option>
									<option value="12">1200000 pa</option>
									<option value="13">1300000 pa</option>
									<option value="14">1400000 pa</option>
									<option value="15">1500000 pa</option>
									<option value="16">1600000 pa</option>
									<option value="17">1700000 pa</option>
									<option value="18">1800000 pa</option>
									<option value="19">1900000 pa</option>
									<option value="20">2000000 pa</option>
									<option value="21">2100000 pa</option>
									<option value="22">2200000 pa</option>
									<option value="23">2300000 pa</option>
									<option value="24">2400000 pa</option>
									<option value="25">2500000 pa</option>
									<option value="26">2600000 pa</option>
									<option value="27">2700000 pa</option>
									<option value="28">2800000 pa</option>
									<option value="29">2900000 pa</option>
									<option value="30+">3000000+ pa</option>
                                    </select>
                                </div>

                                <br>
                                <br>
                                <!--  Select job items End-->
                                <div class="single-listing">
                                <div class="small-section-tittle2">
                                    <h4>Category</h4>
                                </div>
                                <!-- Select job items start -->
                                <div class="select-job-items2">
                                    <select name="search_func_area_ddl" id="ddl">>
									<option value="-1">Select</option>
									<optgroup label="Top Categories"></optgroup>
										<option value="0"><li>Accounts / Finance / Tax / CS / Audit</li></option>
										<option value="2"><li>Analytics &amp; Business Intelligence</li></option>
										<option value="4"><li>Banking / Insurance</li></option>
										<option value="7"><li>Engineering Design / R&amp;D</li></option>
										<option value="9"><li>Fashion / Garments / Merchandising</li></option>
										<option value="12"><li>HR / Administration / IR</li></option>
										<option value="29"><li>ITES / BPO / KPO / Customer Service / Operations</li></option>
										<option value"31"><li>Marketing / Advertising / MR / PR</li></option>
										<option value="34"><li>Production / Maintenance / Quality</li></option>
										<option value"40"><li>Site Engineering / Project Management</li></option>
										<option value"36"><li>Sales / BD</li></option>
										<option value"39"><li>Shipping</li></option>
									<optgroup label="IT Software Categories"></optgroup>
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
									<optgroup label="More Categories"></optgroup>
										<option value="1"><li>Agent</li></option>
										<option value="3"><li>Architecture / Interior Design</li></option>
										<option value="5"><li>Content / Journalism</li></option>
										<option value="6"><li>Corporate Planning / Consulting</li></option>
										<option value="8"><li>Export / Import / Merchandising</li></option>
										<option value="10"><li>Guards / Security Services</li></option>
										<option value"28"><li>IT- Hardware / Telecom / Technical Staff / Support</li></option>
										<option value="11"><li>Hotels / Restaurants</li></option>
										<option value"30"><li>Legal</li></option>
										<option value"32"><li>Packaging</li></option>
										<option value"33"><li>Pharma / Biotech / Healthcare / Medical / R&amp;D</li></option>
										<option value"35"><li>Purchase / Logistics / Supply Chain</li></option>
										<option value"37"><li>Secretary / Front Office / Data Entry</li></option>
										<option value"38"><li>Self Employed / Consultants</li></option>
										<option value"41"><li>Teaching / Education</li></option>
										<option value"42"><li>Ticketing / Travel / Airlines</li></option>
										<option value"43"><li>Top Management</li></option>
										<option value"44"><li>TV / Films / Production</li></option>
										<option value"45"><li>Web / Graphic Design / Visualiser</li></option>
										<option value"46"><li>Other</li></option>
                                    </select>
                                </div>
                                </div>
								<br>
								<br>
								<br>

                                <div class="single-listing">
                                <div class="small-section-tittle2">
                                    <h4>Experience</h4>
                                </div>
                                <!-- Select job items start -->
                                <div class="select-job-items2">
                                    <select name="search_exp" id="ddl">>
									<optgroup label="Experience"></optgroup>
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
                                </div>
                            </div>
							<br>
							<br>
							<br>
					<div>
						<input id="button" class="btn head-btn1"  type="submit" name="search_btn" value="Search Job" >
					</div>
                          </form>
                 </div>
    
                
    </main>

    <!-- JS here -->

    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Range -->
    <script src="./assets/js/slick.min.js"></script>
  

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>


    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/main.js"></script>

</body>

</html>