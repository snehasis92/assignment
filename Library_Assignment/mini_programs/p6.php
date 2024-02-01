<?php
error_reporting(0);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $st = $_POST['st'];
        function checkLower($st) : string{
            $stLower = strtolower($st);
            if (strcmp($st,$stLower) == 0) {
                $result = "Yes string is all lower case.";
            }else{
                $result = "No string is not all lower case.";
            }
            return $result;
        }
        
        $result = checkLower($st);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
    <title>Check Lower</title>
</head>

<body>
    <?php require "./mininav.html" ;?>
    <main>
        <div class="left">
            <form action="#" method="post">
                <h2>Check The String is Lower or not</h2>
                <label for="st">Enter A string :</label>
                <input type="text" name="st" id="st" required>
                <button type="submit" id="btn">Check</button>
                <?php  echo '
            <input width="100px" type="text" name="result" id="result" value="'.$result.'">
        ';?>
            </form>
        </div>
        <div class="right">
            <?php
            echo "<xmp>";
            $myfile = fopen("p6.php", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("p6.php"));
            fclose($myfile);
        ?>
        </div>
    </main>
    <a class="btn-sm" href="../index.php">Back</a>
</body>

</html>
<?php echo "</xmp>"; ?>