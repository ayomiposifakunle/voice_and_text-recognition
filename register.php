<?php
include 'database.php';
?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(!empty($_POST["mno"]) && !empty($_POST["pword"])){
$mno = trim($_POST["mno"]);
$pword = trim($_POST["pword"]);

$hashed_password = password_hash($pword, PASSWORD_DEFAULT);

// echo $fullname."<br>".$email."<br>".$hashed_password;
$insertintodb = "INSERT INTO users(matricno, password) VALUES ('$mno','$hashed_password')";
// ($conn->query($insertintodb) == TRUE) ? 'admin registered successfully' : 'not registered';
if($conn->query($insertintodb) == TRUE){
    echo "<script>alert('user registeration successful');</script>";
    header("location: login.php");
} 
}else {
    echo "please fill all required fields";
}
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
				<h1 class="text-light text-center">TEXT TO SPEECH</h1>
			</a>
		</nav>
<div class="container topmost">
    <div class="row">
        <div class="col-md-6">
        <form action="" method="post">
            <label for="" style="font-size: x-large;">CREATE AN ACCOUNT</label>
        <input type="text" placeholder="input your matric number" name="mno" style="width: 100%; margin-bottom: 2px;"> <br>
        <input type="password" placeholder="input your password" name="pword" style="width: 100%; margin-bottom: 2px;"> <br>
        <button>create</button>
    </form>
        </div>
        <div class="col-md-6">
        <div class="col-md-6">
<img src="./img/istockphoto-1270805299-612x612.jpg" alt="" style="height: 35vh; width: 50vh;">
        </div>
        </div>
    </div>
</div>
</body>
</html>

