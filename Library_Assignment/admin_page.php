<?php
    error_reporting(0);
    include './dbcon.php';
    $sql = "SELECT * FROM `library_user`";
    $result = mysqli_query($conn,$sql);
    $row = [];
  
    if ($result->num_rows > 0)  
    {  
        $row = $result->fetch_all(MYSQLI_ASSOC);   
    }  
    //'SET @num:=0;UPDATE library_user SET slno =@num:=(@num+1); ALTER TABLE `library_user` AUTO_INCREMENT=1';
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page.</title>
    <style>
        h3{
            text-align: center;
            margin:20px 0px;
        }
        .center{
            width: 95%;
            min-height: 80vh;
            margin: 30px auto;
            padding: 20px 0px;
            border: 2px solid black;
        }
        table{
            width: 90%;
            margin: auto;
            text-align: center;
            border: 1px solid blue;
        }
        table td{
            border: 1px solid black;
            background-color: rgb(228, 255, 253);
            padding:5px;
        }
        table th{
            padding:8px;
            background-color: greenyellow;
            
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
    <main>
        <div class="center">
            <a class="sorceCode" href="./adminPageSorce.php">View Sorce Code</a>
            <h3>Registered User Deta</h3>
            <table>
                <tr>
                    <th>SL No</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Dob</th>
                    <th>Gender</th>
                    <th>Time of Reg.</th>
                </tr>
                <?php
                $i = 1;
                    if(!empty($row)) {
                    foreach($row as $rows) 
                   {  
                ?>
                <?php echo "
                <tr>
                <td>".$i."</td>
                <td>".$rows['username']."</td>
                <td>".$rows['password']."</td>
                <td>".$rows['email']."</td>
                <td>".$rows['dob']."</td>
                <td>".$rows['gender'].".</td>
                <td>".$rows['time']."</td>
                </tr>";
                $i ++;
                ?>
                <?php
                    }
                }else{
                    echo"
                <tr>
                    <td>Null</th>
                    <td>Null</th>
                    <td>Null</th>
                    <td>Null</th>
                    <td>Null</th>
                    <td>Null</th>
                    <td>Null</th>
                </tr>
                    ";
                }
                ?>
                
            </table>
        </div>
    </main>
</body>
</html>