<?php
// geting the current hour in 24-hour format
$hour = date('G');

// determining the meal based on the time of day
if ($hour >= 5 && $hour < 9) {
    $meal = "Breakfast: Bananas, Apples, and Oats";
} elseif ($hour >= 12 && $hour < 14) {
    $meal = "Lunch: Fish, Chicken, and Vegetables";
} elseif ($hour >= 19 && $hour < 21) {
    $meal = "Dinner: Steak, Carrots, and Broccoli";
} else {
    $meal = "The animals are not being fed right now.";
}

// outputting the result
echo "<h1>Quirky Zoo Management System</h1>";
echo "<p>The current time is: " . date('h:i A') . "</p>";
echo "<p>$meal</p>";
?>

<?php
// simulating user input
$number = 15; // replacing this with any number for testing

// determining the magic number based on the rules
if ($number % 3 == 0 && $number % 5 == 0) {
    $magicNumber = "FizzBuzz";
} elseif ($number % 3 == 0) {
    $magicNumber = "Fizz";
} elseif ($number % 5 == 0) {
    $magicNumber = "Buzz";
} else {
    $magicNumber = $number;
}

// outputting the result
echo "<h1>The Magic Number Game</h1>";
echo "<p>The input number is: $number</p>";
echo "<p>The magic number is: $magicNumber</p>";
?>