
<html>
<?php 
$page_title = 'HomePage';
?>
	<head>
		<title><?php echo $page_title; ?></title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<header>
			<div>
							<?php
				include('./pages/header.html')
			?>
			</div>

		</header>




		<div id="content" class="divs">


				<div id="content-placeholder">
				
							<h2>Overview of your situation : </h2>

				</div> 
				<div id="left-pane">

						<a id="toggleButton" onclick="toggleText();" href="javascript:void(0);">Next Year</a>
						<div>
						    <p id="textArea"></p>
						</div>

						<a id="toggleButton2" onclick="toggleText2();" href="javascript:void(0);">Current Year</a>
						<div>
						    <p id="textArea2"></p>
						</div>

						<a id="toggleButton3" onclick="toggleText3();" href="javascript:void(0);">Last Year</a>
						<div>
						    <p id="textArea3"></p>
						</div>

				</div>
							<div>
				<?php include ('pages/rightPane.html'); ?>
						</div>

		</div>


		<div id="bottom-pane">

				<?php include('pages/navBarAdministration.html') ?>

		</div>
	




		<script type="text/javascript" src="scripts/adminoverview.js"></script>	
	</body>

</html>