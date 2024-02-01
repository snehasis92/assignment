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
                <h2>Pattern Print</h2>
                <label for="year">Enter no of rows : </label>
                <input type="text" name="row" id="row" required>
                <button type="submit" id="btn">Draw It</button>
                <?php 
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $n = $_POST["row"];
                if ($n > 0) {
                    for($i = 0;$i < $n;$i++){
                        for ($j=1; $j <= $i+1; $j++) { 
                            if($j%2 == 0){
                                echo "0";
                            }else{
                                echo "1";
                            }
                        }
                        echo "<br>";
                    }
                }else{
                    echo "you are kidding.<br> Enter large number ";
                }
            }
        ?>
            </form>
        </div>
        <!-- for showing code only. -->
        <div class="right">
            <?php
            echo "<xmp>";
            $myfile = fopen("p1.php", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("p1.php"));
            fclose($myfile);
        ?>
        </div>
    </main>
</body>
</html>
<?php echo "</xmp>"; ?>