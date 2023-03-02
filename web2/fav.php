<html>
<head><title>Your Favorite</title></head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST["username"])) {
    $name = $_POST["username"];
    if (!empty($_POST["color"]) && !empty($_POST["dish"])) {
      $color = $_POST["color"];
      $dish = $_POST["dish"];
      echo "Thanks for your Selection ".$name."<br>";
      echo "You really enjoy " . $dish . " - especially with a nice " . $color . " wine.";
    } else {
      echo "Please select a dish and a wine color to continue.";
    }
  } else {
    echo "Please enter your name to continue.";
  }
}
?>    
</body>
</html>