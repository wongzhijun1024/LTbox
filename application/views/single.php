
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<title>Single</title>
<link href="<?php echo base_url()?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url()?>js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?php echo base_url()?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='https://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="<?php echo base_url()?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>

<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});	  
});
</script>
</head>
<body>
  <!--header-->
	<div class="header">
		<div class="header-top">
			<div class="container">	
			<div class="header-top-in">			
				<div class="logo">
					<a href="home.php"><img src="<?php echo base_url()?>images/logo.png" alt=" " ></a>
				</div>
				<div class="header-in">
					<ul class="icon1 sub-icon1">
							<li  ><a href="wishlist.html">WISH LIST (0)</a> </li>
							<li  ><a href="account.html">  MY ACCOUNT</a></li>
							<li ><a href="#" > SHOPPING CART</a></li>
							<li > <a href="checkout.html" >CHECKOUT</a> </li>	
							<li><div class="cart">
									<a href="#" class="cart-in"> </a>
									<span> 0</span>
								</div>
								<ul class="sub-icon1 list">
						  <h3>Recently added items(2)</h3>
						  <div class="shopping_cart">
							  <div class="cart_box">
							   	 <div class="message">
							   	     <div class="alert-close"> </div> 
					                <div class="list_img"><img src="<?php echo base_url()?>images/14.jpg" class="img-responsive" alt=""></div>
								    <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
		                             $12.00</span></div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                            <div class="cart_box1">
								  <div class="message1">
							   	     <div class="alert-close1"> </div> 
					                <div class="list_img"><img src="<?php echo base_url()?>images/15.jpg" class="img-responsive" alt=""></div>
								    <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
		                             $12.00</span></div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                        </div>
	                        <div class="total">
	                        	<div class="total_left">CartSubtotal : </div>
	                        	<div class="total_right">$250.00</div>
	                        	<div class="clearfix"> </div>
	                        </div>
                            <div class="login_buttons">
							  <div class="check_button"><a href="checkout.html">Check out</a></div>
							  <div class="clearfix"></div>
						    </div>
					      <div class="clearfix"></div>
						</ul>
							</li>
						</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
		</div>
		<div class="header-bottom">
		<div class="container">
			<div class="h_menu4">
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
					<li class="active"><a href="home.php"><i> </i>Desktops</a></li>
					<li ><a href="#" >Laptops & Notebooks</a>
						<ul class="drop">
							<li><a href="products.php">Sony(2)</a></li>
							<li><a href="products.php">Android(4)</a></li>
							<li><a href="products.php">Apple(7)</a></li>
							<li><a href="products.php">Acer(53)</a></li>
							<li><a href="products.php">HP(78)</a></li>
							<li><a href="products.php">Intel(5)</a></li>
						</ul>
						</li> 						
						<li><a href="products.php" >  Tablets</a></li>
						<li><a href="products.php" >Components</a></li>
						<li><a href="products.php" >Software</a></li>
						<li><a href="products.php" >Phones & PDAs </a></li>
						<li><a href="products.php" >  Cameras  </a></li>
						<li><a href="contact.html" >Contact </a></li>
					
				</ul>
				<script type="text/javascript" src="<?php echo base_url()?>js/nav.js"></script>
			</div>
		</div>
		</div>
		<div class="header-bottom-in">
		<div class="container">
		<div class="header-bottom-on">
			<p class="wel"><a href="#">Welcome visitor you can login or create an account.</a></p>
			<div class="header-can">
				<ul class="social-in">
						<li><a href="#"><i> </i></a></li>
						<li><a href="#"><i class="facebook"> </i></a></li>
						<li><a href="#"><i class="twitter"> </i></a></li>					
						<li><a href="#"><i class="skype"> </i></a></li>
					</ul>	
					<div class="down-top">		
						  <select class="in-drop">
							  <option value="Dollars" class="in-of">Dollars</option>
							  <option value="Euro" class="in-of">Euro</option>
							  <option value="Yen" class="in-of">Yen</option>
							</select>
					 </div>
					<div class="search">
						<form>
							<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
							<input type="submit" value="">
						</form>
					</div>
					<div class="clearfix"> </div>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
		</div>
	</div>
	<!---->
		<div class="container">
			<div class="single">
				<div class="col-md-9 top-in-single">
					<div class="col-md-5 single-top">	
						<!-- start product_slider -->
				    <div class="flexslider">
							        <!-- FlexSlider -->
										<script src="<?php echo base_url()?>js/imagezoom.js"></script>
										  <script defer src="<?php echo base_url()?>js/jquery.flexslider.js"></script>
										<link rel="stylesheet" href="<?php echo base_url()?>css/flexslider.css" type="text/css" media="screen" />

										<script>
										// Can also be used with $(document).ready()
										$(window).load(function() {
										  $('.flexslider').flexslider({
											animation: "slide",
											controlNav: "thumbnails"
										  });
										});
										</script>
									<!-- //FlexSlider-->

							  <ul class="slides">
								<li data-thumb="<?php echo base_url()?>images/si1.jpg">
									<div class="thumb-image"> <img src="<?php echo base_url()?>images/si1.jpg" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<li data-thumb="images/si2.jpg">
									 <div class="thumb-image"> <img src="<?php echo base_url()?>images/si2.jpg" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<li data-thumb="images/si.jpg">
								   <div class="thumb-image"> <img src="<?php echo base_url()?>images/si.jpg" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<li data-thumb="images/si1.jpg">
								   <div class="thumb-image"> <img src="<?php echo base_url()?>images/si1.jpg" data-imagezoom="true" class="img-responsive"> </div>
								</li>
							  </ul>
							<div class="clearfix"></div>
					</div>
				<!-- end product_slider -->

					</div>	
					<div class="col-md-7 single-top-in">
						<div class="single-para">
							<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
							<div class="para-grid">
								<span  class="add-to">$32.8</span>
								<a href="#" class="hvr-shutter-in-vertical cart-to">Add to Cart</a>					
								<div class="clearfix"></div>
							 </div>
							<h5>100 items in stock</h5>
							<div class="available">
								<h6>Available Options :</h6>
								<ul>
									<li>Color:
										<select>
										<option>Silver</option>
										<option>Black</option>
										<option>Dark Black</option>
										<option>Red</option>
									</select></li>
								<li>Size:<select>
									<option>Large</option>
									<option>Medium</option>
									<option>small</option>
									<option>Large</option>
									<option>small</option>
								</select></li>
								<li>Quality:<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select></li>
							</ul>
						</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							
								<a href="#" class="hvr-shutter-in-vertical ">More details</a>
							
						</div>
					</div>
				<div class="clearfix"> </div>
				<div class="content-top-in">
						<div class="col-md-4 top-single">
							<div class="col-md">
								<img  src="<?php echo base_url()?>images/pic8.jpg" alt="" />
								<div class="top-content">
									<h5>Mascot Kitty - White</h5>
									<div class="white">
										<a href="#" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
										<p class="dollar"><span class="in-dollar">$</span><span>2</span><span>0</span></p>
										<div class="clearfix"></div>
									</div>
								</div>							
							</div>
						</div>
						<div class="col-md-4 top-single">
							<div class="col-md">
								<img  src="<?php echo base_url()?>images/pic9.jpg" alt="" />
								<div class="top-content">
									<h5>Mascot Kitty - White</h5>
									<div class="white">
										<a href="#" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
										<p class="dollar"><span class="in-dollar">$</span><span>2</span><span>0</span></p>
										<div class="clearfix"></div>
									</div>
								</div>							
							</div>
						</div>
						<div class="col-md-4 top-single-in">
							<div class="col-md">
								<img  src="<?php echo base_url()?>images/pic10.jpg" alt="" />
								<div class="top-content">
									<h5>Mascot Kitty - White</h5>
									<div class="white">
										<a href="#" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
										<p class="dollar"><span class="in-dollar">$</span><span>2</span><span>0</span></p>
										<div class="clearfix"></div>
									</div>
								</div>							
							</div>
						</div>
						
					<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-bottom">
						<h4>Categories</h4>
						<ul>
						<li><a href="#"><i> </i>Fusce feugiat</a></li>
						<li><a href="#"><i> </i>Mascot Kitty</a></li>
						<li><a href="#"><i> </i>Fusce feugiat</a></li>
						<li><a href="#"><i> </i>Mascot Kitty</a></li>
						<li><a href="#"><i> </i>Fusce feugiat</a></li>
						</ul>
					</div>
					<div class="single-bottom">
						<h4>Product Categories</h4>
						<ul>
						<li><a href="#"><i> </i>feugiat(5)</a></li>
						<li><a href="#"><i> </i>Fusce (4)</a></li>
						<li><a href="#"><i> </i> feugiat (4)</a></li>
						<li><a href="#"><i> </i>Fusce (4)</a></li>
						<li><a href="#"><i> </i> feugiat(2)</a></li>
						</ul>
					</div>
					<div class="single-bottom">
						<h4>Product Categories</h4>
							<div class="product">
								<img class="img-responsive fashion" src="<?php echo base_url()?>images/st1.jpg" alt="">
							<div class="grid-product">
								<a href="#" class="elit">Consectetuer adipiscing elit</a>
								<span class="price price-in"><small>$500.00</small> $400.00</span>
							</div>
							<div class="clearfix"> </div>
							</div>
							<div class="product">
								<img class="img-responsive fashion" src="<?php echo base_url()?>images/st2.jpg" alt="">
							<div class="grid-product">
								<a href="#" class="elit">Consectetuer adipiscing elit</a>
								<span class="price price-in"><small>$500.00</small> $400.00</span>
							</div>
							<div class="clearfix"> </div>
							</div>
							<div class="product">
								<img class="img-responsive fashion" src="<?php echo base_url()?>images/st3.jpg" alt="">
							<div class="grid-product">
								<a href="#" class="elit">Consectetuer adipiscing elit</a>
								<span class="price price-in"><small>$500.00</small> $400.00</span>
							</div>
							<div class="clearfix"> </div>
							</div>
				</div>
				</div>
				<div class="clearfix"> </div>
		</div>
	</div>
		<!---->
		<div class="footer">
			<div class="footer-top">
				<div class="container">
					<div class="col-md-4 footer-in">
						<h4><i> </i>Suspendisse sed</h4>
						<p>Aliquam dignissim porttitor tortor non fermentum. Curabitur in magna lectus. Duis sed eros diam. Lorem ipsum dolor sit amet, consectetur.</p>
					</div>
					<div class="col-md-4 footer-in">
						<h4><i class="cross"> </i>Suspendisse sed</h4>
						<p>Aliquam dignissim porttitor tortor non fermentum. Curabitur in magna lectus. Duis sed eros diam. Lorem ipsum dolor sit amet, consectetur.</p>
					</div>
					<div class="col-md-4 footer-in">
						<h4><i class="down"> </i>Suspendisse sed</h4>
						<p>Aliquam dignissim porttitor tortor non fermentum. Curabitur in magna lectus. Duis sed eros diam. Lorem ipsum dolor sit amet, consectetur.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!---->
			<div class="footer-middle">
				<div class="container">
					<div class="footer-middle-in">
						<h6>About us</h6>
						<p>Suspendisse sed accumsan risus. Curabitur rhoncus, elit vel tincidunt elementum, nunc urna tristique nisi, in interdum libero magna tristique ante. adipiscing varius. Vestibulum dolor lorem.</p>
					</div>
					<div class="footer-middle-in">
						<h6>Information</h6>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Delivery Information</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms & Conditions</a></li>
						</ul>
					</div>
					<div class="footer-middle-in">
						<h6>Customer Service</h6>
						<ul>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="#">Returns</a></li>
							<li><a href="#">Site Map</a></li>
						</ul>
					</div>
					<div class="footer-middle-in">
						<h6>My Account</h6>
						<ul>
							<li><a href="account.html">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="wishlist.html">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="footer-middle-in">
						<h6>Extras</h6>
						<ul>
							<li><a href="#">Brands</a></li>
							<li><a href="#">Gift Vouchers</a></li>
							<li><a href="#">Affiliates</a></li>
							<li><a href="#">Specials</a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<p class="footer-class">Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
			<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

		</div>
</body>
</html>