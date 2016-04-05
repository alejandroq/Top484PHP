<?php 
	require_once('../connection.php');

	// 
	// @param title of webpage
	// 
	$title = 'Words Beats &amp; Life Inc. | Teaching Convening Presenting Hip-Hop Since 2002';

	// 
	// @param Checking $_GET[] for Following Call 
	// 
	// @return Returns Content from Views
	// 
	if (isset($_GET['controller']) && isset($_GET['action'])) {
		$controller = $_GET['controller'];
		$action = $_GET['action'];
	} else {
		$controller = 'pages';
		$action = 'home';
	}

	require_once('../application/views/layout.php');

#	Each Link Leads To: 
#	/?x=y or /index.php?x=y.
?>