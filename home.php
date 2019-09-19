<?php include ("server.php"); 
    if(empty($_SESSION['username'])){
        header("Location: index.php");
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

    <h1 style="text-align: center; color: #fff; margin-top: 10px;">TEAM COPENHAGEN</h1>
    <div class="loginbox">
        
        
        <?php if(isset($_SESSION['username'])): ?>
            <p style="color: green;">Logged in Successfully</p>
            <p style="color: green;">Welcome <span style="font-size: 30px; font-weight: 800"><?php echo $_SESSION['username']; ?></span></p>
            <a href="index.php?logout='1'" style="color: red; font-size:25px">Logout</a>
        <?php endif ?>

    </div>
</body>
</html>




