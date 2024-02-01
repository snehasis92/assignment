

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/nav.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="./index.php">Program Page</a></li>
                <li><a href="./admin_page.php">Admin Page</a></li>
            </ul>
            <div class="btn">
                <a href="./signup.php"><button>Sign Up</button></a>
                <a href="./login.php"><button>Log In</button></a>
                <form action="logout.php" method="post">
                    <input type="submit" value="Log Out" id="logOut">
                </form>
            </div>
        </nav>
    </header>
</body>

</html>