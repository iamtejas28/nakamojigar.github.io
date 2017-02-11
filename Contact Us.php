<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="bootstrap theme, bootstrap template, html5 theme">
    <meta name="description" content="Free Bootstrap template based on HTML5 and CSS3">
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet" href="./css/animate.css"/>
    <script src="./js/jquery-2.1.0.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/typer.js"></script>
    <script src="./js/blocs.js"></script>
	
    <link rel='stylesheet' href='./css/et-line.min.css'/>
    <link rel='stylesheet' href='./css/font-awesome.min.css'/>
    <link href='http://fonts.googleapis.com/css?family=Montserrat&subset=latin,latin-ext' rel='stylesheet'
          type='text/css'>

    <title>Compex</title>
</head>
<body>
<!-- Main container -->
<div class="page-container">

    <!-- Navigation Bloc -->
    <div class="bloc bgc-silver d-bloc" id="nav-bloc">
        <div class="container">
            <nav class="navbar row">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html"><img src = "LOGO.png"> <font  style="font-size: 35px;font-family:Lucida Sans ;    color: #fd9638; ">StarLight</font><font  style=" font-size: 25px;font-family: Calibri;"> Valuers</font></a>
                    <button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-1">
                    <ul class="site-navigation nav navbar-nav">
						<li>
                            <a  href="../compex/index.html#aboutus">About Us</a>
                        </li>
                        <li>
                            <a   href="../compex/index.html#services">Services</a>
                        </li>
                        <li>
                            <a  href="../compex/index.html#porfolio">Portfolio</a>
                        </li>
                        <li>
                            <a  href="../compex/index.html#team">Team</a>
                        </li>
                        <li>
                            <a  href="../compex/index.html#quote">Get a Quote</a>
                        </li>
                        <li>
                            <a  href="../compex/index.html#faq">FAQ</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navigation Bloc END -->
    <a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span
            class="fa fa-chevron-up"></span></a>
    <!-- ScrollToTop Button END-->

						

				
</div>

    <div class="bloc l-bloc bgc-white"   style="
    padding: 1px;
">
       
            <section id="hire">
                
                 
	<h3>GIVE US A SHOUT</h3>
 &nbsp;
     <?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>  
   <form  action="" method="POST" enctype="multipart/form-data">
	      <div class="field name-box">
		  <input type="hidden" name="action" value="submit">
		     <strong>   <input name="name" value="" size="30" type="text" id="name" placeholder="Who Are You?"/></strong>
        		<label for="name" style="font-size: small;color: aliceblue;">Name</label>
		        <span class="ss-icon">check</span>
	      </div>

	      <div class="field email-box">
		       <strong> <input name="email" value="" size="30" type="text" id="email" placeholder="name@email.com"/></strong>
		        <label for="email" style="font-size: small;color: aliceblue;">Email</label>
		        <span class="ss-icon">check</span>
	      </div>

	      <div class="field msg-box">
		       <strong> <textarea  name="message" cols="30" id="msg" rows="4" placeholder="Your message goes here..."/></textarea></strong>
		        <label for="msg" style="font-size: small;color: aliceblue;">Text</label>
		        <span class="ss-icon">check</span>
	      </div></br> </br>

	      <input class="button" type="submit" value="Send email" style="font-size: small;color: aliceblue;" />
  </form>
  <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		mail("sagravat23@gmail.com", $subject, $message, $from);
		echo "Email sent!";
	    }
    }  
?>


        
    
	 
	 	   </section>
		   <div class="bloc l-bloc bgc-white" id="services">
        <div class="container bloc-lg">
            <div class="row">
			 <div class="col-sm-4 mybox">
                    <div class="text-center">
                        <span class="fa fa-phone  icon-xl icon-carmine-pink animated zoomIn animDelay02"></span>
                    </div>
                    <h3 class="text-center mg-md ">
                        Phone
                    </h3>

                    <p class="text-center">
                        A little feature description could go here. A little feature description.
                    </p>
					<div class="text-center">
                        <span class="fa fa-envelope  icon-xl icon-carmine-pink animated zoomIn animDelay02"></span>
                    </div>
                    <h3 class="text-center mg-md ">
                        Email
                    </h3>
					<h4 class="text-center">
				    starlight_valuers@yahoo.com
				   </h4>
				   </div>
                <div class="col-sm-4 mybox" >
                    <div class="text-center">
                        <span class="fa fa-map-marker icon-xl icon-carmine-pink animated zoomIn animDelay02"></span>
                    </div>
                    <h2 class="text-center mg-md ">
                       Address
                    </h2>

					<h5 class="text-center icon-carmine-pink "><b>Regd. Office:</b><h5>
					
                   <h6 class="text-center">
				    Plot No.- 418, Ward No.- 5A, Opp. Rambaug Police Station, Adipur (Kutch) – 370205, Gujarat, India.
				   </h6>
				   <h5 class="text-center icon-carmine-pink "><b>Ahmedabad Office: </b><h5>
					
                   <h6 class="text-center">
				    : B-603 Dev Tranquil Appt., Opp. Sangath Neno, Bhat Gam Road, Koteshwar, A’bad – 380005.
				   </h6>
				   <h5 class="text-center icon-carmine-pink "><b>Rajkot Office: </b><h5>
					
                   <h6 class="text-center">
				    Shop No.-2, Yogi Darshan Appartment, Tagore Road, Rajkot – 360002, Gujarat, India.
				   </h6>
                </div>
               <div class="col-sm-4 mybox" >
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117449.81014999114!2d72.69757703495188!3d23.085870821684466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8174319761c3%3A0x8e04828b42eb2410!2sDev+Tranquil!5e0!3m2!1sen!2sin!4v1486810455402" width="335px" height="335px" frameborder="0" style="border:0" ></iframe>
                </div>
                </div>
               
            </div>
        </div>
    </div>
	   </div>
	    

    <!-- Footer - bloc-8 -->
    <div class="bloc bgc-platinum l-bloc" id="bloc-8">
        <div class="container bloc-sm">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="col-sm-3 text-center">
                        <a class="social-lg" href="http://www.twitter.com/BootstrapOcean" target="_blank"><span
                                class="fa fa-twitter icon-md icon-carmine-pink"></span></a>
                    </div>
                    <div class="col-sm-3 text-center">
                        <a class="social-lg" href="https://www.facebook.com/BootstrapOcean" target="_blank"><span
                                class="fa fa-facebook icon-md icon-carmine-pink"></span></a>
                    </div>
                    <div class="col-sm-3 text-center">
                        <a class="social-lg"
                           href="https://plus.google.com/b/116513433102470788789/116513433102470788789/posts"
                           target="_blank"><span class="fa fa-google-plus icon-md icon-carmine-pink"></span></a>
                    </div>
                    <div class="col-sm-3 text-center">
                        <a class="social-lg" href="#"><span class="fa fa-dribbble icon-md icon-carmine-pink"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

	 <div class="row">
	<h5> 
                <div class="col-xs-12 col-md-8 col-md-offset-2 text-center mg-md">Created by <a
                        href="http://www.sagaragravat.com" target="_blank">Sagar Agravat</a></div>
						</h5>
            </div>
	
	   </div>
	
	
   
    <!-- Footer - bloc-8 END -->

<!-- Main container END -->
</body>

<!-- Google Analytics -->

<!-- Google Analytics END -->

</html>