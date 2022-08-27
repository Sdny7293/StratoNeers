<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" contents="Team member details" />
    <title>Team</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/team.css" />
    <link rel="stylesheet" href="../css/theme.css" />
    <!-- Nav bar css-->
    <link rel="stylesheet" href="../css/navBar.css" />
    <!-- Nav bar arrow font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font style from https://fonts.google.com/specimen/Arvo?thickness=7&width=8&preview.text=COMING&preview.text_type=custom#standard-styles-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap');
    </style>
</head>

<body>
    <header>
        <nav>
            <!-- Navigation bar -->
            <?php include 'navBar.php' ?>
        </nav>
        <br><br><br>
        <h1 class="page-title">Meet the Team</h1>
        <div class="team-con">
            <div class="member">
                <img class="" src="../img/team/sydney-fang.png" alt="Sydney" style="width:100%">
                <div class="member-info">
                    <h2 class="name">Sydney Fang</h2>
                    <span class="sw-eng">Software Engineer</span>
                    <p class="bio">Hi! My name is Sydney Fang and I am a 4th year student double majoring in Bio-Chemistry and Computer Science at UBC.</p>
                </div>
            </div>
            <div class="member">
                <img class="img-fluid" src="../img/team/yosamin-esanullah.png" alt="Yosamin" style="width:100%">
                <div class="member-info">
                    <h2 class="name">Yosamin Esanullah</h2>
                    <span class="hd-eng">Hardware Engineer</span>
                    <p class="bio">Bio here</p>
                </div>
            </div>
            <div class="member">
                <img class="img-fluid" src="../img/team/james.png" alt="James" style="width:100%">
                <div class="member-info">
                    <h2 class="name">James Ropotar</h2>
                    <span class="hd-eng">Hardware Engineer</span>
                    <p class="bio">James Ropotar is one of our Hardware Engineers, specialising in aiding in assembly and finalising design. He has long had a passion for computer systems, building several computers over the years.</p>
                </div>
            </div>
            <div class="member">
                <img class="img-fluid" src="../img/team/brody-bird.png" alt="Brody" style="width:100%">
                <div class="member-info">
                    <h2 class="name">Heanan-Brody Bird</h2>
                    <span class="hd-eng">Hardware Engineer</span>
                    <p class="bio">Brody Bird is our Hardware Engineer, specializing in transistor acquisition and specifications. He is responsible for the manufacturing development and implementation of specialized memory units in apparatus development.</p>
                </div>
            </div>
            <div class="member">
                <img class="img-fluid" src="../img/team/placeholder.png" alt="Abrar" style="width:100%">
                <div class="member-info">
                    <h2 class="name">Abrar Mahir</h2>
                    <span class="hd-eng">Hardware Engineer</span>
                    <p class="bio">Bio here</p>
                </div>
            </div>
            <div class="member">
                <img class="img-fluid" src="../img/team/iain.jpg" alt="Iain" style="width:100%">
                <div class="member-info">
                    <h2 class="name">Iain Reid</h2>
                    <span class="hd-eng">Hardware Engineer</span>
                    <p class="bio">Bio here</p>
                </div>
            </div>
            <div class="member">
                <img class="img-fluid" src="../img/team/placeholder.png" alt="Elana" style="width:100%">
                <div class="member-info">
                    <h2 class="name">Elana Wood</h2>
                    <span class="hd-eng">Hardware Engineer</span>
                    <p class="bio">Bio here</p>
                </div>
            </div>

            <div class="member">
                <img class="img-fluid" src="../img/team/placeholder.png" alt="Rekha" style="width:100%">
                <div class="member-info">
                    <h2 class="name">Rekha Marcus</h2>
                    <span class="or-lead">Outreach Lead</span>
                    <p class="bio">Bio here</p>
                </div>
            </div>
            <div class="member">
                <img class="img-fluid" src="../img/team/placeholder.png" alt="Alex" style="width:100%">
                <div class="member-info">
                    <h2 class="name">Alex Rybka</h2>
                    <span class="hd-eng"></span>
                    <p class="bio">Bio here</p>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </header>
</body>
<?php include 'footer.php' ?>

</html>