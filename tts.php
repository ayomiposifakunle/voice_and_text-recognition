<?php
session_start();
$sess = $_SESSION["data"]['matricno'];
if(!isset($sess)){
	header("location: index.php");
}
?>

<?php
include 'database.php'
?>

<?php
@$submit = $_POST['process'];
@$word = $_POST['texttospeech'];

$voice = new COM("SAPI.SpVoice");

if($_SERVER["REQUEST_METHOD"] == "POST" and isset($submit) and !empty($word)){
	$voice->Speak($word);
}
?>

<!DOCTYPE html>
<html>
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
	<nav style="background-color: black; display: flex; justify-content: space-between">
<a href="./dashboard.php" style="margin: 20px; text-decoration: none;">TRANSLATOR WEB APP</a>

<ul style="display: flex; list-style-type: none;">
    <li style="margin: 20px;"><a href="./tts.php" style="text-decoration: none;">TEXT TO SPEECH</a></li>
    <li style="margin: 20px;"><a href="./Javascript-Speeach-to-Text-main/index.php" style="text-decoration: none;">SPEECH TO TEXT</a></li>
    <li style="margin: 20px;"><a href="./logout.php" style="text-decoration: none;">LOGOUT</a></li>
</ul>
</nav>
		<!-- text-to-speech main -->
		<div class="topmost">
			<div class="container-fluid">
				<div class="row"> 
				<div class="">
				<div class="panel panel-primary">
					<div class="panel-heading">
					<p style="font-size: x-large; color: black">TEXT TO SPEECH</p>
	 <p style="font-family:cursive; color: black; font-size: large"> <strong> Type a text then click on speak to convert it to speech</strong></p>
					</div>
					<div class="panel-body" style="height: 55vh;">
						<form method = "post" class="w-100">
							<div class = "form-group">
								<textarea style="height: 40vh;" class="form-control input-sm" rows="4" name="texttospeech" placeholder="Type your Text Here..."></textarea>
							</div>
							<div class = "form-group">
								<input type = "submit" class = "btn btn-primary btn-block" name="process" value="Speak">
							</div>
						</form>
					</div>
				</div>
			</div>
				</div>
			</div>
		</div>

		<script src="js/bootstrap.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>
 