<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Team</title>
    <link rel="stylesheet" href="./css/team.css"/>
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
        <br><br><br>
        <h1 id = "main-title">Meet the Team</h1>
        <div class = "team-con">
            <!-- <div class = "team"> -->
                <div class = "member">
                    <img class = "img" src = "img/team/m1.png" alt = "Sydney" style="width:100%">
                    <div class = "member-info">
                        <h2 class = "name">Sydney Fang</h2>
                        <p class = "bio">My bio here</p>
                    </div>
                </div>
                <div class = "member">
                    <img class = "img" src = "img/team/m1.png" alt = "Sydney" style="width:100%">
                    <div class = "member-info">
                        <h2 class = "name">Sydney Fang</h2>
                        <p class = "bio">My bio here</p>
                    </div>
                </div>
                <div class = "member">
                    <img class = "img" src = "img/team/m1.png" alt = "Sydney" style="width:100%">
                    <div class = "member-info">
                        <h2 class = "name">Sydney Fang</h2>
                        <p class = "bio">My bio here</p>
                    </div>
                </div>
                <div class = "member">
                    <img class = "img" src = "img/team/m1.png" alt = "Sydney" style="width:100%">
                    <div class = "member-info">
                        <h2 class = "name">Sydney Fang</h2>
                        <p class = "bio">My bio here</p>
                    </div>
                </div>
                <div class = "member">
                    <img class = "img" src = "img/team/m1.png" alt = "Sydney" style="width:100%">
                    <div class = "member-info">
                        <h2 class = "name">Sydney Fang</h2>
                        <p class = "bio">My bio here</p>
                    </div>
                </div>
                <div class = "member">
                    <img class = "img" src = "img/team/m1.png" alt = "Sydney" style="width:100%">
                    <div class = "member-info">
                        <h2 class = "name">Sydney Fang</h2>
                        <p class = "bio">My bio here</p>
                    </div>
                </div>                
            <!-- </div> -->
        </div>
    </header>
</body>
<?php include 'footer.php'?>
</html>