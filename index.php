<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artist Portoflio</title>
    <meta name="description" content="Portfolio">
    <meta name="author" content="Tim Huijkman">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
<?php include "includes/header.php" ?>
</body>
<?php include "includes/scripts.php" ?>

<div id="main">
    <section id="section1">
        <?php include "includes/example.php" ?>
    </section>
    <section id="section2">
        <?php include "includes/example.php" ?>
    </section>
    <section id="section3">
        <?php include "includes/example.php" ?>
    </section>





</div>











<div style="position: fixed;top:0;left:0; z-index: -99; width: 100%; height: 100%;opacity: 0.2">
    <video autoplay muted loop id="myVideo" style="min-width: 100%;min-height: 100%">
        <source src="content/glitch.mp4" type="video/mp4">
    </video>
</div>

</html>