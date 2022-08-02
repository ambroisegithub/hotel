<?php
$server = "localhost";
$user = "root";
$pass = "";
$db=  "hotel_website";
$con = mysqli_connect($server,$user,$pass,$db);
if ($con) {
  echo "byakunze";
}
  else {
echo "nibyakunze";
  }

?>