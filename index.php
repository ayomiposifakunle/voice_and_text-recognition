<?php
include 'database.php';
?>

<?php
session_start();
?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!empty($_POST["mno"]) && !empty($_POST["pword"])){
    $mno = trim($_POST["mno"]);
    $pword = trim($_POST["pword"]);

    $selectdb = "SELECT * FROM users WHERE matricno='$mno'";
    $selectdbresult = $conn->query( $selectdb);
    if($selectdbresult->num_rows > 0 ){
        $userdata = $selectdbresult->fetch_assoc();
        if(password_verify($pword, $userdata['password'])){
             $_SESSION["data"] = $userdata;
             echo "<script>alert('user login successful');</script>";
            header("location: dashboard.php");
        } else {
            echo "<script>alert('wrong password');</script>";
        }
    } else {
        echo "<script>alert('user account not found');</script>";
    }

    } else {echo "please fill all required fields";}
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="robots" content="noindex, nofollow">
		<title>PHP Text to Speech</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="img/fav.png" type="image/png">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<!-- <style>
			@media screen and (max-width: 500px) {
				.img{
					width: 20px;
				}
			}
		</style> -->
	</head>
<body>
    	<nav class="navbar-inverse" role="navigation">
			<a href="#" target="_blank">
				<h1 class="text-light text-center">USER LOGIN</h1>
			</a>
		</nav>
 <div class="container topmost">
    <div class="row">
        <div class="col-md-6">
        <form action="" method="post">
    <label for="" style="font-size: x-large;">LOGIN TO USE SITE</label> <br>
        <input type="text" placeholder="input your matric number" name="mno" autocomplete="off" style="width: 100%; margin-bottom: 2px;"> <br>
        <input type="password" placeholder="input your password" name="pword" autocomplete="off" style="width: 100%; margin-bottom: 2px;"> <br>
        <button>login</button> <br> 
     <p>or click <a href="register.php">here</a> to register </p> 
    </form>
        </div>
        <div class="col-md-6">
<img src="./img/speech.png" alt="" style="height: 35vh; width: 50vh;">
        </div>
    </div>
 </div>
</body>
</html>