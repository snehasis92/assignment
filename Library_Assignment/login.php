<?php
error_reporting(0);
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include './dbcon.php';
        $username = $_POST["username"];
        $password = $_POST["password"];
        $msg = "";
        $sql = "SELECT * FROM `library_user` WHERE username = '$username' AND password = '$password' ";
        $result = mysqli_query($conn,$sql);
        $user_exist = mysqli_num_rows($result);
        if($user_exist == 1){
            $msg = "Successfully Loged In ...";
            $login = true;
              session_start();
              $_SESSION['loggedin'] = true;
              $_SESSION['username'] = $username;
              header("location: index.php");
        }
        else{
            $msg = "User not exist or Wrong Password ...";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/reg.css">
    <title>Patient Registration</title>
</head>

<body>
    <main>
        <div class="form-header">
            <h2>Library Log In</h2>
            <div class="form-box">
                <form action="#" method="post">
                    <div class="username">
                        <h3>Username :</h3>
                        <label for="f_name">Username</label>
                        <input reaquired type="text" name="username" id="username">
                    </div>
                    <div class="password ">
                        <h3>Password :</h3>
                        <label for="age">Password</label>
                        <input required type="password" name="password" id="password">
                    </div>
                    <?php echo "<h6 class='errorMsg'> .$msg </h6>"?>
                    <div class = "caa">
                        <a id="caa" href="./signup.php">Create an Account ?</a>
                    </div>
                    <div class="submit">
                        <input type="submit" name="submit" id="submit" value="Register">
                    </div>


                </form>
            </div>
        </div>
    </main>
</body>

</html>