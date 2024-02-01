<?php
$cookie_name = "Catagory";
$cookie_value = "Book";
setcookie($cookie_name, $cookie_value, time() + 86400, "/"); // 86400 = 1 day
?>
<html>
<body>
<?php require "./mininav.html" ;?>
<main>
<h3>OutPut</h3>
  <?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
</main>
<br><br>
<a href="deleteCookie.php">Delete Cookie</a>


<br><br>
<br><br>
<br><br>
<h3>Create and Set cookie page Sorce Code</h3>
<div class="right">
            <?php
            echo "<xmp>";
            $myfile = fopen("cookie.php", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("p6.php"));
            fclose($myfile);
        ?>
        </div>
</body>
</html>