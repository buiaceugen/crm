<?php
use framework\Message;
?>
<!DOCTYPE html>
<html>
<head>
<title>Eugen Buiac Personal Framework</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css"
	href="public/theme/framework_theme/css/default.css" />
</head>
<body>
	<div id="wrapper">
		<div id="headerwrap">
			<div id="header">
				<h1>Buiac Eugen Personal Framework</h1>
			</div>
		</div>
		<div id="navigationwrap">
			<div id="navigation">
				<ul>
					<li><a href="index.php" id="main-menu1">Home</a></li>
					<li><a href="index.php" id="main-menu2">Products</a></li>
					<li><a href="index.php?c=services&a=services" id="main-menu3">Services</a></li>
					<li><a href="index.php?c=user&a=list" id="main-menu5">List User</a></li>
					<li><a href="index.php?c=about&a=about" id="main-menu6">About Us</a></li>
					
					<li><a href="index.php?c=contact&a=contact" id="main-menu7">Contact Us</a></li>
					
					<li style="float: right;"><a href="index.php" id="main-menu7">Login</a></li>
					<li style="float: right;"><a href="index.php?c=user&a=insert"
						id="main-menu4">Create User</a></li>
				</ul>
			</div>
		</div>
		<div id="contentwrap">
			<div id="content">
		<div id="message">

		</div>
         <?php echo $content; ?>
        </div>
		</div>
		<div id="rightcolumnwrap">
			<div id="rightcolumn">
				<h2>Lorem Ipsum</h2>
				<p>
					Nunc pellentesque. Sed vestibulum blandit nisl. Quisque elementum
					convallis purus. Suspendisse potenti. Donec nulla est, laoreet
					quis, pellentesque in. <a href="#">More&#8230;</a>
				</p>
				<h2>Ipsum Dolorem</h2>
				<ul>
					<li><a href="#">Sagittis Bibendum Erat</a></li>
					<li><a href="#">Malesuada Turpis</a></li>
					<li><a href="#">Quis Gravida Massa</a></li>
					<li><a href="#">Inerat Viverra Ornare</a></li>
				</ul>
			</div>
		</div>
		<div id="footerwrap">
			<div id="footer">
				<p>Buiac Eugen Personal Framework</p>
			</div>
		</div>
	</div>
</body>
</html>
