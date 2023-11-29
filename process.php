<?php include 'queries/db.php';?>

<?php session_start(); ?>
<?php 
    //check to see if scores is set.
    if(!isset($_SESSION['score'])) {
        $_SESSION['score'] = 0;
    }
    //check if the submit button has been used
    if($_POST){
     $number = $_POST['number'];
     $selected_choice = $_POST['choice'];
     //$the next variable redirects us to the next question
     $next = $number+1;
       //Get total questions 
       $query = " SELECT * FROM `questions` ";
       //Get result
      $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
      $total = $results->num_rows;
         /* Below, we get the correct */
         $query = "SELECT * FROM `choices` WHERE question_number =
         $number AND is_correct = 1";
         //get result
         $results= $mysqli->query($query) or die($mysqli->error.__LINE__);  
            //GET ROW
            $row = $results -> fetch_assoc();
            //get correct choice
            $correct_choice = $row['id'];
              //compare for correctness
        if($correct_choice == $selected_choice){
            //Answer is correct.
            $_SESSION['score']+5;
        } 
         //checking if it is the last question 
         if($number == $total){
            //If it is the last question, it is to redirect to final.php
            header("Location:final.php");
            exit();
        } else{
            //If it is not the last question, it is to move to the next question on question.php
            header("Location:questions.php?n=".$next);
        }
 
    
    //get correct choice
    $selected_choice = $row['id'];  
      
       
    }
?>
 