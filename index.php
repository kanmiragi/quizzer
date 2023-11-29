<?php
    include 'queries/db.php';
?>
<?php
    /*Get Total number of Questions Dynamically in to index.php */
 $query = "SELECT * FROM questions";
 //get results
 $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;



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
            <h2>Examinations and Tests Machine. </h2>
                <p>A tool to test the
             Knowledge of students in the required fields of endeavour</p>
             <ul>
                <li><strong>Number of Questions:</strong><?php echo $total;?></li> <br>
                <li><strong>Type of Test/Exam:</strong>Multiple Choice Questions</li> <br>
                <li><strong>Allotted Time:</strong> <?php echo $total * 2;?>Minute(s) </li>
             </ul>
               <a href="questions.php?n=1" class="start">Take Test.</a>
        </div>
    </main>
        <footer>
            <div class="container">
                Copyrights &copy; 2023, Kanmiragi.
            </div>
        </footer>
</body>
</html>