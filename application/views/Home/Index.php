<!DOCTYPE html>
<html lang="en">

<head>
	<?php include(APPPATH . 'views/_Header.php'); ?>
	<?php include(APPPATH . 'views/_CSS.php'); ?>
</head>

<body>
	<?php include(APPPATH . 'views/Nav/Navbar.php'); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<?php include(APPPATH . 'views/Home/Banner.php'); ?>
			</div>
		</div>
		
		<?php include(APPPATH . 'views/Home/WeAre.php'); ?>
		<div class="row">
			<div class="col">
				<?php include(APPPATH . 'views/Home/EndToEnd.php'); ?>
			</div>
		</div>
			
	</div>
	<?php include(APPPATH . 'views/_JS.php'); ?>

</body>

</html>
