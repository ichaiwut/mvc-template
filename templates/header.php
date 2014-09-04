<?php
	/**
	 * Header page : the header template.
	 * @author Ting <ichaiwut.@gmail.com>
	 */
	header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<title>รายงานเวลาการทำงานของพนักงาน</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/default.css">
		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/modernizr.js"></script>
		<script src="js/underscore-min.js"></script>
		<script src="js/zebra_datepicker.js"></script>
	</head>
	<body>
		<div class="container">
			<header class="header">
				<!-- @TODO : Add logo file here? -->
			</header>
			<nav class="top-nav">
				<ul class="alignright">
                	<li>
						<a href="../face_members/index.php">
							Home <br>
							<small>หน้าแรก</small>
						</a>
					</li>
					<li>
						<a href="?action=index">
							Report <br>
							<small>รายงานขาดลามาสาย</small>
						</a>
					</li>
					<li>
						<a href="?action=add">
							Add Data <br>
                            <small>แบบฟรอ์มกำหนดจำนวนวันลางาน</small>
					</a></li>
				</ul>
	</nav>
			<section class="main-container">