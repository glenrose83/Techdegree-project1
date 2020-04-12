<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
$quotes[] =[
    'source' => 'Brokeback Mountain',
    'quote' => 'I wish I knew how to quit you', 
    'year' => '2005',
]; 

$quotes[] =[
    'source' => 'The Dark Knight',
    'quote' => 'Why so serious?', 
    'year' => '2008',
]; 

$quotes[] =[
    'source' => 'Taxi Driver',
    'quote' => 'You talking to me?', 
    'year' => '1976',
]; 

$quotes[] =[
    'source' => 'Sudden Impact',
    'quote' => 'Go ahead, make my day.', 
    'year' => '1983',
]; 

$quotes[] =[
    'source' => 'Dr. No',
    'quote' => 'Bond. James Bond.', 
    'year' => '1962',
]; 

$quotes[] =[
    'source' => 'A few good men',
    'quote' => 'You can\'t handle the truth!', 
    'year' => '1992',
]; 

$quotes[] =[
    'source' => 'Scarface',
    'quote' => 'Say "hello" to my little friend!', 
    'year' => '1983',
]; 


// Create the getRandomQuuote function and name it getRandomQuote
// We find a random number with rand-bulit in function and define lowest number 0 and highest number 6 (since there is 6 quotes).

function getRandomQuote(){
    $randomNumber = rand(0, 7);
    
    return $randomNumber;

    //selecting a quote
    //global $quotes;
    //$selectedQuote = $quotes[$randomNumber]
    //return $selectedQuote;
};

// Create the printQuote funtion and name it printQuote
// With this function we just echo strings
function printQuote($quoteToPrint) {
    echo $quoteToPrint;
};


?>