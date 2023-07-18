<?php
session_start();
include "db_configure.php";
    $score=$_SESSION['score'];
    $pass_exams=$_SESSION['pass_exams'];
    $num_exams=$_SESSION['num_exams'];
    $fail_exams=$_SESSION['fail_exams'];
    $test_id=$_SESSION['test_id'];
    $sql = "SELECT test_name FROM tests WHERE test_id = $test_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $test_name = $row['test_name'];
?>
<html>
    <head>
        <title>View results</title>
    </head>
    <body>
        <p>Test You had appeared for: <?php echo $test_name; ?></p>
        <p>Your Score: <?php echo $score; ?></p>
        <p><?php if($score<4){echo "You have failed the test ".$test_name;}else{echo "You have passed the test ".$test_name;}?></p>
        <p>Number of tests you have passed till now: <?php echo $pass_exams;?></p>
        <p>Number of tests you have failed till now: <?php echo $fail_exams;?></p>
        <p>Number of tests you have appeared till now: <?php echo $num_exams;?></p>
        <a href="student_dashboard.php">Back To Home Page</a>
    </body>
<html>
