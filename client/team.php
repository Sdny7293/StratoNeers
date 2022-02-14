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
                        <span class = "dept">Software Engineer</span>
                        <p class = "bio">Hi! My name is Sydney Fang and I am a 4th year student double majoring in Bio-Chemistry and Computer Science at UBC.</p>
                    </div>
                </div>
                <div class = "member">
                    <img class = "img" src = "img/team/m1.png" alt = "Yosamin" style="width:100%">
                    <div class = "member-info">
                        <h2 class = "name">Yosamin Esanullah</h2>
                        <p class = "bio">Bio here</p>
                    </div>
                </div>
                <div class = "member">
                    <img class = "img" src = "img/team/m1.png" alt = "Brody" style="width:100%">
                    <div class = "member-info">
                        <h2 class = "name">Heanan-Brody Bird</h2>
                        <p class = "bio">Bio here</p>
                    </div>
                </div>
                <div class = "member">
                    <img class = "img" src = "img/team/m1.png" alt = "Abrar" style="width:100%">
                    <div class = "member-info">
                        <h2 class = "name">Abrar Mahir</h2>
                        <p class = "bio">Bio here</p>
                    </div>
                </div>
                <div class = "member">
                    <img class = "img" src = "img/team/m1.png" alt = "Iain" style="width:100%">
                    <div class = "member-info">
                        <h2 class = "name">Iain Reid</h2>
                        <p class = "bio">Bio here</p>
                    </div>
                </div>
                <div class = "member">
                    <img class = "img" src = "img/team/m1.png" alt = "Elana" style="width:100%">
                    <div class = "member-info">
                        <h2 class = "name">Elana Wood</h2>
                        <p class = "bio">Bio here</p>
                    </div>
                </div>
                <div class = "member">
                    <img class = "img" src = "img/team/m1.png" alt = "James" style="width:100%">
                    <div class = "member-info">
                        <h2 class = "name">James Ropotar</h2>
                        <p class = "bio">Bio here</p>
                    </div>
                </div>
                <div class = "member">
                    <img class = "img" src = "img/team/m1.png" alt = "Toney" style="width:100%">
                    <div class = "member-info">
                        <h2 class = "name">Toney Bedell</h2>
                        <p class = "bio">Bio here</p>
                    </div>
                </div>
                <div class = "member">
                    <img class = "img" src = "img/team/m1.png" alt = "Rekha" style="width:100%">
                    <div class = "member-info">
                        <h2 class = "name">Rekha Marcus</h2>
                        <p class = "bio">Bio here</p>
                    </div>
                </div>   
                <div class = "member">
                    <img class = "img" src = "img/team/m1.png" alt = "Alex" style="width:100%">
                    <div class = "member-info">
                        <h2 class = "name">Alex Rybka</h2>
                        <p class = "bio">Bio here</p>
                    </div>
                </div>              
            <!-- </div> -->
        </div>
    </header>
</body>
<?php include 'footer.php'?>
</html>