<?php

$img = "background1.jpg";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/info.css">
    <link rel="stylesheet" href="./css/Pacifico.css">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('<?php echo $img; ?>');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>
    <header>
        <div class="mark">
            project <img src="./images/gradcapblue.png" alt="gradcap"> partner
        </div>

        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">About us</a>
            <a href="#">Services</a>
            <a href="#">Contact us</a>

            <button class="btnlgoin">Log in</button>
            <button class=btnsignup>Sign up</button>
        </nav>
    </header>


    <div class="aboutproject">
        <div class="slogen">
            <img src="./images/gradcapblue.png" alt="cap">
            <h1>project partner</h1>
            <h4>manage it</h4>
        </div>
        <p>Designed specifically for students involved in graduation
            project management, Project Partner addresses their unique needs.
            To simplify the process of organizing and
            coordinating the various components of a project, project partner
            provides tools for team collaboration, task scheduling, file sharing, and more.
        </p>
    </div>
</body>

</html>