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
<body class="flex-container">
	<header class="headerBox">
		<h1>Rock-Paper-Scissors-Lizard-Spock</h1>
	</header>
	<main class="mainBox">
		<?php
		// Reports runtime errors 
		error_reporting(E_ERROR | E_PARSE);
		// Variables for input and output (elements)
		// e.g., array, an empty string, associative array, superglobal.
		$moves = array("rock", "paper", "scissors", "lizard", "spock");
		$computer = "question";
		$output = "";
		$winner = array( 
		"rock" => "paper, spock", 
		"paper" => "scissors, lizard", 
		"scissors" => "rock, spock", 
		"lizard" => "scissors, rock", 
		"spock" => "paper, lizard");
		$human = $_GET['move'];
		// initial state question mark image.
		if (empty($_GET['move'])) {	
			$human = "question"; 
		}
		// The array_rand() function returns a random key from an array
		if ($human !== "question") {
			$computer = $moves[array_rand($moves)];
		}
		$hImg = "<img src='images/$human.png' alt='$human' />";
		$mImg = "<img src='images/$computer.png' alt='$computer' />";
		// represents selected moves by both players
		$output = "$hImg vs. $mImg";
		// Evaluates destruction powers of both selections.
		// The strpos() function finds the position of 
		// the first occurrence of a string inside another string.
		if ($computer == "question") { 
			$output == "";
		} elseif ($computer == $human) {
			$output .= "<p>IT'S A TIE.</p>";
		} elseif (strpos($winner[$computer], $human) == true) { //!== false
			$output .= "<p> YOU WON!</p>";
		} else {
			$output .= "<p> COMPUTER WON. </p>";
		}
		echo $output;
		?>
		<!-- uses form to capture data from user.
		The onchange attribute fires the moment when 
		the value of the element is changed.
		The submit() method submits the form.
		Disabled attribute specifies that an option should be disabled.
		-->
		<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<select name="move" onchange="this.form.submit()" size="5">
				<option value="rock">rock</option>
				<option value="paper">paper</option>
				<option value="scissors">scissors</option>
				<option value="lizard">lizard</option>
				<option value="spock">spock</option>
			</select>
			<button class="reset" onclick="window.reload()">NEW GAME
			</button>
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


<script src="js/ttt.js" defer></script>	

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
