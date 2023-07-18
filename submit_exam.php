<?php 
session_start();
include "db_configure.php";
$test_name = $_POST['selected_test']; //assuming the test name is submitted via a form
$sql = "SELECT test_id FROM tests WHERE test_name = '$test_name'";
$result = mysqli_query($conn, $sql);

//check if test exists in the tests table
if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $test_id = $row['test_id'];

    //get questions based on test_id
    $sql = "SELECT * FROM questions WHERE test_id = $test_id";
    $result = mysqli_query($conn, $sql);
    echo "<form method='post' action='result.php'>"; //assuming submit_exam.php is the page that submits the answers
    while($row = mysqli_fetch_assoc($result)) {
        echo "<p>".$row['question_text']."</p>"; //display question text
        echo "<input type='radio' name='q".$row['question_id']."' value='1'>".$row['option1']."<br>"; //display option 1
        echo "<input type='radio' name='q".$row['question_id']."' value='2'>".$row['option2']."<br>"; //display option 2
        echo "<input type='radio' name='q".$row['question_id']."' value='3'>".$row['option3']."<br>"; //display option 3
        echo "<input type='radio' name='q".$row['question_id']."' value='4'>".$row['option4']."<br>"; //display option 4
    }
    echo "<input type='submit' value='Submit'>"; //submit button
    echo "</form>";
}
else {
    echo "Test not found.";
}
