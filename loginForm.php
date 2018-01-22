<?php
$servername = "localhost";
$username = "petrovsn";
$password = "prosto@grav&T";
$dbname = "petrovsn_test";
// Create connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
	//echo "connection successful";
}
$sql = "SELECT UserId, password, Name FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		// check username and password 
		if (isset($_POST["username"]) == $row["UserId"] && isset($_POST["password"]) == $row["password"]) {
			session_start();
			$_SESSION["username"] = $_POST["username"];
			echo "Welcome back, " . $_POST["username"];
		}
    }
    //echo "</table>";
} else {
    echo "0 results";
}
//TOFIX:  Call to undefined method PDO::close
$conn->close();
$this->db = null;
?>

<!DOCTYPE html>
<html>
<title>login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- 
Author: 	Ellen Bajcar et al
Program: 	loginForm.html
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
<style>
body { background-color: #111; color: #eee; max-width:500px; margin: auto;}
main { color: black; }
</style>
<body>
	<h2>Login</h2>
	<main class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
	<a href="index.php"
		  class="w3-button w3-xlarge w3-hover-red w3-display-topright" 
		  title="Close">&times;</a>	
		<form class="w3-container w3-padding-32" method="POST" >
			<div class="w3-section">
				<label><b>Enter Username</b></label>
				<input class="w3-input w3-border w3-margin-bottom" type="text" name="username" required>
				<label><b>Enter Password</b></label>
				<input class="w3-input w3-border" type="password" name="password" required>
				<input type="hidden" name="curdate" value="2017-07-24">
				<button class="w3-button w3-block w3-orange w3-section w3-padding" type="submit">Login</button>
				<div><a href="index.php" class="w3-button w3-small w3-hover-orange">Back to Main Page</a></div>
			</div>
		</form>  	
		<!-- Footer -->
		<footer class="w3-center">
			<address>Web Programming @ Sheridan College</address>
			<small>Powered by 
				<a href="https://www.w3schools.com/w3css/default.asp" 
						target="_blank" title="W3.CSS" class="w3-hover-opacity">w3.css</a>
			</small>	
		</footer>	
	</main>		  
</body>
</html>