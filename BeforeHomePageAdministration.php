
<html>
<?php 
$page_title = 'Upload File - administration';
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




		<div style="width: 100%; height: 100%;padding-top: 300px; padding-left: 800px;">

			<table id="browse">
				<tr id="browserow"><td colspan="2"><b>Browse for the .xlsx / .xls / .xml / .doc file in the right format</b></td></tr>
				<tr id="browserow"><td><button>Browse</button></td><td><input type="submit" name="" value="Submit" onclick="window.location='./HomePageAdministration.php'"></td></tr>
			</table>

		</div>





		<script type="text/javascript" src="scripts/script.js"></script>	
	</body>

</html>