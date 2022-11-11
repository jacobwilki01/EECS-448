<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Score / Other Variables
$score = 0;

// Obtaining answers.
$answer1 = $_POST["Question1"];
$answer2 = $_POST["Question2"];
$answer3 = $_POST["Question3"];
$answer4 = $_POST["Question4"];
$answer5 = $_POST["Question5"];

// Solutions
$solution1 = "2022";
$solution2 = "Blue";
$solution3 = "42";
$solution4 = "Lab 06";
$solution5 = "Let you down";

// Obtaining a Solution Page
echo "1. What year is it? <br>";
echo "&emsp; Your answer: " . $answer1 . "<br>";
echo "&emsp; Correct answer: " . $solution1 . "<br>";
echo "2. What color is the sky? <br>";
echo "&emsp; Your answer: " . $answer2 . "<br>";
echo "&emsp; Correct answer: " . $solution2 . "<br>";
echo "3. What is the meaning of life, the universe, and everything? <br>";
echo "&emsp; Your answer: " . $answer3 . "<br>";
echo "&emsp; Correct answer: " . $solution3 . "<br>";
echo "4. What Lab # is this? <br>";
echo "&emsp; Your answer: " . $answer4 . "<br>";
echo "&emsp; Correct answer: " . $solution4 . "<br>";
echo '5. (Finish the Lyric) "Never gonna give you up, never gonna ..." <br>';
echo "&emsp; Your answer: " . $answer5 . "<br>";
echo "&emsp; Correct answer: " . $solution5 . "<br>";
if ($answer1 = $solution1){
    $score += 1;
}
if ($answer2 = $solution2){
    $score += 1;
}
if ($answer3 = $solution3){
    $score += 1;
}
if ($answer4 = $solution4){
    $score += 1;
}
if ($answer5 = $solution5){
    $score += 1;
}
echo "<br> Correct Answers: " . $score . ", so you get a score of " . ($score * 20). "%.";
?>