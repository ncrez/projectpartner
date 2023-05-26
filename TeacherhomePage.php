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
    <link rel="stylesheet" href="./css/Pacifico.css">
    <link rel="stylesheet" href="./css/tinfopage.css">

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
            <a href="#">Create project</a>
            <a href="#">Create team</a>
            <a href="#">Projects</a>
            <button class="btnlogout">Log out</button>
        </nav>
    </header>

    <main class="Tinfo">
        <section class="table_header">
            <h1>My informatin</h1>
        </section>
        <section class="table_body">
            <table style="width:100%">
                <tr>
                    <th style="width:30%">ID</th>
                    <td>1010001</td>
                </tr>
                <tr>
                    <th style="width:30%">Email</th>
                    <td>super@hotmail.com</td>
                </tr>
                <tr>
                    <th style="width:30%">Name</th>
                    <td>abdullah</td>
                </tr>
                <tr>
                    <th style="width:30%">Social Security number</th>
                    <td>1011100011</td>
                </tr>
                <tr>
                    <th style="width:30%">Phone Number</th>
                    <td>0503338844</td>
                </tr>
            </table>
        </section>
    </main>
</body>

</html>