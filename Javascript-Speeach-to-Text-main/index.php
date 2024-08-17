<?php
session_start();
$sess = $_SESSION["data"]['matricno'];
if(!isset($sess)){
	header("location: index.php");
}
?>

<?php
include '../database.php'
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Speech to Text</title>
  </head>
  <body>
  <nav style="background-color: black; display: flex; justify-content: space-between">
<a href="../dashboard.php" style="margin: 20px; text-decoration: none;">TRANSLATOR WEB APP</a>

<ul style="display: flex; list-style-type: none;">
    <li style="margin: 20px;"><a href="../tts.php" style="text-decoration: none;">TEXT TO SPEECH</a></li>
    <li style="margin: 20px;"><a href="./index.php" style="text-decoration: none;">SPEECH TO TEXT</a></li>
    <li style="margin: 20px;"><a href="../logout.php" style="text-decoration: none;">LOGOUT</a></li>
</ul>
</nav>

    <div class="container" style="margin: 0 auto;">
      <p class="heading">Speech to Text</p>
      <div class="options">
        <div class="anguage">
          <p>Language</p>
          <select name="input-language" id="language"></select>
        </div>
      </div>
      <div class="line"></div>
      <button class="btn record">
        <div class="icon">
          <ion-icon name="mic-outline"></ion-icon>
          <img src="bars.svg" alt="" />
        </div>
        <p style="font-family:cursive; color: black;">Click to record voice</p>
      </button>
      <p class="heading">Result :</p>
      <div
        class="result"
        spellcheck="false"
        placeholder="Text will be shown here"
      >
        <p class="interim"></p>
      </div>
      <div class="buttons">
        <button class="btn clear">
          <ion-icon name="trash-outline"></ion-icon>
          <p>Clear</p>
        </button>
        <button class="btn download" disabled>
          <ion-icon name="cloud-download-outline"></ion-icon>
          <p>Download</p>
        </button>
      </div>
    </div>

    <!-- IONICONS -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

    <!-- LANGUAGES -->
    <script src="languages.js"></script>

    <!-- SCRIPT -->
    <script src="script.js"></script>
  </body>
</html>
