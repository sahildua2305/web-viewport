<?php
include '/home/admin666/public_html/sahildua.com/inc/all.inc.php';
if(isset($_GET['url'])){
	$url = $_GET['url'];	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Viewport Resizer</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<meta property="og:url" content="<?php echo $_SERVER['SCRIPT_URI']?>"/>
	<meta property="og:site_name" content="Sahil Dua | Viewport"/>
	<meta property="og:title" content="Viewport | Sahildua"/>
	<meta property="og:image" content="http://sahildua.collegespace.in/link-parser/logo.jpg"/>
	<meta property="og:type" content="website"/>
	<meta property="og:description" content="Now, you don't need to use default break-points in CSS for responsiveness. Let your content/layout decide the break-points. A viewport to check responsiveness of a website and decide the breakpoints while developing a responsive website."/>
	<meta name="description" content="Now, you don't need to use default break-points in CSS for responsiveness. Let your content/layout decide the break-points. A viewport to check responsiveness of a website and decide the breakpoints while developing a responsive website.">
	<meta name="keywords" content="viewport, breaking points, responsive, responsiveness, website, sahil, dua, sahildua, sahildua2305, sahil2305dua, sahil dua, collegespace.in, sahildua.collegespace.in, small, large, dance, full, increase, decrease">
    <link rel="stylesheet" href="style.css"/>
	<script src="jquery.min.js"></script>
	<script src="script.js"></script>
	<link rel="shortcut icon" href="favicon.png" type="image/png">
	<link rel="shortcut icon" type="image/png" href="favicon.png" />

	
</head>
	
<body>
	<header class="vp-header">
		<div class="vp-url-form">
			<form action="" method="get">
				<input type="text" name="url" placeholder="Enter any URL" value="http://"/>
				<button id="vp-url-submit">Go</button>
			</form>
		</div>
		<div class="vp-customs">
			SIZE: <input type="text" name="vp-pixels" class="vp-pixels" id="vp-pixels" value=""/> px /
			<input type="text" name="vp-ems" id="vp-ems"/> em
		</div>
		<div class="vp-controls">
			<button id="vp-small">Small</button>
			<button id="vp-medium">Medium</button>
			<button id="vp-large">Large</button>
			<button id="vp-full">Full</button>
			<button id="vp-random">Random</button>
			<button id="vp-dance">Dance</button>
			<button id="vp-increase">Increase</button>
			<button id="vp-decrease">Decrease</button>
		</div>
	</header>
	
	<div class="vp-wrapper">
		<iframe class="vp-viewport" id="viewport" src="<?php if(isset($_GET['url'])) echo $url;?>" name="vp-iframe" frameborder="2" scrolling="auto"/>
	</div>
	
</body>
</html>
