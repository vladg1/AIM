
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
$page_title = 'Study Path';
?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title><?php echo $page_title; ?></title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />

	</head>
	<body onload="init()">

		<header>
			<div>
							<?php
								include('C:\Users\878432\x\htdocs\website\pages\header.html')
							?>
			</div>

		</header>




		<div id="content" class="divs">

			
			<div id="content-placeholder">
				<p style="font-size: 30px;"><b>Available Study Paths </b></p>
			</div>



			<div id="left-pane">
			
				<div class="tab">
					<button class="tablinks" onclick="openCity(event, 'ICT and Software')">ICT and Software</button>
					<button class="tablinks" onclick="openCity(event, 'ICT and Business')">ICT and Business</button>
					<button class="tablinks" onclick="openCity(event, 'ICT and Technology')">ICT and Techology</button>
					</div>

					<div id="ICT and Software" class="tabcontent">
					<h3>ICT and Software</h3>

			


						<iframe src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1ymHOYOGBmEeAyFczBezzNUvXIJQ8pMGaVT7kflYLhEE&font=Default&lang=en&initial_zoom=2&height=650' width='100%' height='100%' webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder='0'></iframe>
						<span id="topright" onclick="this.parentElement.style.display='none'">CLOSE</span>

					</div>

					<div id="ICT and Business" class="tabcontent">
					<h3>ICT and Business</h3>
											<iframe src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1ymHOYOGBmEeAyFczBezzNUvXIJQ8pMGaVT7kflYLhEE&font=Default&lang=en&initial_zoom=2&height=650' width='100%' height='100%' webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder='0'></iframe>
					<span id="topright" onclick="this.parentElement.style.display='none'">CLOSE</span>
					</div>

					<div id="ICT and Technology" class="tabcontent">
					<h3>Tokyo</h3>
											<iframe src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1ymHOYOGBmEeAyFczBezzNUvXIJQ8pMGaVT7kflYLhEE&font=Default&lang=en&initial_zoom=2&height=650' width='100%' height='100%' webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder='0'></iframe>
					<span id="topright" onclick="this.parentElement.style.display='none'">CLOSE</span>
				</div>




			</div>
				

					
			<div>
				<?php include ('pages/rightPane.html'); ?>
			</div>



		</div>


		<div id="bottom-pane">

				<?php include('pages/navBarCurriculum.html') ?>

		</div>
	



		<script type="text/javascript" src="scripts/tabs.js"></script>	
		<script type="text/javascript" src="scripts/script.js"></script>	
	</body>

</html>