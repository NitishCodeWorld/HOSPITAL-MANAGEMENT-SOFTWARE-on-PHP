<?php
    session_start();
    include "sql/config.php";

    if(isset($_POST['submit'])){

    $userId = $_POST['user-id'];
    $password = $_POST['password'];
    

    if(empty($userId)){
        header("Location: loginPage.php?error=User id required");
        exit();
    }

    elseif(empty($password)){
        header("Location: loginPage.php?error=Password is required");
        exit();
    }

        $sql = "SELECT * FROM login WHERE user_id = '$userId'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);

            if($row['user_id'] === $userId && $row['password'] === $password){
            
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['password'] = $row['password'];
                header("Location: index.php");
                exit();
            }else{
                header("Location: loginPage.php?error=Invalid Email or Password");
                exit();
            }
        }else{
            header("Location: loginPage.php");
            exit();
        }
    }

?>