<?php

//computer picks random number between 1 and 100
$number = rand (1 , 100); 

//count variable
$number_of_guesses = 1;

//Ask user to guess a number between 1 and 100
fwrite(STDOUT, 'Guess a number between 1 and 100');

//Get the input from the user 
$guess = fgets(STDIN); 

//Test to see if user's guess is too high, too low, or correct 
while ($guess != $number) {
	if ($guess > $number) {
	  fwrite(STDOUT, "LOWER\n");
	  $guess = fgets(STDIN); 

} elseif ($guess < $number) {
	  fwrite(STDOUT, "HIGHER\n");
	  $guess = fgets(STDIN); 

}
 $number_of_guesses++;
}
fwrite(STDOUT, "GOOD GUESS! You guessed correctly in $number_of_guesses guesses!\n");