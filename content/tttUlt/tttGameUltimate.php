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

<!-- <link href="css/games.css" rel="stylesheet">
-->
</head>
<body>
	<header>
		<h3>Ultimate TicTacToe</h3>
	</header>
	<main>
	<h3 id="message">Welcome</h3>
	<div class="outerTable">
		<div class="outerRow">
			<div class="board" id="board1">
				<table>
					<tr>
						<td id="s11" onclick="nextMove1(this);"></td>
						<td id="s12" onclick="nextMove1(this);"></td>
						<td id="s13" onclick="nextMove1(this);"></td>
					</tr>
					<tr>
						<td id="s14" onclick="nextMove1(this);"></td>
						<td id="s15" onclick="nextMove1(this);"></td>
						<td id="s16" onclick="nextMove1(this);"></td>
					</tr>
					<tr>
						<td id="s17" onclick="nextMove1(this);"></td>
						<td id="s18" onclick="nextMove1(this);"></td>
						<td id="s19" onclick="nextMove1(this);"></td>
					</tr>
				</table>
				<p><button id="msg1" onclick="startGame1();">
				Press to Start #1</button></p>
			</div>
			<div class="board" id="board2">
				<table>
					<tr>
						<td id="s21" onclick="nextMove2(this);"></td>
						<td id="s22" onclick="nextMove2(this);"></td>
						<td id="s23" onclick="nextMove2(this);"></td>
					</tr>
					<tr>
						<td id="s24" onclick="nextMove2(this);"></td>
						<td id="s25" onclick="nextMove2(this);"></td>
						<td id="s26" onclick="nextMove2(this);"></td>
					</tr>
					<tr>
						<td id="s27" onclick="nextMove2(this);"></td>
						<td id="s28" onclick="nextMove2(this);"></td>
						<td id="s29" onclick="nextMove2(this);"></td>
					</tr>
				</table>
				<p><button id="msg2" onclick="startGame2();">
				Press to Start #2</button></p>
			</div>
			<div class="board" id="board3">
				<table>
					<tr>
						<td id="s31" onclick="nextMove3(this);"></td>
						<td id="s32" onclick="nextMove3(this);"></td>
						<td id="s33" onclick="nextMove3(this);"></td>
					</tr>
					<tr>
						<td id="s34" onclick="nextMove3(this);"></td>
						<td id="s35" onclick="nextMove3(this);"></td>
						<td id="s36" onclick="nextMove3(this);"></td>
					</tr>
					<tr>
						<td id="s37" onclick="nextMove3(this);"></td>
						<td id="s38" onclick="nextMove3(this);"></td>
						<td id="s39" onclick="nextMove3(this);"></td>
					</tr>
				</table>
				<p><button id="msg3" onclick="startGame3();">
				Press to Start #3</button></p>
			</div>
		</div>
		<div class="outerRow">
			<div class="board" id="board4">
				<table>
					<tr>
						<td id="s41" onclick="nextMove4(this);"></td>
						<td id="s42" onclick="nextMove4(this);"></td>
						<td id="s43" onclick="nextMove4(this);"></td>
					</tr>
					<tr>
						<td id="s44" onclick="nextMove4(this);"></td>
						<td id="s45" onclick="nextMove4(this);"></td>
						<td id="s46" onclick="nextMove4(this);"></td>
					</tr>
					<tr>
						<td id="s47" onclick="nextMove4(this);"></td>
						<td id="s48" onclick="nextMove4(this);"></td>
						<td id="s49" onclick="nextMove4(this);"></td>
					</tr>
				</table>
				<p><button id="msg4" onclick="startGame4();">
				Press to Start #4</button></p>
			</div>
			<div class="board" id="board5">
				<table>
					<tr>
						<td id="s51" onclick="nextMove5(this);"></td>
						<td id="s52" onclick="nextMove5(this);"></td>
						<td id="s53" onclick="nextMove5(this);"></td>
					</tr>
					<tr>
						<td id="s54" onclick="nextMove5(this);"></td>
						<td id="s55" onclick="nextMove5(this);"></td>
						<td id="s56" onclick="nextMove5(this);"></td>
					</tr>
					<tr>
						<td id="s57" onclick="nextMove5(this);"></td>
						<td id="s58" onclick="nextMove5(this);"></td>
						<td id="s59" onclick="nextMove5(this);"></td>
					</tr>
				</table>
				<p><button id="msg5" onclick="startGame5();">
				Press to Start #5</button></p>
			</div>
			<div class="board" id="board6">
				<table>
					<tr>
						<td id="s61" onclick="nextMove6(this);"></td>
						<td id="s62" onclick="nextMove6(this);"></td>
						<td id="s63" onclick="nextMove6(this);"></td>
					</tr>
					<tr>
						<td id="s64" onclick="nextMove6(this);"></td>
						<td id="s65" onclick="nextMove6(this);"></td>
						<td id="s66" onclick="nextMove6(this);"></td>
					</tr>
					<tr>
						<td id="s67" onclick="nextMove6(this);"></td>
						<td id="s68" onclick="nextMove6(this);"></td>
						<td id="s69" onclick="nextMove6(this);"></td>
					</tr>
				</table>
				<p><button id="msg6" onclick="startGame6();">
				Press to Start #6</button></p>
			</div>
		</div>
		<div class="outerRow">
			<div class="board" id="board7">
				<table>
					<tr>
						<td id="s71" onclick="nextMove7(this);"></td>
						<td id="s72" onclick="nextMove7(this);"></td>
						<td id="s73" onclick="nextMove7(this);"></td>
					</tr>
					<tr>
						<td id="s74" onclick="nextMove7(this);"></td>
						<td id="s75" onclick="nextMove7(this);"></td>
						<td id="s76" onclick="nextMove7(this);"></td>
					</tr>
					<tr>
						<td id="s77" onclick="nextMove7(this);"></td>
						<td id="s78" onclick="nextMove7(this);"></td>
						<td id="s79" onclick="nextMove7(this);"></td>
					</tr>
				</table>
				<p><button id="msg7" onclick="startGame7();">
				Press to Start #7</button></p>
			</div>
			<div class="board" id="board8">
				<table>
					<tr>
						<td id="s81" onclick="nextMove8(this);"></td>
						<td id="s82" onclick="nextMove8(this);"></td>
						<td id="s83" onclick="nextMove8(this);"></td>
					</tr>
					<tr>
						<td id="s84" onclick="nextMove8(this);"></td>
						<td id="s85" onclick="nextMove8(this);"></td>
						<td id="s86" onclick="nextMove8(this);"></td>
					</tr>
					<tr>
						<td id="s87" onclick="nextMove8(this);"></td>
						<td id="s88" onclick="nextMove8(this);"></td>
						<td id="s89" onclick="nextMove8(this);"></td>
					</tr>
				</table>
				<p><button id="msg8" onclick="startGame8();">
				Press to Start #8</button></p>
			</div>
			<div class="board" id="board9">
				<table>
					<tr>
						<td id="s91" onclick="nextMove9(this);"></td>
						<td id="s92" onclick="nextMove9(this);"></td>
						<td id="s93" onclick="nextMove9(this);"></td>
					</tr>
					<tr>
						<td id="s94" onclick="nextMove9(this);"></td>
						<td id="s95" onclick="nextMove9(this);"></td>
						<td id="s96" onclick="nextMove9(this);"></td>
					</tr>
					<tr>
						<td id="s97" onclick="nextMove9(this);"></td>
						<td id="s98" onclick="nextMove9(this);"></td>
						<td id="s99" onclick="nextMove9(this);"></td>
					</tr>
				</table>
				<p><button id="msg9" onclick="startGame9();">
				Press to Start #9</button></p>
			</div>
		</div>
	</div>
	<!-- this function "RELOADS" the game and cleans all cells. 
	<button onclick="">Rules</button>
	<button onclick="">Stats</button>
	<button onclick="resetGame();">Reset</button>
	<a href="../../index.php" class="button" role="button">Close</a> -->
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


<script src="js/tttUlt.js" defer></script>	

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
