<?php
error_reporting(0);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['num'];
        $n = (int)$num;
        $on = (int)$num;
        $nn = 0;
        do{
            $r =(int)($n % 10);
            $nn = ($nn * 10) + $r;
            $n = (int)($n/10);
        }while($n != 0);
        if ($on > 10 and $on == $nn) {
            $result = "$on Is Palindrome Number . ";
        }else{
            $result = "$on Is Not Palindrome Number . ";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
    <title>Palindrome Number</title>
</head>

<body>
<?php require "./mininav.html" ;?>
    <main>
        <div class="left">
            <form action="#" method="post">
                <h2>Program for Check Palindrome Number</h2>
                <label for="num">Enter a Number :</label>
                <input type="number" name="num" id="num" required>
                <button type="submit" id="btn">Check</button>
                <?php  echo '
            <input width="100px" type="text" name="result" id="result" value="'.$result.'">
        ';?>
            </form>
        </div>
        <div class="right">
        <?php
            echo "<xmp>";
            $myfile = fopen("p4.php", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("p4.php"));
            fclose($myfile);
        ?>
        </div>
    </main>
    <a class="btn-sm" href="../index.php">Back</a>
</body>

</html>
<?php echo "</xmp>"; ?>