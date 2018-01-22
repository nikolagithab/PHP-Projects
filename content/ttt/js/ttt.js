/* Styles for TicTacToe game on white background with green grid.*/
			/* The function executes when user loads
			page or clicks button "Start A Game". */
			function startGame() {  // Clears out all boxes.
				for (var i = 1; i <= 9; i++) { 
				clearBox(i);  // Activates following function.
				}

			// Replaces values of s1,s2,s3,...s9 with empty value.
			function clearBox(number) {   
				document.getElementById("s" + number).innerText = "";
			}
			
			turn = "X"; // Initializes player's turn with "X".
			// Evaluates 50:50 chances for both players to start a game.
			if (Math.random() < 0.5) { 
				turn = "O";  // Updates player's turn "X" to "O" conditionally.
			}
			
			winner = null; // Empties value for winner.
			
			// Provides info. who starts first.
			setMessage(turn + " starts first."); 
			}

			// Gets element of "message" and then sets it's updated value.
			function setMessage(msg) {  
				document.getElementById("message").innerText = msg;
			}
			
			// The function executes when user clicks on Square.
			function nextMove(cell) {
				// Represents the case when there is a winner.
				if (winner != null) {  
					// Provides info. who won.
					setMessage(winner + " already won the game."); 
				// Represents the case when game is in progress.
				} else if (cell.innerText == "") { 
					// Updates "empty cell" to "X" or "O" conditionally.
					cell.innerText = turn;  
					switchTurn();  // Activates following function.
				} else { // Represents the case when a Square in not available.
					setMessage("That Square is Already Used.");  
				}
			}

			// The function executes conditionally within "nextMove" function.
			function switchTurn() {
				// Represents the case when a turn becomes a winner.
				if (checkForWinner(turn)) {  
					setMessage("Congratulations, " + turn + "!  You won!");
					winner = turn; // Updates from turn to winner conditionally.
				// Represents the case when game must go on.
				} else if (turn == "X") {  
					turn = "O";  // Switches from "X" to "O" conditionally.
					setMessage("It's " + turn + "'s turn!");
				} else {  // Represents the case when there is a winner.
					turn = "X";  // Updates from "O" to "X" conditionally.
					setMessage("It's " + turn + "'s turn!");
				}
			}

			/* The function executes conditionally within "switchTurn" function.
			   Returns boolean value for test of existance of "winning" line.*/
			function checkForWinner(move) {  
				// Declares and Initializes a local variable "result".
				var result = false;  
				// Compares if any of 9 line combinations is true.
				if (checkLine(1, 2, 3, move) ||  
					checkLine(4, 5, 6, move) ||
					checkLine(7, 8, 9, move) || 
					checkLine(1, 4, 7, move) ||
					checkLine(2, 5, 8, move) ||
					checkLine(3, 6, 9, move) ||
					checkLine(1, 5, 9, move) ||
					checkLine(3, 5, 7, move)) {
					
					result = true;
				}
				return result;
			}

			/*  The function executes conditionally within "checkForWinner" 
				function. Returns boolean value for test of three same tokens 
				in a line. */
			function checkLine(a, b, c, move) {  
				// Declares and Initializes a local variable "result".
				var result = false;  
				// Compares if all 4 parameters are equal.
				if (getBox(a) == move && 
					getBox(b) == move && 
					getBox(c) == move) { 
					result = true;// Updates result false to true conditionally.
				}
				return result;
			}

			/*  The function executes within "checkLine" function. 
				Returns current value for Squares: s1,s2,s3,..s9 in the table.*/
			function getBox(number) {  
				return document.getElementById("s" + number).innerText;
			}
