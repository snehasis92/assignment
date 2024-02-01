<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Img Upload Sorce</title>
    <style>
        main{
            width:70vw;
            margin:30px auto;
            padding:20px 40px;
            height:80vh;
            overflow:auto;
            box-shadow:0px 0px 20px black;
            border-radius:10px;
        }
    </style>
</head>
<body>
    <a href="imgupload.php">Back To Previus Page</a>
    <main>
        <h3>Img Upload Page Sorce Code</h3>
        <?php
            echo "<xmp>";
            $myfile = fopen("imgupload.php", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("imgupload.php"));
            fclose($myfile);
            echo "</xmp>";
        ?>
    </main>
</body>
</html>