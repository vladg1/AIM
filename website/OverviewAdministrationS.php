
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

						<a id="toggleButton" onclick="toggleText();" href="javascript:void(0);">PCS1</a>
						<div>
						    <p id="textArea"></p>
						</div>

						<a id="toggleButton2" onclick="toggleText2();" href="javascript:void(0);">FIS1</a>
						<div>
						    <p id="textArea2"></p>
						</div>

						<a id="toggleButton3" onclick="toggleText3();" href="javascript:void(0);">NETW</a>
						<div>
						    <p id="textArea3"></p>
						</div>

						<a id="toggleButton4" onclick="toggleText4();" href="javascript:void(0);">EDB</a>
						<div>
						    <p id="textArea4"></p>
						</div>






				</div>
							<div>
				<?php include ('pages/rightPane.html'); ?>
						</div>

		</div>


		<div id="bottom-pane">

				<?php include('pages/navBarAdministrationS.html') ?>

		</div>
	




		<script type="text/javascript" src="scripts/script.js"></script>	
	</body>

</html>