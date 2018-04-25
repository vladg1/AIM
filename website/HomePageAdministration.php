
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
				<iframe id="excel" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vR-yerhGB_O0If1kMg53mIBxRYfDPjOggKDKfoYw2ENjh9TdyYt4JXk0LjWzECgrQ3EbACU5Gg_tYjY/pubhtml?widget=true&amp;headers=false"></iframe>
			</div>


				

					
			<div>
				<?php include ('pages/rightPane.html'); ?>
			</div>




		</div>	


			<div class="buttons">
				<div class="edit"><button class="editbutton">Edit Student</button></div>
				<div class="edit"><button class="editbutton">Add New Student</button></div>
				<div class="edit"><button class="editbutton">Remove Selected Students</button></div>
				<div class="edit"><button class="editbutton">Append new file</button></div>
			</div>


		<div id="bottom-pane" style="padding-left: 400px;">

				<?php include('pages/navBarAdministration.html') ?>

		</div>
	




		<script type="text/javascript" src="scripts/script.js"></script>	
	</body>

</html>