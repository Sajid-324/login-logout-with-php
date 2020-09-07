<?php
session_start();

	if (!isset($_SESSION['User'])) {
			die('Please click <a href="logout.php?logout">here</a> to login');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>About</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Cabin_400.font.js"></script>
<script type="text/javascript" src="js/tabs.js"></script> 
<script type="text/javascript" src="js/jquery.jqtransform.js" ></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>
<body id="page1">
<div class="main">
<!--header -->
	<header>
		<div class="wrapper">
			<h1><a href="home.php" id="logo">Air lines</a></h1>
			<span id="slogan">Fast, Frequent &amp; Safe Flights</span>
			<nav id="top_nav">
				<ul>
					<li><a href="home.php" class="nav1">Home</a></li>
					<li><a href="contacts.php" class="nav3">Contact</a></li>
					<li><a href="logout.php?logout" class="nav2">Log out</a></li>
				</ul>
			</nav>
		</div>
		<nav>
			<ul id="menu">
				<li id="menu_active"><a href="home.php"><span><span>About</span></span></a></li>
				<li><a href="book.php"><span><span>Book</span></span></a></li>
				<li class="end"><a href="contacts.php"><span><span>Contacts</span></span></a></li>
			</ul>
		</nav>
	</header>
<!-- / header -->
<!--content -->
	<section id="content">
		<div class="for_banners">
			<article class="col1">
						<div class="tabs">
							<ul class="nav">
								<li class="selected"><a href="#Flight">Flight</a></li>
								<li><a href="#Hotel">Hotel</a></li>
								<li class="end"><a href="#Rental">Rental</a></li>
							</ul>
							<div class="content">
								<div class="tab-content" id="Flight">
									<form id="form_1" method="post">
										<div>
											<div class="radio">
												<div class="wrapper">
													 <input type="radio" name="name1" checked>
													 <span class="left">Standard</span>
													 <input type="radio" name="name1">
													 <span class="left">World Map</span>
												</div>
											</div>
											<div class="row">
												<span class="left">From</span>
												<input type="text" class="input">
											</div>
											<div class="row">
												<span class="left">To</span>
												<input type="text" class="input">
											</div>
											<div class="wrapper">
												<div class="col1">
													<div class="row">
														<span class="left">Outbound</span>
														<input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
													</div>
													<div class="row">
														<span class="left">Return</span>
														<input type="text" class="input1" value="10.05.2011"  onblur="if(this.value=='') this.value='10.05.2011'" onFocus="if(this.value =='10.05.2011' ) this.value=''">
													</div>
												</div>
												<input type="text" class="input1 marg_top1" value="+/- 0 Days"  onblur="if(this.value=='') this.value='+/- 0 Days'" onFocus="if(this.value =='+/- 0 Days' ) this.value=''">
											</div>
											<div class="row">
												<span class="left">Adults</span>
												<input type="text" class="input2" value="2"  onblur="if(this.value=='') this.value='2'" onFocus="if(this.value =='2' ) this.value=''">
											</div>
											<div class="row">
												<span class="left">Children</span>
												<input type="text" class="input2" value="0"  onblur="if(this.value=='') this.value='0'" onFocus="if(this.value =='0' ) this.value=''">
												<span class="pad_left1">(0-11 years)</span>
											</div>
											<div class="wrapper">
												<span class="right relative"><a href="#" class="button1" onClick="document.getElementById('form_1').submit()"><strong>Search</strong></a></span>
												<a href="#" class="link1">More Options</a>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-content" id="Hotel">
									<form id="form_2" method="post">
										<div>
											<div class="radio">
												<div class="wrapper">
													 <input type="checkbox" checked>
													 Our Partners
												</div>
											</div>
											<div class="row">
												<span class="left">Location</span>
												<input type="text" class="input">
											</div>
											<div class="row">
												<span class="left">Check-in  </span>
												<input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
												<a href="#" class="help"></a>
											</div>
											<div class="row">
												<span class="left">Check-out  </span>
												<input type="text" class="input1" value="10.05.2011"  onblur="if(this.value=='') this.value='10.05.2011'" onFocus="if(this.value =='10.05.2011' ) this.value=''">
												<a href="#" class="help"></a>
											</div>
											<div class="row">
												<span class="left">Rooms</span>
												<input type="text" class="input2" value="1"  onblur="if(this.value=='') this.value='1'" onFocus="if(this.value =='1' ) this.value=''">
												<a href="#" class="help"></a>
											</div>
											<div class="row">
												<span class="left">Adults</span>
												<input type="text" class="input2" value="2"  onblur="if(this.value=='') this.value='2'" onFocus="if(this.value =='2' ) this.value=''">
											</div>
											<div class="row">
												<span class="left">Children</span>
												<input type="text" class="input2" value="0"  onblur="if(this.value=='') this.value='0'" onFocus="if(this.value =='0' ) this.value=''">
												<span class="pad_left1">(0-11 years)</span>
											</div>
											<div class="wrapper">
												<span class="right relative"><a href="#" class="button1" onClick="document.getElementById('form_2').submit()"><strong>Search</strong></a></span>
												<a href="#" class="link1">More Options</a>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-content" id="Rental">
									<form id="form_3" method="post">
										<div>
											<div class="radio">
												<div class="wrapper">
													 <input type="radio" name="name2" checked>
													 <span class="left">Avis</span>
													 <input type="radio" name="name2">
													 <span class="left">Europcar</span>
												</div>
											</div>
											<div class="row">
												<span class="left">Rental location</span>
												<input type="text" class="input">
											</div>
											<div class="row">
												<span class="left">Pick-up</span>
												<input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
												<input type="text" class="input2" value="12:00"  onblur="if(this.value=='') this.value='12:00'" onFocus="if(this.value =='12:00' ) this.value=''">
											</div>
											<div class="row">
												<span class="left">Return</span>
												<input type="text" class="input1" value="10.05.2011"  onblur="if(this.value=='') this.value='10.05.2011'" onFocus="if(this.value =='10.05.2011' ) this.value=''">
												<input type="text" class="input2" value="12:00"  onblur="if(this.value=='') this.value='12:00'" onFocus="if(this.value =='12:00' ) this.value=''">
											</div>
											<div class="row_select">
												<span class="left">Miles &amp; More</span>
												<select><option>no membership</option></select>
											</div>
											<div class="row_select">
												<div class="pad_left1">
													Country of residence<br>
													<div class="select1"><select><option>&nbsp;</option></select></div>
												</div>
											</div>
											<div class="wrapper">
												<span class="right relative"><a href="#" class="button1" onClick="document.getElementById('form_3').submit()"><strong>Search</strong></a></span>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>	
					</article>
					<div id="slider">
						<img src="images/banner1.jpg" alt="">
						<img src="images/banner2.jpg" alt="">
						<img src="images/banner3.jpg" alt="">
					</div>
				</div>
		<div class="wrapper pad1">
			<article class="col1">
				<div class="box1">
							<h2 class="top">Offers of the Week from UK</h2>
							<div class="pad">
								<strong>From Birmingham</strong><br>
								<ul class="pad_bot1 list1">
									<li>
										<span class="right color1">from GBP 143.-</span>
										<a href="book2.php">Zurich</a>
									</li>
								</ul>
								<strong>From London City</strong><br>
								<ul class="pad_bot1 list1">
									<li>
										<span class="right color1">from GBP 176.-</span>
										<a href="book2.php">Basel</a>
									</li>
									<li>
										<span class="right color1">from GBP 109.-</span>
										<a href="book2.php">Geneva</a>
									</li>
								</ul>
								<strong>From London Heathrow</strong><br>
								<ul class="pad_bot2 list1">
									<li>
										<span class="right color1">from GBP 100.-</span>
										<a href="book2.php">Geneva</a>
									</li>
									<li>
										<span class="right color1">from GBP 112.-</span>
										<a href="book2.php">Zurich</a>
									</li>
									<li>
										<span class="right color1">from GBP 88.-</span>
										<a href="book2.php">Basel</a>
									</li>
								</ul>
							</div>
							<h2>From Ireland To Switzerland</h2>
							<div class="pad">
								<strong>From Dublin</strong><br>
								<ul class="pad_bot2 list1">
									<li class="pad_bot1">
										<span class="right color1">from EUR 122.-</span>
										<a href="book2.php">Zurich</a>
									</li>
								</ul>
							</div>
						</div>
					</article>
					<article class="col2">
						<h3>About Our Airlines<span>Template created by TemplateMonster.com team</span></h3>
						<div class="wrapper">
							<article class="cols">
								<figure><img src="images/page1_img1.jpg" alt="" class="pad_bot2"></figure>
								<p class="pad_bot1"><strong>Airlines is one of <a href="http://blog.templatemonster.com/free-website-templates/" target="_blank">free website templates</a> created by TemplateMonster.com team.</strong></p>
								<p>This website template is optimized for 1024X768 screen resolution. It is also XHTML &amp; CSS valid. This website template has several pages: <a href="home.php">About</a>, <a href="book.php">Book</a>, <a href="contacts.php">Contacts</a>.</p>
							</article>
							<article class="cols pad_left1">
								<figure><img src="images/page1_img2.jpg" alt="" class="pad_bot2"></figure>
								<p class="pad_bot1"><strong>This <a href="http://blog.templatemonster.com/2011/05/09/free-website-template-airlines/" target="_blank" rel="nofollow">Airlines Template</a> goes with two packages.</strong></p>
								<p>With PSD source files and without them. PSD source files are available for free for the registered members of Templates.com. The basic package (without PSD source files) is available for anyone without registration).</p>
							</article>
						</div>
						<a href="#" class="button1"><strong>Read More</strong></a>
					</article>
				</div>
			</section>
			<!--content end-->
			<!--footer -->
			<footer>
				<div class="wrapper">
					<ul id="icons">
						<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Delicious"><img src="images/icon2.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Stumble Upon"><img src="images/icon3.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon4.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Linkedin"><img src="images/icon5.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Reddit"><img src="images/icon6.jpg" alt=""></a></li>
					</ul>
					<div class="links">
						Website template designed by <a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">www.templatemonster.com</a><br>
						3D Models provided by <a href="http://www.templates.com/product/3d-models/" target="_blank" rel="nofollow">www.templates.com</a></div>
				</div>
			</footer>
			<!--footer end-->
		</div>
<script type="text/javascript"> Cufon.now(); </script>
<script>
	$(document).ready(function() {
		tabs.init();
	});
	jQuery(document).ready(function($) {
		$('#form_1, #form_2, #form_3').jqTransform({imgPath:'jqtransformplugin/img/'});	
	});
	$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'fade', //Specify sets like: 'fold,fade,sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft' 
		slices:15,
		animSpeed:500,
		pauseTime:6000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false, //Next & Prev
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		controlNavThumbsFromRel:false, //Use image rel for thumbs
		controlNavThumbsSearch: '.jpg', //Replace this with...
		controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
		keyboardNav:true, //Use left & right arrows
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:1, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
	});
</script>
</body>
</html>