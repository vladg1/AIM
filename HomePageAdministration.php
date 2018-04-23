
<html>
<?php 
$page_title = 'Home - administration';
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
				<h1><b>Student List</b></h1>
			</div>



			<div id="left-pane">
				<iframe id="excel" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ0HsTlNu7dpMFb5teGQT6VNwmmwdIPD9J5mSp3J_JrrqkUwJ-0uO0VWLirshvN5yhNm8vDEJ9GJgjg/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false" width="800px" height="500px" frameborder="2" style="border:2"></iframe>
			</div>
				

					
			<div>
				<?php include ('pages/rightPane.html'); ?>
			</div>



		</div>


		<div id="bottom-pane" style="padding-left: 400px;">

				<?php include('pages/navBarAdministration.html') ?>

		</div>
	




		<script type="text/javascript" src="scripts/script.js"></script>	
	</body>

</html>