
<!-- 
Ashraful Haque Shafin
IT-207-004
Calculates grade and also calls a new css file
 -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Lab1</title>
		<link rel="stylesheet" type="text/css" href="../include/mycss.css"/>
		<link rel="stylesheet" type="text/css" href="mycss2.css"/>
	</head>
	<body>

		
		<?php readfile("../include/sidenav.inc"); ?>

		<?php include "../include/header.php"; ?>

		<?php include "calculator.php"; ?>

		<?php readfile("../include/footer.inc"); ?>

	</body>

</html>