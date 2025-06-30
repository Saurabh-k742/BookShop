<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Online Bookstore</title>
    <?php
        include("client/css.php");
    ?>

  </head>
<body>
    <?php
        session_start();

        include("./client/header.php");

        $alertMessage = '';
        $alertType = '';

        if (isset($_GET['signupError'])) {
            $alertMessage = $_GET['signupError'];
            $alertType = 'danger';
        } 
        else if (isset($_GET['loginError'])) {
            $alertMessage = $_GET['loginError'];
            $alertType = 'danger';
        } 
        else if (isset($_GET['signupSucess'])) {
            $alertMessage = $_GET['signupSucess'];
            echo $alertMessage;
            $alertType = 'success';
        } 
        else if (isset($_GET['loginSuccess'])) {
            $alertMessage = $_GET['loginSuccess'];
            $alertType = 'success';
        }

        if (!empty($alertMessage)) {
            echo "<div class='alert alert-$alertType alert-dismissible fade show' role='alert'>
                $alertMessage
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        }
        
        if(isset($_GET['signup']) && !isset($_SESSION['user']['username'])){
            include("client/signup.php");
        }
        else if(isset($_GET['login']) && !isset($_SESSION['user']['username'])){
            include("client/login.php");
        }
        else{
            include("client/home.php");
        }

        include("client/script.php");
    ?>
</body>
</html>