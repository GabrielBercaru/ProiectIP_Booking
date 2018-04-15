<?php
	session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'TestDB');
	mysqli_select_db($conn, 'TestBD');
	if (empty($_SESSION['user'])) {
?>

<!DOCTYPE html>
	<head>
		<title> Booking2 </title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body bgcolor="#c1e5ff">
		<ul class="navbar">
            <li class="li"><a href="#login"> LOGIN </a></li>
            <li class="li"><a href="register.php"> REGISTER </a></li>
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
                    <input type="submit" value="Login">
                </div>
            </form>
            <?php
                if (isset($_POST['email']) && isset($_POST['password'])) {
                    $email = $_POST['email'];
                    $password = md5($_POST['password']);

                    if (empty($email) || empty($password)) {
                        echo 'Please fill in all the fields';
                    } else {
                    	$sql = mysqli_query($conn, "SELECT * FROM `Administrators` WHERE `Email` = '$email'");
                    	if (mysqli_num_rows($sql) == 0) {
                    		echo 'Error: email does not exist';
                    	} else {
                    		$result = mysqli_fetch_array($sql);
                    		if ($result['Password'] != $password) {
                    			echo 'Wrong password!';
                    		} else {
                    			$_SESSION['user'] = $email;
                    			?><meta http-equiv="refresh" content="0"><?php
                    		}
                    	}
                    }
                }
            ?>
        </div>

	</body>
</html>
<?php
	} else {
?>
		<!DOCTYPE html>
			<head>
				<title> Booking2 </title>
				<link rel="stylesheet" type="text/css" href="style.css">
			</head>

			<body bgcolor="#c1e5ff">
				<ul class="navbar">
		            <li class="li"><a href="logout.php"> LOGOUT </a></li>
		            <li class="li"><a href="#about"> ABOUT </a></li>
		            <li class="li" style="float:left"><a href="#home"> OurBooking </a></li>
		        </ul>

		        <div>
		        	<p>
		        		Admin home page
		        	</p>
		        </div>

			</body>
		</html>
<?php
	}
?>