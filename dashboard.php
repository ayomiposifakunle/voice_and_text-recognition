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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DASHBOARD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
<nav style="background-color: black; display: flex; justify-content: space-between;">
<a href="./dashboard.php" style="margin: 20px; text-decoration: none;">TRANSLATOR WEB APP</a>

<ul style="display: flex; list-style-type: none;">
    <li style="margin: 20px;"><a href="./tts.php" style="text-decoration: none;">TEXT TO SPEECH</a></li>
    <li style="margin: 20px;"><a href="./Javascript-Speeach-to-Text-main/index.php" style="text-decoration: none;">SPEECH TO TEXT</a></li>
    <li style="margin: 20px;"><a href="./logout.php" style="text-decoration: none;">LOGOUT</a></li>
</ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <img src="./img/0_PIm4S-fLsefifYAg.jpg" alt="img1" class="w-100 h-50">
<h3>What Is Text-to-Speech ??</h3>
<p>Text-to-speech technology is a software that takes text as an input and produces audible speech as an output. This feature has significantly improved accessibility for people with vocal disabilities. <br> It can also be very helpful for kids who struggle with reading.</p>
      <a href="./tts.php"><button style="background-color: blue; color: white">view demo</button></a>
    </div>

    <div class="col-md-6">
      <img src="./img/speech-to-text-app-voice-recognition-application-convert-speech-to-text-multi-language-speech-recognizer-voice-to-text-software-concept-flat-modern-illustration-vector.jpg" alt="img1" class="w-100 h-50">
      <h3>What Is Speech-to-Text ??</h3>
<p>Speech to text is often based on Artificial Intelligence. It enables the recognition and translation of spoken language into text through computational linguistics. <br> It can be a great tool for people who struggle with handwriting, typing, or spelling, and for those who think faster than they can write.</p>
    <a href="./Javascript-Speeach-to-Text-main/index.php"><button style="background-color: blue; color: white">view demo</button></a>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- <script>
    setInterval(greeting, 30000);
    function greeting(){
    alert('THANK YOU FOR USING THIS SITE');
    }
</script> -->
</body>
</html>
