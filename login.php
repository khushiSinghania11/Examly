<?php 

session_start(); 

include "db_configure.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['username']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM `login_details` WHERE name='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);
            if($row['name'] === $uname && $row['password'] === $pass){
                if($row['role'] === 'Student'){
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['password']= $row['password'];
                    $_SESSION['contact'] = $row['contact'];
                    $_SESSION['enrollment'] = $row['enrollment'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['university'] = $row['university'];
                    header("Location: student_dashboard.php");
                    exit();
                }else{
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['password']= $row['password'];
                    header("Location: home_teacher.php");
                    exit();
                }

            }else{
                header("Location: index.php?error=Incorect User name or password");
                exit();
            }
        }else{
            header("Location: index.php?error=Incorect User name or password");
            exit();
        }

    }
}else{

    header("Location: index.php");

    exit();

}
?>
