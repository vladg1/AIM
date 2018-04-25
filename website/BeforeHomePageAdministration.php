
<html>
<?php 
$page_title = 'Upload File - administration';
?>
	<head>
		<title><?php echo $page_title; ?></title>

		<link href="css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body style="font-family: "Trebuchet MS", Helvetica, sans-serif;">
		<header>
			<div>
							<?php
				include('C:\Users\878432\x\htdocs\website\pages\header.html')
			?>
			</div>

		</header>




		<div style="width: 100%; height: 100%;padding-top: 300px; padding-left: 800px;">

			<table id="browse">
				<tr><td  id="browserow" colspan="2">Browse for the <b>.xlsx</b> / <b>.xls</b> / <b>.xml</b> / <b>.doc</b> file in the right format</td></tr>

				<tr><td id="browserow"><input type="file" class="button_browse"></td><td id="browserow"><input class="button_submit" type="submit" name="" value="Submit" onclick="window.location='./HomePageAdministration.php'"></td></tr>
			</table>

		</div>




		<script>
			function myFunction() {
			var x = document.createElement("INPUT");
			x.setAttribute("type", "file");
			document.body.appendChild(x);
			}
		</script>
		<script type="text/javascript" src="scripts/browse.js"></script>	
	</body>

</html>