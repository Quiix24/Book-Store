<!DOCTYPE html>
<head>
    <title>login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inisial-scale:1.0 ">
    <link rel="stylesheet" href="../styles/login.css">
</head>
<body>
        <div id="login">
                <h2 style="text-align: center; font-size: 200%;">login</h2>
                <form style="padding: 10px;" action="login_handler.php" method="post">
                        <label> <p id="username">Fistname</p></label>
                        <input type="text" name="fistname"> <br>
                        <label> <p id="pass">Password</p></label>
                        <input type="password" name="password"> <br> <br>
                        <input id="submit" type="submit" value="login">
                </form>
        </div>
</body>
<footer id="footer">
        <div id="footer1">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="#">Dashboard</a>
        </div>
</footer>
</html>
