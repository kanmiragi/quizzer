<?php session_start();?>

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
           <h2>Well Done</h2>
           <p>Congrats, you have completed the Test.</p>
           <p>Final Score: <?php echo $_SESSION['score']; ?> </p>
           <a href="questions.php" class="start">Repeat Test</a>
        </div>
    </main>
        <footer>
            <div class="container">
                Copyrights &copy; 2023, Kanmiragi.
            </div>
        </footer>
</body>
</html>  