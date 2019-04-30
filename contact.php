
<!--start of contact page -->
<html lang="en">

    <!-- Google Analytics CREATED 02/19-->
    <!-- login - helenamcelhatton@gmail.com password- goldfish123--!>
    <!-- This script tracks page views using a Google Analytics Tracking code, to keep track of these analaytics, i can log on to the google analytics website and see how many views the page has and what the most popular times the page is used etc-->
    
    <head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133714586-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

		gtag('config', 'UA-133714586-1');
	</script>

   <!--  Analaytics end -->
 
   							 <!-- Sets the name of the page, appears on search engines and browser tabs  -->
    						<title>Click Wardrobe</title>
    						<!-- Specifies the character encoding for the HTML document, "vw" ensures that the text size will follow the size of the browser window -->
    						<meta charset="UTF-8vw">
    						<!-- Sets the description, usually only shown on search engines -->
   							 <meta name="description" content="Homepage">
   							 <!-- Keywords that search engines will pick up and prioritise  -->
   							 <meta name="keywords" content=",online, shop, clothes, women, men, University,of,Gloucestershire">
   							 <!-- Defining the Author of the page-->
   							 <meta name="author" content="CT6039-Helena McElhatton">
							<!--favicon will be displayed on the tab of the page- created on "favicon.cc"-->
							<link rel="icon" href="images/favicon.png" type="favicon" sizes="16x16">
   							 <!--This line makes sure that the screen resizes its contents according to its size -->
							<meta name="viewport" content="width=device-width, initial-scale=1" />
							

                           	<!--Font Import-->
							<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css">
							<!--font import-->
    						<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />
								
   							 <!-- Imports the Javascript for the Google translate element -->
    						<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


    <!-- Stylesheets for website-->
	<!--need to fix this-->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style.css" />
	<!-- font awesome is a website that creates icons, these icons are used for facebook, contact, majority of the icons only work on google chrome, this was used to create cross browser inconsistencies-->	
	<link href="css/font-awesome.css" rel="stylesheet"> 
	

</head>
<!--end of head section-->

<!--start of body-->
<body>
	
	
    <!-- Wrapper to contain all content within bounds of viewport -->
    <div class="wrapper">
        <!--Including JS Function -->
        <div id="google_translate_element"></div>

        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en',
                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                }, 'google_translate_element');
            }
        </script>
        
<!--the header will contain the initial navigation bar contained at the top of the page-->
<!--start of navigation section, two navigation bars were created for the purpose of layout and ease of use-->
<!--the initial nav bar is placed within a container-->
<div class="header" id="home">
	<div class="container">
		<ul>
		    <li><a href="../login/Login.html"><img src="images/login.png" width="23" height="23" alt=""/>Sign in</a></li>
			<li><a href="/RegistrationPage/Registration.html"><img src="images/register.png" width="23" height="23" alt=""/>Register</a></li>
			<li><a href="contact.php"><img src="images/contact.png" width="23" height="23" alt=""/>Contact</a></li>
			<li><a href="basket.html"><img src="images/shopping-basket.png" width="23" height="23" alt=""/>Basket</a></li>
			</ul>
		</div>
	</div>
	
		<!-- header-containing the title and logo-->
		<div data-role="header">
		<img src="logo.jpg" style="width: 25%"  alt="Click Wardrobe Logo">
		</div>
		
        <!-- title end -->
		
			<!--the clearfix element is used throughout the site, it helps support with versions of Internet explorer, flexbox has limited browser support -->
			<div class="flexbox"></div>	
	
</div>
<!--end of Header Section-->	
	
<!-- banner- the banner will contain the main navigation bar for viewers to view clothes and purchase etc-->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<!--uses bootstrap CSS to ensure the website works on mobile CSS -->
				<div class="collapse navbar-collapse menu--shylock" id="navBar_Collapse">
				  <ul class="nav navbar-nav menu__list">
					  
					  
					  <!--home is the current choice on the navigation bar this will appear underlined or highlighted to the user-->
					<li class="active menu__item menu__item--current"><a class="menu__link" href="index.html">Home <span class="sr-only">(current)</span></a></li>
					  
					  
					<!-- the first drop down menu is mens-->
					 <!-- drop down menu idea taken from w3 schools https://www.w3schools.com/bootstrap4/bootstrap_dropdowns.asp -->
					  
					 <!--there are 4 drop down menus in this site for mens, womens , sale and living ad gifts each menu has the same layout and attributes-->
					  
					<li class="dropdown menu__item">
					<!-- aria expanded attribute sows that th element can be expanded if it were false the dorpdown men would not expand-->
					<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Men's
					<!--the carret class creates an arrow icon which shosa the user there is a drop down-->
					<span class="caret"></span></a>
						
							<!--the drop down menu has 3 columns , the first with a picture, the other 2 with cateogories-->
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="images/man-front-menu.jpg" alt="image of a man "/></a>
									</div>
									<!--second column-->
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="mens.html">New in</a></li>
											<li><a href="mens.html">Accessories</a></li>
											<li><a href="mens.html">Activewear</a></li>
											<li><a href="mens.html">Jackets & Coats</a></li>
											<li><a href="mens.html">Jeans</a></li>
											<li><a href="mens.html">Polo Shirts</a></li>
											<li><a href="mens.html">Shirts</a></li>
										</ul>
									</div>
									
									<!--third column-->
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="mens.html">Shorts</a></li>
											<li><a href="mens.html">Socks</a></li>
											<li><a href="mens.html">Suits</a></li>
											<li><a href="mens.html">Swimwear</a></li>
											<li><a href="mens.html">T-Shirts</a></li>
											<li><a href="mens.html">Trousers & Chinos</a></li>
											<li><a href="mens.html">Footwear</a></li>
											
										</ul>
									</div>
									
									<div class="clearfix"></div>
								</div>
							</ul>
					</li> <!--end of class mens drop down menu-->
					  
					 
					  <!--start of womens drop down menu-->
					  <!-- has the same layout as mens-->
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Women's <span class="caret"></span></a>
						
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">New in</a></li>
											<li><a href="womens.html">Active Wear</a></li>
											<li><a href="womens.html">Accessories</a></li>
											<li><a href="womens.html">Dresses</a></li>
											<li><a href="womens.html">Hoodies & Sweatshirts</a></li>
											<li><a href="womens.html">Jackets & Coats</a></li>
											<li><a href="womens.html">Jeans</a></li>
											<li><a href="womens.html">Loungewear</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">Shirts</a></li>
											<li><a href="womens.html">Shorts</a></li>
											<li><a href="womens.html">Socks & Tights</a></li>
											<li><a href="womens.html">Suits & Separates</a></li>
											<li><a href="womens.html">Swim & Beachwear</a></li>
											<li><a href="womens.html">Tops</a></li>
											<li><a href="womens.html">Trousers & Leggings</a>
											</li>
											<li><a href="womens.html">
												Footwear</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="images/women-front-menu.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					  
					  <li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sale<span class="caret"></span></a>
						
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="sale.html"><img src="images/sale-front-menu.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="sale.html">Men's</a></li>
											<li><a href="sale.html">Women's</a></li>
											<li><a href="sale.html">Living & Gifts</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
				  
					
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Living & Gifts<span class="caret"></span></a>
						
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="living.html"><img src="images/gifts-front-menu.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="living.html">View all</a></li>
											<li><a href="living.html">Books</a></li>
											<li><a href="living.html">Cards</a></li>
											<li><a href="living.html">Face & Body Gifts</a></li>
											<li><a href="living.html">Gift Wrap</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="living.html">Gift Vouchers</a></li>
											<li><a href="living.html">Gifts for Her</a></li>
											<li><a href="living.html">Gift for Him</a></li>
											<li><a href="living.html">Gift Vouchers</a></li>
											<li><a href="living.html">Jewellery & Watches</a></li>
											<li><a href="living.html">Stationary</a></li>
											
										</ul>
									</div>
									
									
									
									<div class="clearfix"></div>
								</div> <!-- end of living and gifts menu-->
							</ul> <!-- end of living and gifts-->
					</li><!--end of drop down-->
					 </ul><!--end of nav bar list-->
				</div><!-- end of collapsable nav bar-->	
					
		</div> <!-- end of container -->
	</div><!--end of ban top-->
		
<!--end of nav bar-->
	
	
<!--contact-->
	<div class="banner_bottom_agile_info">
	    <div class="container">
		  <div class="contact-grid-agile-w3">
				<div class="col-md-4 contact-grid-agile">
						<div class="contact-grid-agile-1 ">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<h4>Address</h4>
							<p>123 Street <span>Dublin, Ireland.</span></p>
						</div>
					</div>
			  
					<div class="col-md-4 contact-grid-agile">
						<div class="contact-grid-agile-2">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<h4>Call Us</h4>
							<p>(028) 86768759<span>(+44)774512875</span></p>
						</div>
					</div>
					<div class="col-md-4 contact-grid-agile">
						<div class="contact-grid-agile-3">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<h4>Email</h4>
							<p><a href="mailto:info@example.com">clickwardrobe@email.com</a><span><a href="mailto:info@example.com">customerservices@email.com</a></span></p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
	   </div>
	 </div>
	  <!--Links to my glos javascript page which contains details on maps and navigation buttons-->
<!--<script src="map.js"></script>-->



<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(53.344758, -6.281106),
  zoom:13,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA3-7zw7JnIVdhrWrPEpSTzdrKknsNwbY&callback=myMap"></script>
	   </div>
	
    <div class="banner_bottom_agile_info">
	<div class="container">
	  
	
<!-- PHP Send Email form-->
					<!-- This form uses PHP to send and email using a gmail account, all queries will be sent to helenamcelhatton@gmail.com. -->
                   <div class="col-md-6 contact-form">
						<h4 class="white-font">Contact <span>Form</span></h4>
                                    <p>Please Contact me with any Queries!</p>
                                
                                <!--head END-->
                                <!-- Feedback Form -->
                                <form action="#" id="form" method="post" name="form">
                                    <input name="vname" placeholder="Your Name" type="text" value=""><!-- Where the user types their name -->
                                    <input name="vemail" placeholder="Your Email" type="text" value=""><!-- Where the user types their Email Address -->
                                    <input name="sub" placeholder="Subject" type="text" value=""><!-- Where the user types their Email Subject -->
						           <input name="sub" placeholder="Mobile Number" type="text" value=""><!--the user should enter their mobile number here-->
                                    <label>Your Suggestion/Question</label>
                                    <textarea name="msg" placeholder="Type your text here..."></textarea> <!-- Where the user types their Email Message -->
                                    <input id="send" name="submit" type="submit" value="Send Feedback" class="button"><!-- Where the user submits the email -->
                                </form>
					   			</div>
								<!--PHP to require another PHP file that will gather the data input into the form fields,store the data in variables.--!>
                                <h3>
</h3>
                            </div>
                            <!--feedback END-->

                        
                        <div class="clearfix"><!--container END-->
                    </div>
                    <!--rightCol END -->
	<div class="clearfix"> </div>
                </div>
	</div>
	
		
	
		   
		   <!--footer Begin-->
<div class="footer">
	<div class="footer_info">
		<div class="col-md-3 footer-left">
			<h2><a href="index.html"><span>Click</span>Wardrobe </a></h2>
			<!--social interactive buttons-->
			<ul class="social-nav model-3d-0 footer-social agile_social two">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
											
														</ul>
		</div> <!--END COLUMN FOOTER LEFT-->
		
		
		<div class="col-md-9 footer-right">
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4><span>Information</span> </h4>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="mens.html">Men's </a></li>
						<li><a href="womens.html">Women's</a></li>
						<li><a href="living.html">Living & Gifts</a></li>
						<li><a href="sale.html">Sale</a></li>
						<li><a href="../login/Login.html">Login</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				
				<div class="col-md-5 sign-gd-two">
					<h4>Store <span>Information</span></h4>
					<div class="address">
						<div class="address-grid">
							<div class="address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="address-right">
								<h6>Phone Number</h6>
								<p>(028) 86754567</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="address-grid">
							<div class="address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="address-right">
								<h6>Email Address</h6>
								<p>Email :<a href="mailto:clickwardrobe@email.com"> clickwardrobe@email.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="address-grid">
							<div class="address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="address-right">
								<h6>Location</h6>
								<p>123 street, Dublin, Ireland.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="clearfix"></div>
		
		
			<div class="agile_newsletter_footer">
					<div class="col-sm-6 newsleft">
				<h3>SIGN UP FOR  OUR NEWSLETTER !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form action="#" method="post">
					<input type="email" placeholder="Enter your email..." name="email" required="">
					<input type="submit" value="Submit">
				</form>
			</div> <!-- END COLUMN TO THR RIGHT-->

		<div class="clearfix"></div>
	</div> <!--END NEWSLETTER FOOTER-->
		
	</div><!--footer class-->
</div><!-- //footer -->
		

</body>

