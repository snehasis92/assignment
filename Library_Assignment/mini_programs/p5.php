<?php
error_reporting(0);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['num'];
        $n = (int)$num;
        function fact($n):int{
            if($n == 0){
                return 1;
            }
            else{
                return $n*fact($n-1);
            }
        }
        
        $result = fact($n);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
    <title>Factorial</title>
</head>

<body>
    <?php require "./mininav.html" ;?>
    <main>
        <div class="left">
            <form action="#" method="post">
                <h2>Program for Factorial Number</h2>
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
            $myfile = fopen("p5.php", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("51.php"));
            fclose($myfile);
        ?>
        </div>
    </main>
</body>

</html>
<?php echo "</xmp>"; ?>