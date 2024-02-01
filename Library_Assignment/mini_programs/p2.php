<!-- Write a program to check a year is leap year or not. [take textbox as input] -->
<?php
error_reporting(0);
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $year = $_POST["year"];
        $result = ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
        if ($year !== false && $year > 0) {
            if ($result) {
                $result= "$year is a leap year.";
            } else {
                $result=  "$year is not a leap year.";
            }
        } else {
            echo "Invalid input. Please enter a valid positive integer for the year.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
    <title>Document</title>

</head>

<body>
<?php require "./mininav.html" ;?>
    <main>
        <div class="left">
            <form action="#" method="post">
                <h2>Leap Year Checker</h2>
                <label for="year">Enter a year:</label>
                <input type="text" name="year" id="year" required>
                <button type="submit" id="btn">Check</button>
                <?php  echo '
            <input width="100px" type="text" name="result" id="result" value="'.$result.'">
        ';?>
            </form>
        </div>
        <div class="right">
        <?php
            echo "<xmp>";
            $myfile = fopen("p2.php", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("p2.php"));
            fclose($myfile);
        ?>
        </div>
    </main>
    <a class="btn-sm" href="../index.php">Back</a>
</body>

</html>
<?php echo "</xmp>"; ?>