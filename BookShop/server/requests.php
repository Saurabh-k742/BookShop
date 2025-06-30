<?php
session_start();

include('../config/db.php');

if(isset($_POST['signup'])){
    $email = $_POST['email'];
    $username = $_POST['name'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    $address = $_POST['address'];

    $existUser= "SELECT * FROM `users` WHERE `email` = ?";
    $data = $conn->prepare($existUser);
    $data->bind_param("s", $email);
    $data->execute();
    $data->store_result();
    $num_rows = $data->num_rows;

    if($num_rows > 0){
        $showError = "Email already in use";
    }
    else{
        if($password == $c_password){
            $query = "INSERT INTO users (email, name, password, address) VALUES (?, ?, ?, ?)";
            $data = $conn->prepare($query);
            $data->bind_param("ssis", $email, $username, $password, $address);  // "ssis" = string, string, int, string
            $data->execute();

            if($data){
                //create session
                $_SESSION['user'] = ["username"=>$username, "email"=>$email];
                $showSuccess = "You are signed in";
                echo $showSuccess;
                header("location: /BookShop/index.php?signupSuccess=$showSuccess");
                exit();
            }
            else{
                $showError = "Account is not created";
            } 
        }
        else $showError = "Password does not match";
    }
    header("location: /BookShop/index.php?signupError=$showError");
}
else if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = "";

    $query = "SELECT * FROM users WHERE email = ? AND password = ?";
    $data = $conn->prepare($query);

    if (!$data) {
        die("Prepare failed: " . $conn->error);
    }

    $data->bind_param("si", $email, $password);
    $data->execute();
    $result = $data->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        // print_r($row);

        $username = $row['name'];

        //create session
        $_SESSION['user'] = ["username" => $username, "email" => $email];
        $showSuccess = "You are logged in";
        header("Location: /BookShop/index.php?loginSuccess=$showSuccess");
        exit();
    } 
    else {
        $showError = "Invalid email or password";
    }
    header("Location: /BookShop/index.php?loginError=$showError");
}
else if(isset($_GET['logout'])){
    session_unset();
    header("location: /BookShop/index.php");
}
?>