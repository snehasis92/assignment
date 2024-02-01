<?php
error_reporting(0);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include './dbcon.php';
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $dob = $_POST["dob"];
        $gender = $_POST["gender"];
        $msg = "";
        $esql = "SELECT * FROM `library_user` WHERE username = '$username' ";
        $eresult = mysqli_query($conn,$esql);
        $namexist = mysqli_num_rows($eresult);
        if ($namexist > 0) {
            $msg = "Already Exist..";
        }
        else{
            $sql = "INSERT INTO `library_user` (`slno`, `username`, `password`, `email`, `dob`, `gender`, `time`) VALUES 
            (NULL , '$username', '$password', '$email', '$dob', '$gender', current_timestamp());";
            $result = mysqli_query($conn,$sql);
            $msg = "Registered Successfully...";
            session_start();
            $_SESSION['signedin'] = true;
            header("location: login.php");
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
            <h2>Library Registration</h2>
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
                    <div class="cpassword ">
                        <h3>Conform Password :</h3>
                        <label for="cpassword">Conform Password</label>
                        <input required type="password" name="cpassword" id="cpassword">
                    </div>
                    <div class="email ">
                        <h3>Email :</h3>
                        <label for="email">Email</label>
                        <input required type="email" name="email" id="email">
                    </div>
                    <div class="dob ">
                        <h3>Dob :</h3>
                        <label for="dob">Dob</label>
                        <input required type="date" name="dob" id="dob">
                    </div>
                    <div class="gender">
                        <h3>Gender :</h3>
                        <select name="gender" id="gender">
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                            <option value="O">Other</option>
                        </select>
                    </div>
                    <div class = "caa">
                        <a id="caa" href="./login.php">I have already an account?</a>
                    </div>
                    <?php echo "<h6 class='errorMsg'> .$msg </h6>"?>
                    <div class="submit">
                        <input type="submit" name="submit" id="submit" value="Register">
                    </div> 

                </form>
            </div>
        </div>
    </main>
</body>

</html>