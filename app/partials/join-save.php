<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$clientEmail = strip_tags(trim($_POST["clientEmail"]));
		$clientEmail = str_replace(array("\r","\n"),array(" "," "),$clientEmail);
		
        $clientName = strip_tags(trim($_POST["clientName"]));
		$name = str_replace(array("\r","\n"),array(" "," "),$clientName);
        $petName = strip_tags(trim($_POST["petName"]));
		$petName = str_replace(array("\r","\n"),array(" "," "),$petName);


        $petType = strip_tags(trim($_POST["petType"]));
		$petType = str_replace(array("\r","\n"),array(" "," "),$petType);


  $petAgeYear = strip_tags(trim($_POST["petAgeYear"]));
		$petAgeYear = str_replace(array("\r","\n"),array(" "," "),$petAgeYear);


  $petAgeMonth = strip_tags(trim($_POST["petAgeMonth"]));
		$petAgeMonth = str_replace(array("\r","\n"),array(" "," "),$petAgeMonth);


  $clientLastName = strip_tags(trim($_POST["clientLastName"]));
		$clientLastName = str_replace(array("\r","\n"),array(" "," "),$clientLastName);

  $phone = strip_tags(trim($_POST["phone"]));
		$phone = str_replace(array("\r","\n"),array(" "," "),$phone);


  $pedigreeDog = strip_tags(trim($_POST["pedigreeDog"]));
		$pedigreeDog = str_replace(array("\r","\n"),array(" "," "),$pedigreeDog);


  $pedigreeCat= strip_tags(trim($_POST["pedigreeCat"]));
		$pedigreeCat = str_replace(array("\r","\n"),array(" "," "),$pedigreeCat);



        /*$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);*/
        $message = trim($_POST["content"]);

        // Check that data was sent to the mailer.

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "klein.itzik@gmail.com";

        // Set the email subject.
        $subject = "New Price Quote from $clientName";

        // Build the email content.
        $email_content = "client Name: $clientName\n";
        $email_content .= "client LastName: $clientLastName\n";
        $email_content .= "pet Type: $petType\n";
        $email_content .= "pet Name: $petName\n";

        $email_content .= "pet Age Year: $petAgeYear\n";
        $email_content .= "pet Age Month: $petAgeMonth\n";
        $email_content .= "client Email: $clientEmail\n";
        $email_content .= "phone: $phone\n";
        $email_content .= "pedigree Dog: $pedigreeDog\n";
        $email_content .= "pedigree Cat: $pedigreeCat\n";

        // Build the email headers.
        $email_headers = "From: Marpet Server <info@marpet.co.il>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            // echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! <BR>ישנה שגיאה<BR>";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.<BR>ישנה שגיאה<BR>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head> 


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>מרפאט - שירותי בריאות לחיות מחמד - צור קשר</title>
	 
	<link href="css/bootstrap.css" rel="stylesheet">	 
    <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
	<link href="css/main.css" rel="stylesheet">
	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <script src="js/respond.min.js"></script>
	<![endif]-->
 
	<link rel="shortcut icon" href="images/favicon.png">
	<script src="js/pace.js"></script>
</head>

<body>
	<header>
    	<div class="header-top">
            <div class="container">
        		<div class="row">
	                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
						<div class="text-left">
                            <span class="link-callus">חייג אלינו:</span>                           
                            <span class="callus-phone">073-240-9505</span>
                        </div>    
                     </div>
                	 <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
<ul class="top-links list-inline">
	                        <li class="link-customerLogin"
							><a href="Login.html">כניסת לקוחות</a></li>
                            <li class="link-veterinarian"><a href="Login-Veterinarians.html">כניסת וטרינר</a></li>                        	
                            <li class="link-contactus"><a href="contact-us.html">צור קשר</a></li>
                        </ul>

                     </div>					 
                </div>
            </div>    
        </div>
        
        	<div class="header-middle">
	        	<div class="container">
                	<div class="header-logo clearfix">
                        <div class="logo col-lg-2 col-md-2 col-sm-2 col-xs-3 no-gutters">
                            <a href='index.html'><img 
							id="logo" src="images/logo.png"  class="img-responsive" alt="cat insurance" >
							</a>
                        </div>
                        <div class="logocat col-lg-10 col-md-10 col-sm-10 col-xs-9 no-gutters" style="padding: 0 !important;">
                            <img src="images/logocat.jpg" class="img-responsive" alt="cat insurance" >
                        </div>
                      </div>  
                	<nav class="navbar navbar-default navbar-menu" role="navigation">
                    	<div class="container-fluid no-gutters">
                        	<div class="navbar-header no-gutters">
                                <a href="Request-Quote.html" class="get-quote"><span>קבל הצעת מחיר</span></a>                            
                            	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                             	</button>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
                                <li><a href="index.html" class="home"><span class="navlabel">דף הבית</span></a></li>
                                <li class="dropdown">
                                	<a href="about-us.html" 
onclick='menuGo("about-us.html")'
class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    	<span class="navlabel">&nbsp;&nbsp;על השירות&nbsp;&nbsp;<span class="caret"></span></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href='about-us.html' class="service">על השירות</a></li>
                                        <li><a href="What-we-cover.html" class="solution">מה אנו מכסים</a></li>
                                        <li><a href="faq.html" class="solution">שאלות נפוצות</a></li>
                                    </ul>
                                </li>
		
                                <li class="dropdown">
                                	<a href="plans.html" 
onclick='menuGo("plans.html")'
class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    	<span class="navlabel">&nbsp;תכניות כיסוי&nbsp;<span class="caret"></span></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href='plans.html' class="solution">תוכניות כיסוי</a></li>
                                        <li><a href='Service-for-the-dog.html' class="solution">השירות לכלב</a></li>
                                        <li><a href="Service-for-the-cat.html" class="solution">השירות לחתול</a></li>
                                    </ul>
                                </li>

                                <li><a href="for-Veterinarians.html" class="for-veterinarians last"><span class="navlabel">לוטרינרים</span></a></li>                            
                            </ul>
                            </div>                             
                       </div> 
                    </nav>
    			</div>	
    		</div>
    </header> 
        	<div class="banner-slider">
				<div class="container">
                    <div class="clearfix"></div>
                </div>    
            </div>
	<section>
    	<div class="container contact-page">
        	<div class="col-lg-6 col-md-6 no-gutters">
            	<p class="text40 text-blue text-bold">בקשה להצעת מחיר</p>
                <div id="form-messages"></div>
	<p class="text16 text-bold" style='font-size:18px'>

פרטיך התקבלו.
<BR>
<BR>
ניצור עימך קשר בהקדם, לצורך מתן הצעת מחיר מותאמת ומשתלמת!
<BR><BR>
תודה.
</p>
            </div>     
        	<div class="col-lg-6 col-md-6 no-gutters">
            	<img src="images/cat8.jpg" class="img-responsive contactus-img-cat">
            </div>                                   
        </div>
	</section>
    
  <footer>
    	<div class="footer">        	
            <div class="container">
            	<div class="footer-top clearfix">
                	<div class="col-md-4 col-md-4 col-sm-4 col-xs-6 footer-logo">
	                    <img src="images/footer_icon.png" class="img-responsive">
                    </div>                	
                </div>
            	<div class="col-lg-3 col-md-4 col-sm-5 col-xs-6">
                        <ul>
                            <li><a href="about-us.html">על השירות</a></li>
                            <li><a href="What-we-cover.html">מה אנו מכסים</a></li>
							<li><a href="plans.html">תוכניות</a></li>
							<li><a href="Service-for-the-dog.html">השירות לכלב</a></li>
							<li><a href="Service-for-the-cat.html">השירות לחתול</a></li>
                        </ul>
                    </div>                
                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-6">
                        <ul>						
                            <li><a href="terms-and-conditions.html">תנאים והגבלות</a></li>
                            <li><a href="faq.html">שאלות נפוצות</a></li>
                            <li><a href="for-Veterinarians.html">וטרינרים</a></li>
							<li><a href="contact-us.html">צור קשר</a></li>
                        </ul>
                    </div>                       
               <div class="footer-bottom clearfix">
               	<p class="">2014 © מרפאט שירותי בריאות לחיות</p>
               </div>
            </div>
        </div>
    </footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/easing.js"></script>
<script src="js/nicescroll.js"></script>
 
 
<script>
 $(function() {
    $('.scrollto, .gototop').bind('click',function(event){
		 var $anchor = $(this);
		 $('html, body').stop().animate({
         scrollTop: $($anchor.attr('href')).offset().top
          }, 1500,'easeInOutExpo');
     event.preventDefault();
      });
	  $('.dropdown-menu').hover(function(){
		$(this).prev('.dropdown-toggle').addClass('hover');
  		},function() {
    	$(this).prev('.dropdown-toggle').removeClass( "hover" );
	});
});         
</script>
 
</body>
</html>
