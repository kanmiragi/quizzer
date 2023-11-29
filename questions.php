<?php include 'queries/db.php';?>
<?php session_start();?>


<?php    
 //set Question number
 $number = (int) $_GET['n'];
    //Get total questions 
    $query = " SELECT * FROM `questions` ";
    //Get result
   $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
   $total = $results->num_rows;
 /*
    In the select statement below, we write a Get Request to bring up the questions
 */
$query = "SELECT * FROM `questions`
WHERE question_number = $number";
//get results from the above query. The LINE function would give us informative details about 
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$question = $results->fetch_assoc();



//Get Choices
$number = (int)$_GET['n'];
/*
   In the select statement below, we write a Get Request to bring up the questions
*/
$query = "SELECT * FROM `choices`
WHERE question_number = $number";
//get results from the above query. The LINE function would give us informative details about 
$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Platform</title>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
<body>
    <header>
        <div class="container">
           <h1>Exam Area</h1> 
        </div>

    </header>
    <main>
        <div class="container">
            <div class="current">
                Question <?php echo $question['question_number'];?> of <?php echo $total; ?>
            </div>
            <p class="question"> <?php echo $question['text']; ?> </p>
            <form action="process.php" method="post">
               <ul class="choices">
                <?php while($row = $choices->fetch_assoc()): ?>
                    <li><input name="choice" type="radio"  
                    value="<?php echo $row['id'];?>"/><?php echo $row['text']?></li> <br> 
                    <?php endwhile ?>
            </ul>
            <input type="submit" value="Submit" />
            <!--The question number is to be passed through post and no more the Get request/URL by using Hidden-->
            <input type="hidden" name="number" value="<?php echo $number;?> ">
            </form>
        </div>
    </main>
        <footer>
            <div class="container">
                Copyrights &copy; 2023, Kanmiragi.
            </div>
        </footer>
</body>
</html> 