<?php 
	session_start();
?>

<!DOCTYPE HTML>
<html class="no-js" lang="en-us">
    <head>
        <meta charset="utf-8">
	    <title> <?php $title; ?></title>
	    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
	    <meta name="description" content="Connecting Hip-Hop since 2000."/>
	    <meta name="viewport" content="width=device-width, initial-scale=1"/>
	    <link rel="author" href="humans.txt" />

	    <!-- FAVICON -->
	    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
	    <!-- END FAVICON -->

	    <!-- RALEWAY FONT -->
	    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css"/>
	    <!-- END RALEWAY FONT -->

	   	<!-- STYLESHEETS -->
	   	<link rel="stylesheet" href="css/normalize.css">
	    <link rel="stylesheet/less" type="text/css" href="css/main.less" />
	    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	    <!--[if lt IE 9]>
	    <link rel="stylesheet" href="css/jquery.galereya.ie.css">
	    <![endif]-->
	    <!-- END STYLESHEETS -->

	    <!-- JAVASCRIPT -->
	    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
	    <!-- END JAVASCRIPT -->

	</head>
	<body>
		<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<header>
			<!-- BEGIN LOGO-BRANDING -->
			<div id="branding"><img id="branding-logo" src="img/logo.png" alt="Words Beats & Life Inc. Logo" /></div>
			<!-- END LOGO-BRANDING -->

			<!-- BEGIN ICONIC NAVIGATION CONTROLS -->
		    <ul class="navigation_controls">
				<li id="stack_menu" class="mobile-only">
					<i class="fa fa-bars icon"></i>
					<span class="usupur">Menu</span>
				</li>
		        <li id="notification_menu">
		        	<i class="fa fa-bell icon"></i>
		        	<span class="usupur">Notifications</span>
		        </li>
		        <li id="search">
		        	<span class="fa fa-search"></span>
		        	<input type="text" placeholder="Search"/>
		        </li>
		    </ul>
		    <!-- END ICONIC NAVIGATION CONTROLS -->

		    <!-- BEGIN NAVIGATION BAR -->
		    <nav>
		    	<ul class="mobile-only"><h5>Navigation</h5></ul>
		        <li><a>Wall</a></li>
		       	<li><a>Events</a></li>
		        <li>Forum</li>
		        <li>Buck Shop</li>
                <li class="mobile-last-li">My Account</li>
                
                <!-- MOBILE ONLY ITEMS (UNIQUE MENU) WILL APPEAR HERE -->
                <div class="mobile-only">
                	<h5 class="mobile-only">Menu</h5>
                	<ul>
                		<?php //require_once('routes.php'); ?>
	                </ul>
	            </div>
                <!-- END MOBILE ONLY ITEMS -->
		    </nav>
		    <!-- END NAVIGATION BAR -->
		</header> 
		<!-- END HEADER -->

        <!-- BEGIN NOTIFICATION, UPCOMING EVENTS, SEARCH MENU (Icon List)-->
		<!-- <ul id="ui-data-menu" class="menu ui-icon-list ui-menu-large">
			<li><i class="fa fa-users"></i>Users</li>
			<li class="ui-branch"><p>New: </p>Laura Dawbs</li>
			<li><i class="fa fa-calendar"></i>Events</li>
			<li class="ui-branch"><p>Upcoming: </p>Event 1</li>
			<li><i class="fa fa-file-text-o"></i>Content</li>
			<li class="ui-branch"><p>New: </p>Laura's Evaluation</li>
			<li><i class="fa fa-comments"></i>Forum</li>
			<li class="ui-branch"><p>Flagged: </p>Post Title</li>
		</ul> -->
		<!-- BEGIN UPCOMING EVENTS (Icon List) -->
<!-- 			<p class="pre-menu">Upcoming Events</p>
			<ul class="menu ui-icon-list">
				<li><i class="fa fa-calendar"></i>EVENT 1 HEY THERE<p>Today at 10AM</p></li>
				<li><i class="fa fa-calendar"></i>EVENT 2 Down in the DM<p>Today at 11AM</p></li>
				<li><i class="fa fa-calendar"></i>EVENT 3 the DM<p>Today at 12PM</p></li>
			</ul> -->
			<!-- END UPCOMING EVENTS -->
        <!-- END NOTIFICATION MENU (Icon List) -->

		<!-- MAIN CONTENT && BEGIN SKELETON GRID -->
        <article class="container">
        	<div class="row">
		        <div class="ui-full-width">
		        	<?php require_once('../application/views/routes.php'); ?>
		    	</div>
		    </div>
		</article>
		<!-- END MAIN CONTENT && END SKELETON GRID -->

	    <footer>
	    	<div class="row">
	    			<div class="one-half column">
	    				<h6>About Us</h6>
                        <p>Words Beats & Life began as a conference at the University of Maryland in the fall of 2000; founders worked to create a vehicle to transform individual lives and communities through Hip-Hop. In 2003, WBL was incorporated as a nonprofit organization with 501(c)(3) status in the District of Columbia and began its first program, the Saturday Arts Academy, which is now known as the Words Beats & Life Academy. </p>
	    			</div>
	    			<div class="three columns">
	    				<h6>Navigation</h6>
	    				<ul>
	    					<li>Wall</li>
	    					<li>Events</li>
	    					<li>Forum</li>
	    					<li>Buck Shop</li>
	    					<li>My Account</li>
	    				</ul>
	    			</div>
	    			<div class="three columns">
	    				<h6>Menu</h6>
	    				<!-- UNIQUE MENU FOOTER -->
	    				<ul>
	    					<?php //require_once('routes.php'); ?>
		                </ul>
		            </div>
	    		</div>
	    		<div class="row" style="text-align: center; color:gray;"><p>website & content &copy; 2016 top 484!</p></div>
	    	</div>
	    </footer>
	    <!-- END SKELETON GRID -->

		<!-- SCRIPTS -->
			<!-- JQUERY -->
        	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        	<!-- ANGULARJS -->
        	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
			<!-- PLUGINS.JS -->
			<script src="js/plugins.js"></script>
			<!-- MAIN.JS -->
			<script src="js/main.js"></script>
		<!-- END SCRIPTS -->
	</body>
</html>
