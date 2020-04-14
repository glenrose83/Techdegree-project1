<?php
//We type all the quotes. 
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
    'citation' => 'Dirty Harry',
]; 

$quotes[] =[
    'source' => 'Dr. No',
    'quote' => 'Bond. James Bond.', 
    'year' => '1962',
    'citation' => 'James Bond',
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

// We find a random number with rand-bulit in function 
function getRandomQuote($array){
     
    //Counting the quotes and subtracting 1, since Count() dosent count item 0 in the array
    $items_in_array = count($array);
    $realcount = $items_in_array - 1;

    //selecting a quote from the array above
    $randomNumber = rand(0,$realcount);
    $selectedQuote= $array[$randomNumber];
    return $selectedQuote;
};

// With this function we just echo strings
function printQuote($array) {

    //Calling the getRandomQuote function to get a random quote
    $selectedQuote = getRandomQuote($array);
      
    //Assigning the quote to a varible
    $quote = "<p class='quote'>". $selectedQuote['quote'] . "</p>";
    
    //Conditionals if the source, citation or year is not availble
    if (isset($selectedQuote['source'])) {
       $movie = $selectedQuote['source'];
    } else {
       $movie = "";
    }

    if (isset($selectedQuote['citation'])) {
        $citation = "<span class='citation'>". $selectedQuote['citation'] . "</span>" ;
     } else {
        $citation = "";
     } 

    if (isset($selectedQuote['year'])) {
       $year = "<span class='year'>". $selectedQuote['year'] . "</span>";
    } else {
       $year = "";
    }      

    //Putting together the html with strings that needs to be displayed
    echo $quote. "<p class='source'>". $movie . $citation. $year . "</p>";
  
};

?>