<?php
    error_reporting(0);

if (isset($_POST["btn"])) {
    $op = ($_POST['btn']);
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    switch ($op) {
        case 'add':
            $n1 = (float)$num1;
            $n2 = (float)$num2;
            $result = $n1 + $n2;
            break;
        
        case 'sub':
            $n1 = (float)$num1;
            $n2 = (float)$num2;
            $result = $n1 - $n2;
            break;
        
        case 'mult':
            $n1 = (float)$num1;
            $n2 = (float)$num2;
            $result = $n1 * $n2;
            break;
        
        case 'div':
            $n1 = (float)$num1;
            $n2 = (float)$num2;
            $result = $n1 / $n2;
            break;
        
        default:
            $result = 0;
            break;
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
    <style>
    #btn {
        width: 90px;
    }
    </style>
</head>

<body>
<?php require "./mininav.html" ;?>
    <main>
        <div class="left">
            <form action="" method="post">
                <h2>Simple Calculator</h2>
                <label for="num1">Enter First Number</label>
                <input type="text" name="num1" id="num1">
                <label for="num2">Enter Second Number</label>
                <input type="text" name="num2" id="num2">
                <div id="buttons">
                    <button id="btn" value="add" name="btn">+</button>
                    <button id="btn" value="sub" name="btn">-</button>
                    <button id="btn" value="mult" name="btn">*</button>
                    <button id="btn" value="div" name="btn">/</button>
                </div>
                <?php
    echo '<br>
    <h3>Ans</h3>
    <input type="text" value = '.$result.'>
    
    ';
    ?>
            </form>
        </div>
        <div class="right">
            <?php
            echo "<xmp>";
            $myfile = fopen("p3.php", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("p3.php"));
            fclose($myfile);
        ?>
        </div>
    </main>
    <a class="btn-sm" href="../index.php">Back</a>
</body>

</html>
<?php echo "</xmp>"; ?>