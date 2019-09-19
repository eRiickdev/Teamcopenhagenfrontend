<?php include ("server.php"); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

    <h1 style="text-align: center; color: #fff; margin-top: 10px;">TEAM COPENHAGEN</h1>
    <div id="background">
        <div class="loginbox">
            <form action="index.php" method="post">
                <p id="LoginText"> Log In </p>
            <div id="underline"></div>
                <?php include ("error.php"); ?>
                <input id="uname" type="text" name="uname" placeholder="Enter Username" />
                <label id="lbluser" style="color:red; visibility: hidden;">Invalid</label>

                <input id="pass" type="password" name="loginPassword" placeholder="Enter Password">
                <input id="submit" type="submit" name="loginBtn" value="Log In"><br><br>

                <a id="create" href="register.php"><b class="submitext">Create an account</b> </a>

            </form>

        </div>
    </div>
</body>
</html>




