<?php
    include './dbcon.php';
    $sql = "SELECT * FROM `uploadImages`";
    $result = mysqli_query($conn,$sql);

    $row = [];  
  
    if ($result->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row = $result->fetch_all(MYSQLI_ASSOC);   
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Images Upload</title>
    <style>
        main{
            display: flex;
            margin-top: 100px;
            justify-content: space-evenly;
        }
        .left{
            width: 400px;
            height: 200px;
            border: 2px solid deepskyblue;
            border-radius: 20px;
        }
        .right{
            width: 725px;
            min-height: 400px;
            padding: 20px;
            border: 2px solid deepskyblue;
            border-radius: 20px;
        }
        .left form{
            padding: 10px;
            display: flex;
            flex-direction: column;
            text-align: center;
        }
        .left input{
            margin: 20px 0px;
        }
        .img-cart img{
            width: 140px;
            height: 140px;
        }
        .Uploadbtn{
            width:100px;
            margin: 30px auto;
            height:40px;
            text-align:center;
            border-radius:17px;
            background-color:rgb(0, 24, 52);
            color:white;
            transition:all .4s ease-in;
        }
        .Uploadbtn:hover{
            transform:scale(1.1);
            cursor: pointer;
            background-color:rgb(0, 24, 52);
            color:white;
        }
        .sorceCode{
            float:right;
            padding:10px;
            text-decoration:none;
            color:rgb(45,45,45);
            transition:all .3s ease;
        }
        .sorceCode:hover{
            color:rgb(0,80,120);
            transform:scale(1.01);
            border:2px solid rgb(0,80,120) ;
        }
    </style>
</head>
<body>
    <?php
        require "./nav.php";
    ?>
    <a class="sorceCode" href="imgUploadSorce.php">View Sorce Code</a>
    <main>
        <div class="left">
            <form action="imgupload.php" method="post" enctype="multipart/form-data">
                <label for="uploadImg">Uplaod Images : </label>
                <input type="file" name="uploadImg" id="uploadImg">
                <input type="submit" value="Upload" class="Uploadbtn">
            </form>
        </div>
        <div class="right">
            <div class="box">
                <div class="img-cart">
                <?php
                    if(!empty($row)) 
                    foreach($row as $rows) 
                   {  echo '
                        <img src="'.$rows['img_sorce'].'" alt="">
                        ';
                   }
                ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>

<?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    include './dbcon.php';
    $file_name = $_FILES["uploadImg"]["name"];
    $temp_name = $_FILES["uploadImg"]["tmp_name"];
    $folder = "Uploded/" . $file_name;
    $xsql = "SELECT * FROM `uploadImages` WHERE img_sorce = '$folder'";
    $xresult = mysqli_query($conn ,$xsql);
    $imgexist = mysqli_num_rows($xresult);
    if ($imgexist == 0) {
    move_uploaded_file($temp_name , $folder);
    $sql = "INSERT INTO `uploadImages` (`slno`, `img_sorce`) VALUES (NULL, '$folder');";
    $result = mysqli_query($conn ,$sql);
    echo "Refresh the page please..";
    }
    else{
        echo " Uploaded already choose another file..";
    }
  }
?>