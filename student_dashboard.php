<?php 
include "db_configure.php";
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['password'])){
  $num_exams = isset($_SESSION['num_exams']) ? $_SESSION['num_exams'] : 0;
  $score = isset($_SESSION['score']) ? $_SESSION['score'] : 0;
  $pass_exams = isset($_SESSION['pass_exams']) ? $_SESSION['pass_exams'] : 0;
  $fail_exams = isset($_SESSION['fail_exams']) ? $_SESSION['fail_exams'] : 0;
  $totalScore = ($_SESSION['score'] ?? 0);
  $total=0;
  $total+=$totalScore;
  $test_query = mysqli_query($conn, "SELECT * FROM tests");
  $name=$_SESSION['name'];
  $enrollment=$_SESSION['enrollment'];
  $contact=$_SESSION['contact'];
  $email=$_SESSION['email'];
  $university=$_SESSION['university'];
  if(mysqli_num_rows($test_query) == 0) {
    echo "No tests created by teacher";
}else{
  /*$test_name=$_POST['selected_test'];*/
  $test_query = mysqli_query($conn, "SELECT * FROM tests");
?>

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="studentDashboard.css">
    <!-- Boxicons CDN Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Open+Sans:wght@300;600&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Inter&family=Open+Sans:wght@300;600&display=swap"
        rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        }

        .navigationbar {
        background-color: black;
        /* border: 2px solid black; */
        position: fixed;
        top: 0%;
        left: 0%;
        right: 0%;
        margin: 0px;

        }

        .name {
        display: inline-block;
        color: white;
        padding: 10px;
        font-size: 30px;
        font-family: 'Abril Fatface', cursive;
        margin-left: 20px;
        /* font-family: 'Frank Ruhl Libre', serif; */
        font-weight: bold;
        /* border: 2px solid rgb(249, 248, 248); */
        }

        .links {
        margin-right: 10px;

        display: inline-block;
        padding: 10px;
        font-size: 20px;
        float: right;
        font-family: 'Frank Ruhl Libre', serif;
        /* border: 2px solid rgb(249, 246, 246); */
        margin-top: 8px;
        }

        .links a {
        color: white;
        /* font-family: 'Inter', sans-serif; */
        /* font-family: 'Open Sans', sans-serif;
        */
        font-family: 'Inter', sans-serif;
        font-family: 'Open Sans', sans-serif;
        text-decoration: none;
        font-size: 15px;
        /* border: 2px solid rgb(246, 243, 243); */
        margin: 8px;
        font-weight: bold;
        }

        a:hover {
        text-decoration: underline;
        color: rgb(228, 226, 226);
        /* font-size: 20px; */
        }
        td, th {
        text-align: left;
        padding-right: 100px;
        padding-left: 10px;
        }


        .home-section .home-content{
        position: relative;
        padding-top: 104px;
        }
        .home-content .overview-boxes{
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 0 20px;
        margin-bottom: 26px;
        }
        .overview-boxes .box{
        display: flex;
        align-items: center;
        justify-content: center;
        width: calc(100% / 4 - 15px);
        background: #fff;
        padding: 15px 14px;
        border-radius: 12px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        }
        .overview-boxes .box-topic{
        font-size: 20px;
        font-weight: 500;
        }
        .home-content .box .number{
        display: inline-block;
        font-size: 35px;
        margin-top: -6px;
        font-weight: 500;
        }
        .home-content .box .indicator{
        display: flex;
        align-items: center;
        }
        .home-content .box .indicator i{
        height: 20px;
        width: 20px;
        background: #8FDACB;
        line-height: 20px;
        text-align: center;
        border-radius: 50%;
        color: #fff;
        font-size: 20px;
        margin-right: 5px;
        }
        .box .indicator i.down{
        background: #e87d88;
        }
        .home-content .box .indicator .text{
        font-size: 12px;
        }
        .home-content .box .cart{
        display: inline-block;
        font-size: 32px;
        height: 50px;
        width: 50px;
        background: #cce5ff;
        line-height: 50px;
        text-align: center;
        color: #66b0ff;
        border-radius: 12px;
        margin: -15px 0 0 6px;
        }
        .home-content .box .cart.two{
        color: #2BD47D;
        background: #C0F2D8;
        }
        .home-content .box .cart.three{
        color: #ffc233;
        background: #ffe8b3;
        }
        .home-content .box .cart.four{
        color: #e05260;
        background: #f7d4d7;
        }
        .home-content .total-order{
        font-size: 20px;
        font-weight: 500;
        }
        .home-content .sales-boxes{
        display: flex;
        justify-content: space-between;
        /* padding: 0 20px; */
        }

        /* left box */


        .title{
        box-shadow: inset 0px -3px #851bff;
        font-weight: 10px;
        text-align: center;
        margin-left: 250px;
        margin-right: 250px;
        margin-bottom: 20px;
        }

        .stu-details{
        padding-bottom:5px;
        }
        #title{
        box-shadow: inset 0px -3px #851bff;
        font-weight: 10px;
        font-size: 20px;
        text-align: center;
        margin-bottom: 20px;
        margin-right:10px;
        margin-left:100px;
        }
        .home-content .sales-boxes .recent-sales{
        width: 65%;
        background: #fff;
        padding: 20px 30px;
        margin: 0 20px;
        border-radius: 12px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }
        .home-content .sales-boxes .sales-details{
        display: flex;
        align-items: center;
        justify-content:space-between;
        }
        .sales-boxes .box .title{
        font-size: 24px;
        font-weight: 500;
        /* margin-bottom: 10px; */
        }
        .sales-boxes {
        font-size: 20px;
        font-weight: 500;
        }
        .sales-boxes {
        list-style: none;
        margin: 8px 0;
        }
        .sales-boxes .sales-details a{
        font-size: 18px;
        color: #333;
        font-size: 400;
        text-decoration: none;
        }
        .sales-boxes .box .button{
        width: 100%;
        display: flex;
        justify-content: flex-end;
        }
        .sales-boxes .box .button a{
        color: #fff;
        background: #851bff;
        padding: 4px 12px;
        font-size: 15px;
        font-weight: 400;
        border-radius: 4px;
        text-decoration: none;
        transition: all 0.3s ease;
        }
        .sales-boxes .box .button a:hover{
        background:  #4f00a8;
        }


        /* Right box */
        .home-content .sales-boxes .top-sales{
        width: 35%;
        background: #fff;
        padding: 20px 30px;
        margin: 0 20px 0 0;
        border-radius: 12px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }
        .sales-boxes .top-sales li{
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 10px 0;
        }


        .sales-boxes .top-sales li .product,
        .price{
        font-size: 17px;
        font-weight: 400;
        color: #333;
        }

        .bottom_bar {
        background-color: black;
        height: 300px;
        }

        .bottom_bar .name {
        /* border: 2px solid white; */
        margin-top: 50px;
        margin-left: 50px;
        font-size: 30px;

        }

        .bottom_info {
        /* border: 2px solid white; */
        margin-top: 50px;
        margin-right: 50px;
        font-size: 15px;
        /* font-family: 'Frank Ruhl Libre', serif; */
        font-family: 'Open Sans', sans-serif;
        color: white;
        float: right;
        }

        .bottom_info p {
        margin: 10px;
        font-weight: bold;
        /* font-family: 'Frank Ruhl Libre', serif; */

        }

        .bottom_info a {
        margin: 10px;
        /* font-weight: bold; */
        /* border: 2px solid white; */
        display: block;
        text-decoration: none;
        color: white;
        /* font-family: 'Frank Ruhl Libre', serif; */

        }
        /* Responsive Media Query */
        h2{
        text-align: center;
        font-size: 40px;
        box-shadow: inset 0px -3px #851bff;
        margin-left: 350px;
        margin-right: 350px;
        margin-bottom: 50px;
        }
      .material-symbols-outlined {
        font-size: 60px;
        padding-left: 25px;
        font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 200,
        'opsz' 100
      }
      </style>
   </head>
<body>
  
  <nav class="navigationbar">
    <div class="name">
        Examly.
    </div>
    <div class="links">
        <a href="#">Home</a>
        <a href="#">Student Registration</a>
        <a href="#">Teacher Registrataion</a>
        <a href="#">Teacher Login</a>

        <a href="#">Contact Us</a>

    </div>
</nav>
  <section class="home-section">

    <div class="home-content">
      <h2> Student Dashboard</h2>
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Attempted Exams</div>
            <div class="number"><?php echo $num_exams;?></div>
          </div>
         <span class="material-symbols-outlined">
flaky
</span>
      </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Exams Passed</div>
            <div class="number"><?php echo $pass_exams;?></div>
            <div class="indicator">
            </div>
          </div>
          <span class="material-symbols-outlined">
            add_task
            </span>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Exams Failed</div>
            <div class="number"><?php echo $fail_exams;?></div>
            <div class="indicator">
            </div>
          </div>
          <span class="material-symbols-outlined">
            cancel
            </span>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Score</div>
            <div class="number"><?php echo $total;?></div>
            <div class="indicator">
            </div>
          </div>
          <span class="material-symbols-outlined">
            functions
            </span>
        </div>
      </div>
      <form action="submit_exam.php" method="post">
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title"><h3>Exam List</h3></div>
            <div class="sales-details">
              Availabe exams: <br><?php while($row = mysqli_fetch_array($test_query)) {
              echo $row['test_name'] . " ";?>Status : <?php if($score!=0){echo "Attempted";}else{echo "Unattempted";}?>
              <?php } ?>
            </div>
            <div class="sales-details">
              Enter name of test you want to give: <input type="text" name="selected_test"/>
            </div>
            <div class="button">
              <input type="submit" value="Give Exam"/>
            </div>
            <a href="logout.php">Logout</a>
          </div>
        </form>
        <div class="top-sales box">
          <div id="title"><h3>Student Details</h3></div>
          <ul class="top-sales-details">
            <li>
              <!--<img src="images/sunglasses.jpg" alt="">-->
              <span class="stu-details"><b>Name: </b> <?php echo $name;?></span>
          </li>
          <li>
            <span class="stu-details"><b>Enrollment No: </b> <?php echo $enrollment;?></span>
          </li>
          <li>
            <span class="stu-details"><b>Phone no: </b> <?php echo $contact;?></span>
          </li>
          <li>
            <span class="stu-details"><b>Email ID: </b> <?php echo $email;?> </span>
          </li>
          <li>
            <span class="stu-details"><b>University </b> <?php echo $university;?></span>
          </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="bottom_bar">
      <div class="name">
          Examly.
      </div>
      <div class="bottom_info">

          <P>Company </P>
          <a href="#">About</a>
          <a href="#">Careers</a>
          <a href="#">Blog</a>


      </div>
      <div class="bottom_info">

          <P>Safety</P>
          <a href="#">Overview </a>


      </div>
      <div class="bottom_info">

          <P>Product</P>
          <a href="#">Overview</a>
          <a href="#">Customer stories</a>
          <a href="#">Safety standards</a>
          <a href="#">Pricing</a>
          <a href="#">Terms & policies</a>

      </div>
      <div class="bottom_info">


          <P>Research</P>
          <a href="#">Overview</a>
          <a href="#">Index</a>


      </div>
  </div>
  </section>
</body>
</html>
<?php
}}else{
  header("Location: index.php");
  exit();
}
?>
