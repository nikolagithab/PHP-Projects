<?php
// define variables and set to empty or to-be-determined values
$winner = "tbd";
$box = array("","","","","","","","","");
//TODO: validate user input
if (isset($_POST["submit"])) {
	$box[0] = ($_POST["box0"]);
	$box[1] = ($_POST["box1"]);
	$box[2] = ($_POST["box2"]);
	$box[3] = ($_POST["box3"]);
	$box[4] = ($_POST["box4"]);
	$box[5] = ($_POST["box5"]);
	$box[6] = ($_POST["box6"]);
	$box[7] = ($_POST["box7"]);
	$box[8] = ($_POST["box8"]);
	//evaluate/assign human player winner status
	if (($box[0] == "x" && $box[1] == "x" && $box[2] == "x") ||
		($box[3] == "x" && $box[4] == "x" && $box[5] == "x") ||
		($box[6] == "x" && $box[7] == "x" && $box[8] == "x") ||
		($box[0] == "x" && $box[3] == "x" && $box[6] == "x") ||
		($box[1] == "x" && $box[4] == "x" && $box[7] == "x") ||
		($box[2] == "x" && $box[5] == "x" && $box[8] == "x") ||
		($box[0] == "x" && $box[4] == "x" && $box[8] == "x") ||
		($box[2] == "x" && $box[4] == "x" && $box[6] == "x")) {
			$winner = "x";
	}
	//find blank box for machine player's random move
	$blankBox = false;
	for ($i=0; $i<9; $i++) {
		if ($box[$i] == "") {
			$blankBox = true;
		}
	}
	// evaluate emty box and game in progress status
	if ($blankBox && $winner == "tbd") {
		$i = rand(0,8);
		while ($box[$i] != "") {
			$i = rand(0,8);
		}
		$box[$i] = "o";
		// evaluate/assign machine player winner status
		if (($box[0] == "o" && $box[1] == "o" && $box[2] == "o") ||
			($box[3] == "o" && $box[4] == "o" && $box[5] == "o") ||
			($box[6] == "o" && $box[7] == "o" && $box[8] == "o") ||
			($box[0] == "o" && $box[3] == "o" && $box[6] == "o") ||
			($box[1] == "o" && $box[4] == "o" && $box[7] == "o") ||
			($box[2] == "o" && $box[5] == "o" && $box[8] == "o") ||
			($box[0] == "o" && $box[4] == "o" && $box[8] == "o") ||
			($box[2] == "o" && $box[4] == "o" && $box[6] == "o")) {
			$winner = "o";
		}
	// evaluate/assign tied game status
	} elseif ($winner == "tbd") {
		$winner = "tie";
	}
}
?>


<!DOCTYPE html>
<html>
<head>
<title>New Layout Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
Author: 	Ellen Bajcar et al
Program: 	anyGame.html
Date: 		Summer 2017
Update: 		 
Version: 	a7.s2017.27.07
Purpose: 	template for Assignment 7 SYST10199 Web Development
Source: 	various
Copyright: 
    This work is the intellectual property of Sheridan College. 
    Any further copying and distribution outside of class must be within 
    the copyright law. Posting to commercial sites for profit is prohibited.
Dependencies:
	bg3.jpg canvasLogo.js games.css loginForm.html template.html anyGame.html
Description:
    see instructions.html
-->	
<link href="https://fonts.googleapis.com/css?family=Baloo|Chewy|Fredoka+One|Kaushan+Script|Modak|Pacifico|Rock+Salt|Russo+One" rel="stylesheet">

<link href="css/main.css" rel="stylesheet" type="text/css">

<link href="css/games.css" rel="stylesheet">

</head>
<body>
	<header>
		<h3>Welcome</h3>
	</header>
	<!-- The main element source: [Nikola Petrovski assign SYST10199] -->
	<main>
		<h3 id="message">Tic Tac Toe</h3>
		<!-- $_SERVER["PHP_SELF"] is a super global variable that 
		returns the filename of the currently executing script.
			The htmlspecialchars() function converts 
			special characters to HTML entities.-->
		<form name="tictactoe" method="post" 
		action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<?php
		for ($i=0; $i<9; $i++) {
			// create HTML output of 3x3 game board using PHP.
			printf('<input type="text" name="box%s" value="%s" 
				class="box">', $i, $box[$i]);
				if ($i == 2 || $i == 5 || $i == 8) {
					print('<br>');
			}
		}
		// form submit button
		if ($winner == "tbd") {
			print('<input type="submit" name="submit" value="Play"
				class="button">');
		// status updates		
		} elseif ($winner == "x") {
			print('<input type="button" name="newGameX" value="X Won!"
				onclick="window.location.href=\'index.php\'"
				class="button">');
		} elseif ($winner == "o") {
			print('<input type="button" name="newGameO" value="O Won!"
				onclick="window.location.href=\'index.php\'"
				class="button">');
		} elseif ($winner == "tie") {
			print('<input type="button" name="newGameT" value="It is a tie"
			onclick="window.location.href=\'index.php\'"
			class="button">');
		}
		?>
		</form>
	</main>
	<nav>
		<a href="http://bajcar.dev.fast.sheridanc.on.ca/web10199/content/code/assign8/anygame.html#">stats</a>
		<a href="http://bajcar.dev.fast.sheridanc.on.ca/web10199/content/code/assign8/anygame.html#">help</a>
		<a href="../../index.php">close</a>		
	</nav>	
	<footer>
		<address>Web Programming @ Sheridan College &copy; <?php echo date("Y"); ?> Copyright.</address>
		<small>ver.0.0.1</small>
	</footer>
	
<section id="messg" class="stats">
	<h5>stats display here</h5>
	<p>Lorem ipsum...</p>
</section>

<section id="help" class="help">
	<h5>Provide help here.</h5>
	<p>Lorem ipsum...</p>
</section>	



<script>
/* 
	events: setup overlays 
*/		
var overStats = document.getElementsByClassName("stats")[0];
var overHelp = document.getElementsByClassName("help")[0];
overStats.addEventListener("click", function() { (overStats.style.display == "block") ? overStats.style.display = "none" : overStats.style.display = "block"; } );	
overHelp.addEventListener("click", function() { (overHelp.style.display == "block") ? overHelp.style.display = "none" : overHelp.style.display = "block"; } );
/* 
	events: setup for navigation
*/		
var btnStats = document.getElementsByTagName("a")[0];
var btnHelp = document.getElementsByTagName("a")[1]
var btnClose = document.getElementsByTagName("a")[2];  //TODO: will return to the home page of the games website
btnStats.addEventListener("click", function() { (overStats.style.display == "block") ? overStats.style.display = "none" : overStats.style.display = "block"; } );
btnHelp.addEventListener("click", function() { (overHelp.style.display == "block") ? overHelp.style.display = "none" : overHelp.style.display = "block"; } );
//TODO: load js on DOMContentLoaded
</script>
</body>
</html>
