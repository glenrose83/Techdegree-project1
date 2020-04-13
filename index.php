<?php


//here we include the functions so we can use them.
include_once 'inc/functions.php';

      $selected = getRandomQuote();
      
       if (isset($selected['quote'])) {
          $quote = $selected['quote'];
       } else {
          $quote = "";
       }

       if (isset($selected['source'])) {
          $movie = $selected['source'];
       } else {
          $movie = "";
       }

       if (isset($selected['year'])) {
          $year = $selected['year'];
       } else {
          $year = "";
       }
       

?>  

<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="container">
    <div id="quote-box">
      <p class="quote"><?php printQuote($quote); ?></p>
      <p class="source"><?php printQuote($movie); ?><span class="year"><?php printQuote($year); ?></span></p>
      </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>

