
<html>
<?php 
$page_title = 'Overview';
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

					<a id="toggleButton" onclick="toggleText();" href="javascript:void(0);">PCS1</a><a href="OverviewPCS1Class.php"><i class="fas fa-arrow-alt-circle-right"></i></a>
					<div>
					<p id="textArea"></p>

					</div>

					<a id="toggleButton2" onclick="toggleText2();" href="javascript:void(0);">FIS1</a><a href="OverviewFIS1Class.php"><i class="fas fa-arrow-alt-circle-right"></i></a>
					<div>
					<p id="textArea2"></p>
					</div>

					<a id="toggleButton3" onclick="toggleText3();" href="javascript:void(0);">NETW</a><a href="OverviewFIS1Class.php"><i class="fas fa-arrow-alt-circle-right"></i></a>
					<div>
					<p id="textArea3"></p>
					</div>

					<a id="toggleButton4" onclick="toggleText4();" href="javascript:void(0);">EDB</a><a href="OverviewFIS1Class.php"><i class="fas fa-arrow-alt-circle-right"></i></a>
					<div>
					<p id="textArea4"></p>
					</div>






				</div>
							<div>
				<?php include ('pages/rightPane.html'); ?>
						</div>

		</div>


		<div id="bottom-pane">

				<?php include('pages/navBarCurriculum.html') ?>

		</div>
	




		<script type="text/javascript" src="scripts/curroverview.js"></script>	
	</body>

</html>