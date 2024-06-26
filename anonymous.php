<?php
	include('config.php');
	include('UserInfo.php');
	

	if(isset($_POST['register'])) {
		
			$a = $_POST['category'];
			$b = $_POST['date'];
			$c = $_POST['hours'];
			$d = $_POST['min'];
			$e = $_POST['shift'];
			$f = $_POST['state'];
			$g = $_POST['city'];				
			$h = $_POST['police'];
			$i = $_POST['incident'];
			$j = $_POST['comment'];
			
			$time = $c .':'.$d .' '.$e; 
			$ip = UserInfo::get_ip();
			$os = UserInfo::get_os();
			$browser = UserInfo::get_browser();
			$device = UserInfo::get_device();

		$sql = "INSERT INTO anonymous (category,user_ip,user_os,user_browser,user_device,date ,time,state, city,police_station,incident,comment) VALUES ('$a', '$ip', '$os', '$browser', '$device' ,'$b', '$time','$f', '$g','$h','$i','$j')";
			$sql1 = mysqli_query($con,$sql) or die(mysqli_error());
		
			echo "<script>alert('Your report is sucessfully send !!!');</script>";
			echo "<script>window.location.href='index.html';</script>";
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CyberGuard Central - Security is priority | Lost Item Registration</title>
	<style type="text/css">
		.indent-small {
  margin-left: 5px;
}
.form-group.internal {
  margin-bottom: 0;
}
.dialog-panel {
  margin: 10px;
}
.datepicker-dropdown {
  z-index: 200 !important;
}
.panel-body {
  background: #e5e5e5;
  /* Old browsers */
  background: -moz-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* FF3.6+ */
  background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #e5e5e5), color-stop(100%, #ffffff));
  /* Chrome,Safari4+ */
  background: -webkit-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* Opera 12+ */
  background: -ms-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* IE10+ */
  background: radial-gradient(ellipse at center, #e5e5e5 0%, #ffffff 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=1);
  /* IE6-9 fallback on horizontal gradient */
  font: 600 15px "Open Sans", Arial, sans-serif;
}
label.control-label {
  font-weight: 600;
  color: #777;
}
	</style>
	
		   <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	   <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

	<link href='https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
</head>
<body>


	    <!-- Topbar Start -->
    <div class="container-fluid">
          <div class="row bg-secondary py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left">
                <div class="d-inline-flex align-items-center">
                    <p class="mr-2 mb-2 mb-lg-0 text-white">Opening Time:</p>
                    <span class="mb-2 mb-lg-0 text-white">*24/7/365</span>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <p class="m-0 mr-1 text-white">Follow Us:</p>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
       <div class="row py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-capitalize font-italic"><span class="text-primary">Cyberguard</span> Central</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="d-inline-flex flex-column text-center pr-3 border-right">
                        <h6>Our Office</h6>
                        <p class="m-0">Jabalpur, MP, INDIA</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center px-3 border-right">
                        <h6>Email Us</h6>
                        <p class="m-0">cyberguardcentral@gmail.com</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center pl-3">
                        <h6>Call Us</h6>
                        <p class="m-0">+91- 9988776655</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
	
	    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-5">
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-0">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Safety</span>First</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav m-auto py-4">
                     <a href="index.html" class="nav-item nav-link">Home</a>
                  
                    <a href="login.php" class="nav-item nav-link">Upload Item</a>
					<a href="login_table.php" class="nav-item nav-link">Search</a>
					<a href="anonymous.php" class="nav-item nav-link active">Report Anonymously</a>
                    <!--<a href="guard.html" class="nav-item nav-link">Guards</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="single.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>-->
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->




<div class='container'>
    <div class='panel panel-primary dialog-panel'>
      <div class='panel-heading'>
        <h5>Complaint and Incident Details</h5>
      </div>
      <div class='panel-body'>
	  
        <form class='form-horizontal' method="POST">
		
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='category'>Category of Complaint</label>
            <div class='col-md-6'>
              <select class='form-control' id="category" name='category'>
			  <option>Select Category of Complaint</option>
              	<option value="Child Pornography (CP)-Child Sexual Abuse Material (CSAM)">Child Pornography (CP)-Child Sexual Abuse Material (CSAM)</option>
		<option value="Rape/Gang Rape (RGR)-Sexually Abusive Content">Rape/Gang Rape (RGR)-Sexually Abusive Content</option>
		<option value="Publishing or Transmitting Sexually Obscene material in electronic form">Publishing or Transmitting Sexually Obscene material in electronic form</option>
		<option value="Publishing or transmitting of material containing sexually explicit act in electronic form">Publishing or transmitting of material containing sexually explicit act in electronic form</option>
              </select>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Date</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <input class='form-control col-md-12' type="date" name='date' id="date" placeholder='dd-mm-yyyy' >
                </div>
              </div>
			
              <div class='col-md-2 indent-small'>
                  <div class='form-group internal'>
                  <select class='form-control' name='hours' id="hours">
                    <option>HH</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                
                  </select>
                </div>
              </div>
             <div class='col-md-2 indent-small'>
                  <div class='form-group internal'>
                  <select class='form-control' name='min' id="min">
                    <option>MM</option>
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                
                  </select>
                </div>
              </div>
             <div class='col-md-2 indent-small'>
                  <div class='form-group internal'>
                  <select class='form-control' name='shift' id="shift">
                    <option>AM</option>
                    <option>PM</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>State</label>
            <div class='col-md-8'>
              <div class='col-md-8'>
                <div class='form-group internal'>

				 <select class='form-control' name='state' id="state" >
				 <option>Select State</option>
                    <option value="MP">MP</option>
                    <option value="UP">UP</option>
					<option value="AP">AP</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>City</label>
            <div class='col-md-8'>
              <div class='col-md-8'>
                <div class='form-group internal'>
                  
				 <select class='form-control' name='city' id="city" >
				  <option>Select City</option>
                    <option value="Jabalpur">Jabalpur</option>
                    <option value="Aligarh">Aligarh</option>
					<option value="Alampur">Alampur</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Police Station</label>
            <div class='col-md-8'>
              <div class='col-md-8'>
                <div class='form-group internal'>
				<input type="text" class='form-control' name='police' id="police" placeholder="Enter police station name">

                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Where this incident occur</label>
            <div class='col-md-8'>
              <div class='col-md-8'>
                <div class='form-group internal'>
                  <select class='form-control' name='incident' id="incident">
                    <option value="Email">Email</option>
		<option value="Facebook">Facebook</option>
		<option value="Instagram">Instagram</option>
		<option value="Snapchat">Snapchat</option>
		<option value="Twitter">Twitter</option>
		<option value="WhatsApp">WhatsApp</option>
		<option value="Website Url">Website Url</option>
		<option value="Youtube">Youtube</option>
		<option value="LinkedIn">LinkedIn</option>
		<option value="Telegram">Telegram</option>
		<option value="Other">Other</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Comments</label>
            <div class='col-md-6'>
              <textarea class='form-control' name='comment' id="comment" placeholder='Additional comments' rows='3'></textarea>
            </div>
          </div>
          <div class='form-group'>
            <div class='col-md-offset-4 col-md-3'>
              <button class='btn-lg btn-primary' type='submit' name="register" id="register">Submit</button>
            </div>
            <div class='col-md-3'>
              <button class='btn-lg btn-danger' style='float:right' type='submit'>Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  
    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize font-italic text-white"><span class="text-primary">CyberGuard</span>Central</h1>
                <p class="m-0">A user-friendly, confidential platform revolutionizing crime reporting and collaboration with law enforcement nationwide. Join us for a safer society.</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Upload Items</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Search</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Popular Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Report Anonymous</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Team</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Jabalpur, M.P., INDIA</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+91- 9988776655</p>
                        <p><i class="fa fa-envelope mr-2"></i>cyberguardcentral@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">CyberGuard Central</a>. All Rights Reserved.
              
                </p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->



 <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
<script src="js/anonymous.js"></script>
  
  

<script type="text/javascript">
	$(document).ready(function() {  
  $('.multiselect').multiselect();
  $('.datepicker').datepicker();  
});

</script>

<script src="js/cities.js"></script>
<script language="javascript">print_state("sts");</script>
</body>
</html>