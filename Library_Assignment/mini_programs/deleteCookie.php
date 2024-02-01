<?php
setcookie("catagory", "", time() - 3600);
?>
<html>
<body>
<?php require "./mininav.html" ;?>
<main>
<h3>OutPut</h3>
<?php
echo "Cookie 'catagory' is deleted.";
?>
</main>
<br><br>
<br><br>
<br><br>
<h3>Delete cookie page Sorce Code</h3>
<div class="right">
            <?php
            echo "<xmp>";
            $myfile = fopen("p6.php", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("p6.php"));
            fclose($myfile);
        ?>
        </div>
</body>
</html>