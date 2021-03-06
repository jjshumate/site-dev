<?php 

	require_once("./inc/functions.php"); 
	
?>
<!DOCTYPE html>
<!-- unitedwayathenslimestone.com - About Page -->
<html lang="en">
	<head> <!-- header -->
		<title>United Way of Athens-Limestone County</title> <!-- Website Title -->
		<meta charset = "utf-8" />
		<link rel="shortcut icon" href="images/uw_icon.ico" type="image/ico" /> <!-- Website Icon -->
		<link href="/inc/css/style.css" type="text/css" rel="stylesheet"> <!-- include the css style sheet style.css -->		
		<script src="/inc/js/jquery/jquery.min.js"></script>	<!-- include jQuery -->			
		<script src="/inc/js/jquery/jquery.cycle2.min.js"></script> <!-- include Cycle2 http://jquery.malsup.com/cycle2/ -->		
		<script src="/inc/js/jquery/jquery.cycle2.ie-fade.min.js"></script> <!-- include support for older versions of IE-->
	</head>
		<body>
		<?php get_home_banner(); ?>
		<div id="darkframe"> <!-- css division "darkframe" - this is the blue border around the content -->		
		<?php get_main_menu(); ?>
<!--Sidebar Code-->	
			<br> 
			<div id="wrapper2"> <!-- css division "wrapper2" -->
				<div id = "sideQuote"><br><br> <!-- css division "sidQuote" --> 
                    <div class="cycle-slideshow" data-cycle-fx="fadeout" data-cycle-timeout="10000" data-cycle-slides="li" data-cycle-random="true" data-cycle-loop="100" data-index=1> <!-- using Cylce2, slideshow of photos -->
					   <ul>
							<li><img src="images/sidebar1.jpg" alt='sidebar1' height='130' width='200' /></li>
							<li><img src="images/sidebar2.jpg" alt='sidebar2' height='130' width='200' /></li>
							<li><img src="images/sidebar3.jpg" alt='sidebar3' height='130' width='200' /></li>
							<li><img src="images/sidebar4.jpg" alt='sidebar4' height='130' width='200' /></li>
							<li><img src="images/sidebar5.jpg" alt='sidebar5' height='130' width='200' /></li>
							<li><img src="images/sidebar6.jpg" alt='sidebar6' height='130' width='200' /></li>
							<li><img src="images/sidebar7.jpg" alt='sidebar7' height='130' width='200' /></li>
							<li><img src="images/sidebar8.jpg" alt='sidebar8' height='130' width='200' /></li>
					   </ul> 
					</div>
					<div class="spacer heightThirteen"></div> <!-- css division "heightThirteen" for sidebar spacing-->
					<div class="sideQuote center spacer"> <!-- css division "heightThirteen" for sidebar divider -->
					<div class="cycle-slideshow" data-cycle-fx="fadeout" data-cycle-timeout="10000" data-cycle-slides="li" data-cycle-loop="100" data-index=2> <!-- using Cylce2, slideshow of quotes -->
						<ul>
							<li><p class="left">“We make a living by what we get,<br>&nbsp;we make a life by what we give.”</p><p>–Winston Churchill</p></li>
							<li><p class="left">“You really can change the world if you care enough.”</p><p>–Marion Wright Edelman</p></li>
							<li><p class="left">“Never doubt that a small group<br>&nbsp;of thoughtful, committed citizens<br>&nbsp;can change the world.
					   			<br>&nbsp;Indeed it is the only<br>&nbsp;thing that ever has.”<br></p><p>–Margaret Mead</p></li>
					   		<li><p class="left">“The best way to find yourself<br>&nbsp;is to lose yourself in the service<br>&nbsp;of others.”</p><p>–Ghandi</p></li>
					   		<li><p class="left">“No act of kindness,<br>&nbsp;no matter how small,<br>&nbsp;is ever wasted.”</p><p>–Aesop</p></li>
					   		<li><p class="left">“Nobody can do everything,<br>&nbsp;but everyone can do<br>&nbsp;something.”</p><p>–Author unknown</p></li>
					   		<li><p class="left">“Service to others is the rent<br>&nbsp;you pay for your room<br>&nbsp;here on earth.”</p><p>–Mohammed Ali</p></li>
					   		<li><p class="left">“The best and most beautiful<br>&nbsp;things in the world<br>&nbsp;cannot be seen<br>&nbsp;or even touched<br>&nbsp;- they must be felt<br>&nbsp;with the heart.”</p><p>–Helen Keller</p></li>
						</ul>	  
					</div><br><br>                      			
                </div></div>  <!-- close css division "sidQuote" -->
<!-- Main Content Starts Below-->							
				<div id="content"> <!-- css division "content" -->
					<h1>Our Vision</h1> <!-- Header 1 style -->
			          <!-- paragraph -->
			          <p>United Way of Athens-Limestone County will be a leader in our community
			          where all individuals and families achieve their potential through education
			          which leads to financial stability, and healthier lifestyles.</p>	
			          <img src="images/UW_Athens2.jpg" alt="Athens United Way" width="600" height="300" class="center"/> <!-- picture -->
			          <hr> <!-- horizontal bar -->	          
			          
			          <h1>Our Mission</h1> <!-- Header 1 style -->
			          <!-- paragraph -->
			          <p>United Way of Athens-Limestone County secures resources to include financial support, volunteers and in kind donations of goods and services.  
			          	We accomplish this by providing high quality community services through collaborations and partnerships aligned with our vision.</p>	
			          	<hr> <!-- horizontal bar -->	          
			         
			          <h1>Our Values</h1> <!-- Header 1 style -->
			          <ul> <!-- unordered list -->
					      <li><span>Trust and integrity through transparency</span></li>
					      <li><span>Respect and dignity</span></li>
					      <li><span>Innovative leadership</span></li>
					      <li><span>Accountability</span></li>
					      <li><span>Stewardship to our donors</span></li>
					      <li><span>Responsive to community</span></li>
				      </ul>
				      <hr> <!-- horizontal bar -->
				      
				      <h1>Our Goals</h1> <!-- Header 1 style -->
				      <!-- paragraph -->
				      <p>In 2008, United Way initiated a 10-year program designed to achieve the following goals by 2018:</p>
						<ul> <!-- unordered list -->
					      <li><span>Improve education, and cut the number of high school dropouts — 1.2 million students, every year — in half.</span></li>
					      <li><span>Help people achieve financial stability, and get 1.9 million working families — half the number of lower-income 
					      	families who are financially unstable — on the road to economic independence.</span></li>
					      <li><span>Promote healthy lives, and increase by one-third the number of youth and adults who are healthy and avoid risky behaviors.</span></li>
				       </ul>
					  <!-- paragraph -->
					  <p>Our goals are ambitious, but with your help, and by utilizing our core strengths — a national network, 
					  committed partners, and public engagement capacity — we can achieve them.</p>
					  <hr>	<!-- horizontal bar -->		 
				</div> <!-- close css division "content" -->
			</div>  <!-- close css division "wrapper2" --> 
		<?php get_home_footer(); ?>
		</div> <!-- close css division "darkframe" - this is the blue border around the content -->
		</body>
</html>