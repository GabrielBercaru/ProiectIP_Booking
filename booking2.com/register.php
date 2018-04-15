<?php
    session_start();
    $conn = mysqli_cOnnEcT('localhost', 'root', '', 'TestDB');
    mysqli_selecT_db($conn, 'TestDB');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Booking2</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body bgcolor="#c1e5ff">
        <ul class="navbar">
            <li class="li"><a href="login.php"> LOGIN </a></li>
            <li class="li"><a href="#register"> REGISTER </a></li>
            <li class="li"><a href="#about"> ABOUT </a></li>
            <li class="li" style="float:left"><a href="index.php"> Booking2 </a></li>
        </ul>

        <div id="container">       
            <form action="" method="post">
                <label for="email">Email address:</label>
                <input type="email" id="email" name="email" placeholder="Email..."><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password..."><br>

                <div id="lower">
                    <label for="terms">Terms and conditions</label>
                    <input type="checkbox" id="terms" name="terms" value="1">

                    <input type="submit" value="Register">
                </div>
            </form>
            <?php
                if (isset($_POST['email']) && isset($_POST['password'])) {
                    $email = $_POST['email'];
                    $password = md5($_POST['password']);
                    if (!isset($_POST['terms'])) {
                        $ckbox = 0;
                    } else {
                        $ckbox = $_POST['terms'];
                    }

                    if (empty($email) || empty($password)) {
                        echo 'Please fill in all the fields';
                    } else if ($ckbox == 0) {
                        echo 'Accept terms and conditions';
                    } else {
                        $sql = mysqli_query($conn, "INSERT INTO `Administrators` (`Email`, `Password`, `DateRegistered`) VALUES ('$email', '$password', NOW())");
                        if (!$sql) {
                            echo 'Error when inserting into DB';
                        }
                    }
                }
            ?>
        </div>
    </body>
</html>