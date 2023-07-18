
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examly</title>
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
    <style>
        
        * {
            margin: 0px;
            padding: 0px;
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

        .main {
            margin-top: 56px;
            border: 2px solid black;
            overflow: auto;
            clear: both;
            height: 800px;
            width: 100%;

        }

        .image {
            /* border: 1px solid rgb(54, 219, 79); */
            /* background-color: purple; */
            background-image: url('background_image.jpg');
            background-attachment: fixed;
            background-color: purple;


            background-size: 100% 100%;
            width: 100%;
            height: 100%;
            display: inline-block;
            clear: both;
        }

        .hero_text {
            /* border: 2px solid rgb(54, 219, 79); */
            height: 100%;
            float: left;

            width: 60%;

        }

        .text {
            /* border: 2px solid rgb(54, 219, 79); */

            color: white;
            font-size: 100px;
            font-family: 'Abril Fatface', cursive;
            margin-left: 80px;
            margin-right: 80px;
            margin-top: 120px;
            padding-bottom: 40px;
            border-bottom: 3px solid white;
            /* margin-bottom: 150px; */


        }

        .sub_text {
            /* border: 2px solid rgb(54, 219, 79); */
            margin-left: 80px;
            margin-right: 80px;
            margin-top: 40px;
            font-size: 20px;
            color: white;
            font-family: 'Inter', sans-serif;





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

        a:hover {
            text-decoration: underline;
            color: rgb(228, 226, 226);
            /* font-size: 20px; */
        }

        .log_in {
            /* border: 2px solid rgb(77, 36, 190); */
            width: 40%;
            float: right;
            height: 100%;
            display: inline-block;
            /* clear: both; */



        }

        .login_form {
            background-color: white;
            /* border: 2px solid rgb(77, 36, 190); */

            opacity: 90%;
            padding-top: 67px;
            padding-bottom: 87px;
            font-size: 13px;
            margin-top: 166px;
            margin-right: 84px;
            border-radius: 20px;
            padding-left: 50px;
            padding-right: 50px;

            height: 254px;
        }

        .login_form h2 {
            font-family: 'Poppins';
            /* border: 2px solid rgb(77, 36, 190); */
            font-weight: bold;
            color: #222;
            font-family: Poppins;
            font-size: 36px;
        }
        
        input[type=text] {
            margin-top: 33px;
            padding: 6px 30px;
            width: 80%;
            height: 35px;
            /* border: 1px solid black; */
            /* border-radius: 5px; */
            border: none;
            border-bottom: 1px solid black;
            background-color: white;
        }
        input[type=password] {
            margin-top: 22px;
            padding: 6px 30px;
            width: 80%;
            height: 35px;
            /* border: 1px solid black; */
            /* border-radius: 5px; */
            border: none;
            border-bottom: 1px solid black;
            background-color: white;
        }
        input[type=submit] {
            /* color: white; */
            /* border: 2px solid black; */
            border: none;
            /* margin: 5px; */
            margin-top: 33px;

            border-radius: 5px;
            background-color: #6dabe4;
            color: #fff;
            font-family: Lato, sans-serif;
            text-align: center;
            /* padding: 10px;
             */
             padding: 15px 39px;
            float: left;
        }
        input[type=submit]:hover{
            cursor:pointer;
            background-color: #3a80c1;
        }
        .error {

            background: #F2DEDE;

            color: #0c0101;

            padding: 10px;

            width: 95%;

            border-radius: 5px;

            margin: 20px auto;

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
            <a href="registration.php">Student Registration</a>
            <a href="registration.php">Teacher Registrataion</a>
            <a href="teacher_login.php">Teacher Login</a>
            <a href="#">Contact Us</a>

        </div>
    </nav>

    <div class="main">
        <div class="image">
            <div class="hero_text">

                <div class="text">
                    Your success story starts here.
                </div>
                <div class="sub_text">
                    Empowering the education sector with innovative and reliable exam solutions.
                </div>
            </div>



            <div class="log_in">

                <div class="login_form">
                    <h2 class="form-title">Sign up</h2>
                    <form action="login.php" method="post">
                    <?php if (isset($_GET['error'])) { ?>

                        <p class="error"><?php echo $_GET['error']; ?></p>

                    <?php } ?>
                        <div class="form-group">

                            <input type="text" name="username" id="username" placeholder="Your Name" />
                        </div>
                        <div class="form-group">

                            <input type="password" name="password" id="password" placeholder="Password" />
                        </div>

                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                        </div>
                    </form>


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

</body>
</html>
