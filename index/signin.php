<!DOCTYPE html>
<html>
    <head>
        <title>
            sign in
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inisial-scale:1.0 ">
        <link rel="stylesheet" href="../styles/sign.css">
    </head>
    <body>
            <div id="sign">
                <h2>Sign in</h2>
                <form id="form" action="signin_handler.php" method="post">
                    <div id="table1">
                        <table border="1" >
                            <tr> 
                                <td><label class="label">first name</label></td><td><input class="input" type="text" name="fistname"></td>
                            </tr>
                            <tr>
                                <td><label class="label">last name</label></td><td><input class="input" type="text"  name="lastname"></td>
                            </tr>  
                            <tr>
                                <td><label class="label">Email</label></td><td><input class="input" type="email" name="email"></td>
                            </tr>
                            <tr>
                                <td><label class="label">password</label></td><td><input class="input" type="password" name="password"></td> 
                            </tr>
                            <tr>
                                <td><label class="label">Age</label></td><td><input class="input" type="number" min="13" max="90" name="age"></td>
                            </tr>
                            <tr>
                            <td colspan="2"><input id="submit" type="submit"></td>
                            </tr>
                        </table>
                    </div>
            </div>
        </form>

    </body>

    <footer id="footer">
        <div id="footer1">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="#">Dashboard</a>
        </div>
    </footer>   

</html>