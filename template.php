<?php

/* 
 * Define some variables
 * Some of these can be transferred to a config.php file that can be loaded in all files
*/

$version = "1.0"; // Update this when you edit stylesheets to bust cache.

$site_title = ""; // Used for the site title; change this value to change the site title across the entire site.

$page = ""; // Identifies a unique id in the <body> tag of each page; allows you to use if functions to target specific pages. Must be unique for each page; do not move to a config.php file.

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $site_title; ?></title>
	<meta name="author" content="">
	<meta name="description" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="stylesheet" media="screen" href="css/styles.css?v=<?php echo $version; ?>">
	<link rel="stylesheet" media="screen and (max-width: 600px)" href="css/mobile.css?v=<?php echo $version; ?>">
	<link rel="stylesheet" media="print" href="css/print.css?v=<?php echo $version; ?>">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>

<body id="<?php echo $page; ?>">

	<script src="js/body.js"></script>
</body>

</html>
