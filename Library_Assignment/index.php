<?php
session_start();
$user =$_SESSION['username'];
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Page.</title>
    <style>
        .question-box{
            width:90%;
            margin:30px auto;
            padding: 10px;
        }
        ol li{
            margin: 20px 0px;
            color:black;
        }
        ol li a{
            text-decoration:none;
            color:black;
            font-size:18px;
            transition: all .4s ease-out;
        }
        ol li a:hover{
            text-decoration:underline;
            color:rgb(58, 1, 121);
            font-size:18px;
        }
    </style>
</head>
<body>
    <?php
    require "./nav.php";
    ?>
    <main>
    <?php echo "<h3>Welcome Mr. $user </h3>"; ?>
        <div class="question-box">
            <ol>
                <li><a href="./mini_programs/p1.php">Create a pattern program.</a></li>
                <li><a href="./mini_programs/p2.php">Write a program to check a year is leap year or not. [take textbox as input].</a></li>
                <li><a href="./mini_programs/p3.php">Write a simple calculator program in PHP using switch case.</a></li>
                <li><a href="./mini_programs/p4.php">Write a php program to check a number palindrome or not.</a></li>
                <li><a href="./mini_programs/p5.php">Create a php program which find factorial of number recursively using function.</a></li>
                <li><a href="./mini_programs/p6.php">Write a php function that checks if a string is all lower case.</a></li>
                <li><a href="./admin_page.php">Write a php script that retrieve registration data from database and display it on web page.</a></li>
                <li><a href="./imgupload.php">Create a php code to upload an image and display it on the page.</a></li>
                <li><a href="./mini_programs/cookie.php">Write a simple program that create, set and delete a cookie in php.</a></li>
            </ul>
        </div>
    </main>
</body>
</html>