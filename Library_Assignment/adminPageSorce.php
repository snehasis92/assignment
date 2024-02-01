<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page Sorce</title>
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
    <main>
        <h3>Admin Page Sorce Code</h3>
        <?php
            echo "<xmp>";
            $myfile = fopen("admin_page.php", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("admin_page.php"));
            fclose($myfile);
            echo "</xmp>";
        ?>
    </main>
</body>
</html>