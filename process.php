<?php
session_start();
include "db_configure.php";
// Fetch values from HTML form
$test_name = $_POST['test_name'];
$question1 = $_POST['question1'];
$option1_1 = $_POST['option1_1'];
$option1_2 = $_POST['option1_2'];
$option1_3 = $_POST['option1_3'];
$option1_4 = $_POST['option1_4'];
$correct_option1 = $_POST['correct_option1'];
$question2 = $_POST['question2'];
$option2_1 = $_POST['option2_1'];
$option2_2 = $_POST['option2_2'];
$option2_3 = $_POST['option2_3'];
$option2_4 = $_POST['option2_4'];
$correct_option2 = $_POST['correct_option2'];
// Insert test name into 'tests' table
$sql = "INSERT INTO tests (test_name) VALUES ('$test_name')";
if (mysqli_query($conn, $sql)) {
  // Get ID of the inserted test
  $test_id = mysqli_insert_id($conn);

  // Insert questions and answers into 'questions' table
  $sql = "INSERT INTO questions (test_id, question_text, option1, option2, option3, option4, correct_option)
  VALUES ('$test_id', '$question1', '$option1_1', '$option1_2', '$option1_3', '$option1_4', '$correct_option1'),
         ('$test_id', '$question2', '$option2_1', '$option2_2', '$option2_3', '$option2_4', '$correct_option2')";

  if (mysqli_multi_query($conn, $sql)) {
    // Store question_text, options and correct answer in session variables
    $_SESSION['test_name'] = $test_name;
    $_SESSION['question1'] = $question1;
    $_SESSION['option1_1'] = $option1_1;
    $_SESSION['option1_2'] = $option1_2;
    $_SESSION['option1_3'] = $option1_3;
    $_SESSION['option1_4'] = $option1_4;
    $_SESSION['correct_option1'] = $correct_option1;

    $_SESSION['question2'] = $question2;
    $_SESSION['option2_1'] = $option2_1;
    $_SESSION['option2_2'] = $option2_2;
    $_SESSION['option2_3'] = $option2_3;
    $_SESSION['option2_4'] = $option2_4;
    $_SESSION['correct_option2'] = $correct_option2;

    echo "Test and questions added successfully!";
    ?> View Paper: <a href="view_paper.php"> View Paper </a>
  <?php } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close MySQL connection
mysqli_close($conn);
?>
