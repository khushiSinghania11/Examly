<?php
session_start();
include "db_configure.php";

//initialize score
$num_exams = isset($_SESSION['num_exams']) ? $_SESSION['num_exams'] : 0;
$pass_exams = isset($_SESSION['pass_exams']) ? $_SESSION['pass_exams'] : 0;
$fail_exams = isset($_SESSION['fail_exams']) ? $_SESSION['fail_exams'] : 0;
$score = 0;

//loop through each question submitted
foreach($_POST as $key => $value) {
    if(substr($key, 0, 1) == 'q') { //check if it's a question (assumes question input names start with 'q')
        $question_id = substr($key, 1); //get the question id from the input name
        $selected_option = $value; //get the selected option from the input value

        //get the correct option from the questions table
        $sql = "SELECT correct_option,test_id FROM questions WHERE question_id = $question_id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $correct_option = $row['correct_option'];
        $test_id=$row['test_id'];
        $_SESSION['test_id']=$row['test_id'];

        //check if the selected option matches the correct option
        if($selected_option == $correct_option) {
            $score++; //increment score if answer is correct
        }else{
            $score--;
        }
    }
}

//insert the student's score into the database
$sql=mysqli_query($conn,"INSERT INTO `collect_data` (`test_id`,`score`) VALUES ('$test_id','$score')");
//display the score to the student
if($score>=4){$pass_exams+=1;}else{$fail_exams+=1;}
$num_exams += 1;
  // Redirect to dashboard
$_SESSION['score']=$score;
$_SESSION['pass_exams']=$pass_exams;
$_SESSION['num_exams']=$num_exams;
$_SESSION['fail_exams']=$fail_exams;
header("Location:result_page.php");
?>
