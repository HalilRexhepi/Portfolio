<?php
include_once('config.php');

?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<style>
	.mainballinaction {
			width: 100%;
			display: flex;
			flex-direction: row;
			justify-content: center;
		}
		.block {
			width: 18.5%;
			}
			</style>
	<script src="js/f.js"></script>
		<meta charset="UTF-8">
		<title>HL-Portfolio_Admin</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="css/f/css/fontawesome.css" />
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<style>
		.wrapper {
			padding: 0 0 0 0 !important;
		}
		</style>
	</head>
	<body>
	

			<!-- Three -->
			<section id="three" >
			<br>
			<a href="logout.php" class="button log-out-btn">Logout</a>
			<p style="margin-left:82%; font-size:20px; text-decoration:underline white;"></p>
			
			<div class="mainballinaction">
							<div class="block" >
							<a href="adddmenu.php "class="button">
					<button class="button">Add Menu</button>
				</a>
							</div>
							<div class="block" >
							<a href="editmenu.php "class="button">
					<button class="button">Edit or Delete</button>
				</a>
							</a>
							</div>
							</div>
							<hr style="border-top: 0.5px solid #444444;">
							<br>
						
			<div class="mainballinaction">
							<div class="block">
							<a href="add_main.php "class="button">
					<button class="button">Add Main</button>
				</a>
							</div>
							<div class="block" >
							<a href="edit_main.php "class="button">
					<button class="button">Edit or Delete</button>
				</a>
							</div>
							</div>
							
							
						
							<hr style="border-top: 0.5px solid #444444;">
							<br>
			<div class="mainballinaction">
							<div class="block">
							<a href="add_contwo.php "class="button">
					<button class="button">Add Container</button>
				</a>
							</div>
							<div class="block">
							<a href="edit_contwo.php "class="button">
					<button class="button">Edit Or Delete</button>
				</a>
							</div>
							</div>
							
							
		
			

							</div>
							</div>
							<hr style="border-top: 0.5px solid #444444;">
							<br>

							<div class="mainballinaction" style="display:inline-block">
							<div class="block">
							<a href="add_titles.php">
							<i class="" style="color:white; margin-left: 0.1em"></i>
							<p style="margin-left:2%;"></p>
							</a>
							</div>
							<div class="block" style="margin-right:1em;">
							<a href="edit_titles.php">
							<i class="" style="color:white; margin-left: 0.3em"></i>
							<p style="padding-left: 7%;"></p>
							</a>
							</div>
							</div>
							</form>
</section>
							



		</body>
	</html>
