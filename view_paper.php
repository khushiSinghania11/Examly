<?php
session_start();
include "db_configure.php";
$test_name=$_SESSION['test_name'];
$question1=$_SESSION['question1'];
$option1_1=$_SESSION['option1_1'];
$option1_2=$_SESSION['option1_2'];
$option1_3=$_SESSION['option1_3'];
$option1_4=$_SESSION['option1_4'];
$correct_option1=$_SESSION['correct_option1'];
$question2=$_SESSION['question2'];
$option2_1=$_SESSION['option2_1'];
$option2_2=$_SESSION['option2_2'];
$option2_3=$_SESSION['option2_3'];
$option2_4=$_SESSION['option2_4'];
$correct_option2=$_SESSION['correct_option2'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Upload Test! </title>
</head>
<body>
    <p><?php echo $test_name;?></p>
    <p><?php echo $question1;?></p>
    <p><?php echo $option1_1;?></p>
    <p><?php echo $option1_2;?></p>
    <p><?php echo $option1_3;?></p>
    <p><?php echo $option1_4;?></p>
    <p><?php echo $question2;?></p>
    <p><?php echo $option2_1;?></p>
    <p><?php echo $option2_2;?></p>
    <p><?php echo $option2_3;?></p>
    <p><?php echo $option2_4;?></p>
    <a href="home_teacher.php">Back</a>
</body>
</html>
