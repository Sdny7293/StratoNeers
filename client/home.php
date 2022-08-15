<!DOCTYPE html>
<html>

<!-- Todo: 
    hyperlink email
    link nav
    about
    transp. png
-->

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Home</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- css sheets -->
    <link rel="stylesheet" href="./css/home.css"/>
    <link rel="stylesheet" href="./css/theme.css"/>
    <!-- Nav bar css-->
    <link rel="stylesheet" href="./css/navBar.css"/>
    <!-- Nav bar arrow font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font style from https://fonts.google.com/specimen/Arvo?thickness=7&width=8&preview.text=COMING&preview.text_type=custom#standard-styles-->
    <style>@import url('https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap');</style>
</head>

<body>
    <header>
        <nav>
            <!-- Navigation bar -->
            <?php include 'navBar.php'?>
        </nav>
        <br><br>
        <h1 id = "main-title">StratoNeers</h1>
        <p id="title-desc">Canadian Stratospheric Balloon Experiment Design Challenge (CAN-SBX) 2022</p>
    </header>
    <div class = "info-block">
        <div class = "content">
            <img src = "../img/team-photo.JPG" width = "100%"/>
            <h5 class = "text-start fw-bold mt-2 mb-0">The engineers</h5>
            <p class = "text-start">From left to right: Elena Wood, Brody Bird, Yosamin Esanullah, Sydney Fang, Abrar Mahir</p>
            <h3 class = "fw-bold">Check out our most recent work!</h3>
        </div>
    </div>
</body>
<?php include 'footer.php'?>
</html>