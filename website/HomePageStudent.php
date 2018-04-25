
<html>
<?php 
$page_title = 'Home for students';
?>
	<head>
		<title><?php echo $page_title; ?></title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<header>
			<div>
							<?php
				include('C:\Users\878432\x\htdocs\website\pages\header.html')
			?>
			</div>

		</header>




		<div id="content" class="divs">

			
			<div id="content-placeholder">
				<p style="font-size: 30px;"><b>Welcome to your home page !</b></p>
			</div>



			<div id="left-pane">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.3584497238085!2d5.47637181520496!3d51.45157492260525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6d92211f6fa13%3A0xbcf4b02cb0dee79!2sFontys!5e0!3m2!1snl!2snl!4v1519123513206" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
				

					
			<div>
				<?php include ('pages/rightPane.html'); ?>
			</div>



		</div>


		<div id="bottom-pane">

				<?php include('pages/navBarStudent.html') ?>

		</div>
	




		<script type="text/javascript" src="scripts/script.js"></script>	
	</body>

</html>