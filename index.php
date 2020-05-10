<!DOCTYPE html>
<html>
<head>
	<title>CoronaTracker</title>
	<?php include 'links/link.php'; ?>
	<?php include 'css/style.php'; ?> 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-style p-3">
  <a class="navbar-brand pl-5" href="index.php"><h1>LuminousHeads</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#homeid">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Live Updates
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="corona.php">World</a>
          <a class="dropdown-item" href="indiacorona.php">India</a>
        </div>  
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptom</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact Us</a>
      </li>
       
    </ul>
    
  </div>
</nav>

<div class="main_header parallax" id="homeid">
<div class="row w-100 h-100">
	<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-1">
	<div class="leftside w-100 h-100 pd-3 d-flex justify-content-center align-items-center">
		<span class="animated slideInLeft"><img src="images/bacteria.png" width="300" height="250"></span>
			
		</div>
	</div>
	<div class="col-md-7 col-12 order-lg-2 order-2">
	<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1 class="animated slideInRight" >Lets stay safe and fight together Against Cor<span class="corona-rotate"> 
                <img src="images/corona.png" width="70" height="70">
				</span>na virus </h1>
			</div>	
	</div>
</div>
</div>
<!-- corona latest updates -->

<section class="corona_update container-fluid">
<div class="mb-3">
<br>
	<h3 class="text-uppercase text-center">Covid-19 updates Live Updates</h3>
</div>
	<div class="d-flex justify-content-around align-items-center count_style">
		<div>
		<h1 class="count" id="ac"><?php

$data = file_get_contents('https://api.covid19api.com/summary');

$coronalive = json_decode($data, true);
echo $coronalive['Global']['TotalConfirmed'];

 
?></h1>
		<p>Active COVID-19 cases</p>
	    </div>
	    <div>
		<h1 class="count"><?php echo $coronalive['Global']['TotalRecovered']; ?></h1>
		<p>Cured/discharged cases</p>
	    </div>
	    <div>
		<h1 class="count"><?php echo $coronalive['Global']['TotalDeaths']; ?></h1>
		<p>Death cases</p>
	    </div>
	</div>
<div class="two_btn mt-5">
	<div class="row">
		<div class="col-lg-6 col-md-5 col-12">
			<div class="rightside w-300 h-300 d-flex justify-content-center align-items-center">
       <button type="submit" class="btn btn-danger w-50 h-150 animated infinite flash delay-2s" onclick="wfun()" name="World">Live updates of world</button>
        </div>
        </div>


        <div class="col-lg-6 col-md-5 col-12">
			<div class="leftside w-300 h-300 d-flex justify-content-center align-items-center">
        <button type="submit" class="btn btn-danger w-50 h-150 animated infinite flash delay-2s" onclick="indfun()" name="india">Live updates of India</button>
        </div>
	</div>
</div>
</div>
</section>

<!-- About section  -->
<div class="'container-fluid sub_section pt-5 pb-5 parallax" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>About COVID-19</h1> 
	</div>
	<div class="row pt-5">
		<div class="col-lg-4 col-md-6 col-12 about_res">
			<img src="images/aboutcorona.png" class="img-fluid" width="300" height="300">
		</div>		
		<div class="col-lg-6 col-md-6 col-12">
			<h2>What is Covid -19(Corona-virus)</h2>
			<p>Covid-19 is the infectious disease caused by the most recently discovered coronavirus. This new virus and disease were unkown before the outbreak began in Wuhan,china,in december 2019</p>
			<p>Coronavirus are a large familyu of viruses which may cause illness in animaks or humans. In humans, several coronaviruses are kown to cause respiratory infections ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome(MERS) and severe acute respiratory syndrome(SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19
			</p>
		  <h2>How does the COVID-19 virus spread?</h2>
		  <p>The virus is transmitted through direct contact with respiratory droplets of an infected person (generated through coughing and sneezing), and touching surfaces contaminated with the virus. The COVID-19 virus may survive on surfaces for several hours, but simple disinfectants can kill it.</p>
		</div>
	</div>
</div>

<!-- coronavirus symptoms -->
<div class="'container-fluid pt-5 pb-5" id="sympid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Coronavirus Symptoms</h1> 
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
		<figure class="text-center">		
		<img src="images/cough.png" class="img-fluid" width="120" height="120">
		<figcaption>Cough</figcaption>
		</figure>		

		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
		<figure class="text-center">		
		<img src="images/nose.png" class="img-fluid" width="120" height="120">
		<figcaption>runny nose</figcaption>
		</figure>		
		
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
		<figure class="text-center">		
		<img src="images/fever.png" class="img-fluid" width="120" height="120">
		<figcaption>fever</figcaption>
		</figure>		
		
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
		<figure class="text-center">		
		<img src="images/cold.png" class="img-fluid" width="120" height="120">
		<figcaption>Cold</figcaption>
		</figure>		
		
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
		<figure class="text-center">		
		<img src="images/td.png" class="img-fluid" width="120" height="120">
		<figcaption>tiredness</figcaption>
		</figure>		
		
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
		<figure class="text-center">		
		<img src="images/breathe.png" class="img-fluid" width="120" height="120">
		<figcaption>difficulty breathing (severe cases)</figcaption>
		</figure>		
		
		</div>
	</div>
</div>	

<!-- prevention Against Corona -->
<div class="'container-fluid sub_section pt-5 pb-5 parallax" id="preventid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>6 Steps Prevention Against Coronavirus</h1> 
	</div>
    <div class="container">

    	<div class="row">
    		<div class="col-lg-4 col-md-4 col-12 mt-5">
    			<div class="row">
    				<div class="col-lg-4 col-md-4 col-12">
    					<figure class="text-center">		
		<img src="images/water.png" class="img-fluid" width="90" height="90">
		</figure>
    				</div>
    				<div class="col-lg-8 col-md-8 col-12">
    					<p>Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub</p></div>
    			</div>
    		</div>

    		<div class="col-lg-4 col-md-4 col-12 mt-5">
    			<div class="row">
    				<div class="col-lg-4 col-md-4 col-12">
    					<figure class="text-center">		
		<img src="images/mask.png" class="img-fluid" width="90" height="90">
		</figure>
    				</div>
    				<div class="col-lg-8 col-md-8 col-12">
    					<p>Cover your nose and mouth with a disposable tissue or fiexed elbow when you cough or sneeze </p></div>
    			</div>

            </div>

           <div class="col-lg-4 col-md-4 col-12 mt-5">
    			<div class="row">
    				<div class="col-lg-4 col-md-4 col-12">
    					<figure class="text-center">		
		<img src="images/distance.png" class="img-fluid" width="90" height="90">
		</figure>
    				</div>
    				<div class="col-lg-8 col-md-8 col-12">
    					<p>Avoid close contact (1 meter or 3 feet) with people who are unwell</p></div>
    			</div>
    		</div>

    	<div class="col-lg-4 col-md-4 col-12 mt-5">
    			<div class="row">
    				<div class="col-lg-4 col-md-4 col-12">
    					<figure class="text-center">		
		<img src="images/house.png" class="img-fluid" width="90" height="90">
		</figure>
    				</div>
    				<div class="col-lg-8 col-md-8 col-12">
    					<p>Stay home and self-isolate from others in the household if you feel unwell</p></div>
    			</div>
    		</div>	

          <div class="col-lg-4 col-md-4 col-12 mt-5">
    			<div class="row">
    				<div class="col-lg-4 col-md-4 col-12">
    					<figure class="text-center">		
		<img src="images/news.png" class="img-fluid" width="90" height="90">
		</figure>
    				</div>
    				<div class="col-lg-8 col-md-8 col-12">
    					<p>Stay informed by watching news & follow the recommended practices</p></div>
    			</div>
    		</div>

<div class="col-lg-4 col-md-4 col-12 mt-5">
    			<div class="row">
    				<div class="col-lg-4 col-md-4 col-12">
    					<figure class="text-center">		
		<img src="images/help.png" class="img-fluid" width="90" height="90">
		</figure>
    				</div>
    				<div class="col-lg-8 col-md-8 col-12">
    					<p>If you have fever, cough and difficulty breathing, seek medical care early</p></div>
    			</div>
    		</div>

    	</div>
    </div>

</div>


<!-- Contact Us ASAP -->
<div class="'container-fluid  pt-5 pb-5" id="contactid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Contact Us </h1>
		<p>In case of emergency, if you find any corona patients please fill the form & we will reach out for you.
		</div>

  <div class="container">
  	<div class="row">
  		<div class="col-lg-8 offset-lg-2 col-12">

  		<form action="" method="POST">

  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required> 
  </div>
  
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
  </div>

  <div class="form-group">
    <label>Mobile</label>
    <input type="number"  class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required> 
  </div>

  <div class="form-group">
  	<label>Symptoms</label>
  	<input type="Text"  class="form-control" name="symptoms" placeholder="symptoms" autocomplete="off" required>
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Describe here</label>
    <textarea class="form-control" name="messages" rows="3"></textarea>
  </div> 
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  		</div>
  	</div>
  </div>

</div>
</div>
<!-- //////up btn///// -->
<div class="container scrollTop float-right pt-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>



<!-- /////footer//// -->
<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <div class= "row">
    	<div class="col-lg-4 col-md-4 col-12 mt-5 segment-two">
		<h2>Luminous heads</h2>
		<p>We are just young sailors in the the IT industry. We work on mini projects and would love to take any oportunity.<p>
		<ul class="segment-two">
						<li>Abhinav Dubey [Full Stack Developer]</li>
						<li>Raghav Shukla [Python Developer]</li>
						<li>Rubal Agrawal [Python Developer]</li>
		</ul>
		</div>

		<div class="col-lg-4 col-md-4 col-12 mt-5 ">
			<h2>Follow</h2>
					<p>Please follow my social media profile in order to keep updated.</p>
		
			<a href="https://www.linkedin.com/in/abhinav-dubey-26823316a/" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
			<a href="https://github.com/abhinavdubeyad9" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Github"><i class="fa fa-github"></i></a>
			<a href="https://codepen.io/abhinavdubeyad9" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Codepen"><i class="fa fa-codepen"></i></a>
			<a href="https://www.instagram.com/abhinav_ad9/" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
		</div>

		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<h2>Subscribe Us</h2>
			<p>To get the latest update of our upcoming project</p>
		  <div id="box2" class="tbox">
            <div id="form_box">
            <form id="subscribe_form" action="subscribe" method="post">
        
                <input class="tbox" id="subscribe_email" type="text" name="email" value="email address" />
                <input class="tbox" id="subscribe_submit" type="submit" value="Subscribe" />
            </form>
            </div>
        </div>
    </div>
  
   <div class="footer_style text-white text-center container-fluid">
   	<br>
    <h1 style="color: #999;">All Right reserved by &copy; Abhinav Dubey[LuminouHeads]</h1>
    </div>
</footer>

<script type="text/javascript">
	$('.count').counterUp({
		delay:10,
		time: 3000
	})
 
	
 mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};
function scrollFunction(){
	if(document.body.scrollTop >100 || document.documentElement.scrollTop > 100 ){
		mybutton.style.display = "block";
	}else{
		mybutton.style.display = "none";
	}
}

function topFunction(){
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}

function indfun(){
	window.location.href = "indiacorona.php";
}

function wfun(){
	window.location.href = "corona.php";
}

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});

</script>

</body>
</html>

<?php
include 'dbcon.php';

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$symptoms = $_POST['symptoms'];
	$messages = $_POST['messages'];
	


$insertquery = " insert into coronacase(username,email,Mobile,symptoms,message,submail) value('$username', '$email', '$mobile','$symptoms', '$messages' )";

$query = mysqli_query($con, $insertquery);

if($con){
	?>
	<script>
		alert("Submited successfully")
		window.location.href = "index.php";
	</script>
	<?php
}else{
	?>
	<script>
		alert("Fail to submit")
	</script>
	<?php
}  

}
?>
