<?php

if (!is_numeric($argv[1]) || !is_numeric($argv[2])) {
	echo "I have no idea what you're talking about!\n";
	exit(1);
}
//computer picks random number between 1 and 100

if ($argc == 3) {
 echo "Please guess a number between $argv[1] and $argv[2]";
}

$number = rand ($argv[1], $argv[2]); 


//count variable
$number_of_guesses = 1;


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

exit(0); 