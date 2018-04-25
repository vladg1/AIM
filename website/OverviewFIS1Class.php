
<html>
<?php 
$page_title = 'FIS1 class overview';
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
			
						<h2>FIS1 class overview </h2>

			</div> 
			<div id="left-pane">

				<table id="ClassObj">
					<tr><td rowspan="1" id="TitleClass"><b>FIS1</b> - ES1a	</td></tr>

					<tr><td rowspan="0" id="ClassResources"><button id="myBtn">Open Attendance list</button></td></tr>

					<tr><td colspan="0" id="FeedbackBlock"><form>
						<input id="textarea" type="text" name="w">
						<button id="submitbutton" type="submit"><b>Submit</b></button>
<!-- 						<input id="submitbutton" type="submit" name="sub" value="submit">  -->
					</form></td></tr>

				</table>



				<div id="myModal" class="modal">

				  <!-- Modal content -->
				  <div class="modal-content">
				    <span class="close">&times;</span>
				    <?php 
					$students = array('Michaeil', 'Jose', 'Georgi', 'Vlad', 'Romina', 'Anastasia', 'Emilia', 'Elena', 'Daniel', 'Ramin', 'Abdi');
					echo '<p style="font-size: 30px;"><b>StudentList</b></p>';
					echo '<ul>';
					foreach ($students as $key => $value) {
						echo '<li><br><p id="demo" onclick="myFunction()">' .++$key . '  ' . '<b>' . $value.'</b></p></li>';


					}
					echo '</ul>';	
					?>
				  </div>

				</div>
			</div>
						
			<div>
				<?php include ('pages/rightPane.html'); ?>
			</div>

		</div>


		<div id="bottom-pane">

				<?php include('pages/navBar.html') ?>

		</div>
	




		<script type="text/javascript" src="scripts/script.js"></script>	
	</body>

</html> 