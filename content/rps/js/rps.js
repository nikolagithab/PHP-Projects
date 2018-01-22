// Declares and Initializes global variable.
var userOption = undefined;

function playWith(option){
	// Updates previously selected item (if applicable)
	if (userOption != undefined) {
		userSelection = document.getElementById(userOption);
		// Removes the green color from a "clicked" button.
		userSelection.style.color = "black";
	}	 		
	// Selects the user option and adds a green color
	userOption = option;
	userSelection = document.getElementById(option);
	userSelection.style.color = "green";
}

// Evaluates relations between items based on game rules.
function evaluate(userSelection, computerSelection) {
	if(userSelection == undefined) {
		return "Please, click on a selection to play."
	}	

	if (userSelection == computerSelection) {
		return "It is a tie!";
	}

	if (userSelection == "rock") {
		if (computerSelection == "scissors") {
			return "Congratulations! You won!";
		} 
		else {
			return "The computer won. Try again.";
		}
	}

	else if (userSelection == "paper") {
		if (computerSelection == "rock") {
		return "Congratulations! You won!" ;
		} 
		else if("scissors") {
		return "The computer won. Try again." ;
		}
	}

	else if (userSelection == "scissors") {
		if (computerSelection == "rock") {
		return "The computer won. Try again.";
		}
		else {
		return "Congratulations! You won!";
		}
	}
}

// Initializes local variable for random Computer play selection.
function startGame(){
	var computerOption = Math.random();
	if (computerOption <0.34){
		computerOption = "rock";
	}else if(computerOption <=0.67){
		computerOption = "paper";
	}else{
		computerOption = "scissors";
	}

	// Stores the output result and displays message.
	resultMessage = evaluate(userOption, computerOption);

	document.getElementById("result").innerHTML = 
	"<p>User: " + userOption + "  vs.  Computer: " 
	+ computerOption + "</p> <p>" + resultMessage + "</p>";
}