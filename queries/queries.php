<?php
 
 //set Question number_format
 $number = (int)$_GET['n'];
 /*
    In the select statement below, we write a Get Request to bring up the questions
 */
$query = "SELECT * FROM `questions`
WHERE question_number = $number";
//get results from the above query. The LINE function would give us informative details about 
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
$question = $result->fetch_assoc();


//Get Choices
$number = (int)$_GET['n'];
/*
   In the select statement below, we write a Get Request to bring up the questions
*/
$query = "SELECT * FROM `choices`
WHERE question_number = $number";
//get results from the above query. The LINE function would give us informative details about 
$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);


 /*Get Total number of Questions Dynamically in to index.php */
 $query = "SELECT * FROM questions";
 //get results
 $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;


?>