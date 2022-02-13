<?php
session_start();
?>
<!DOCTYPE html>
<html>

<!-- Todo: 
    Change icons for each key features
    hyperlink email-->

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Home</title>
    <link rel="stylesheet"
    href="./css/home.css"/>
    <!-- Nav bar css-->
    <link rel="stylesheet"
    href="./css/navBar.css"/>
    <!-- Footer css -->
    <link rel="stylesheet"
    href="./../css/footer.css" />
    <!-- Nav bar arrow font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <nav>
            <!-- Navigation bar -->
            <?php include 'navBar.php'?>
        </nav>
        <br><br><br>
        <h1>StratoNeers</h1>
        <p id="title-desc">Come to the dark side...we will give you the secret to success. Enter at your own risk.</p>
        <br><br><br><br><br><br>
        <h2 id="key-features">Key features</h2>
    </header>

    <div class="key-features">

        <div class="Discussions">
            <img src="./../img/discussion.png"
                width="50px" alt="discussion icon" />
            <br><br>
            <span class="subTitle">Discussions</span>
            <p>Learn together and discuss with your peers!</p>
            <br><br>
        </div>

        <div class="step">
            <img src="./../img/discussion.png"
                width="50px" alt="discussion icon" />
            <br><br>
            <span class="subTitle">Solutions</span>
            <p>Description</p>
            <br><br>
        </div>

        <div class="samples">
            <img src="./../img/discussion.png"
                width="50px" alt="discussion icon" />
            <br><br>
            <span class = "subTitle">Samples</span>
            <p>Description</p>
            <br><br>
        </div>

        <div id="navigate">
            <img src="./../img/discussion.png"
                width="50px" alt="discussion icon" />
            <br><br>
            <span class = "subTitle">Easy to navigate</span>
            <p>Description</p>
            <br><br>
        </div>

        <div id="trans">
            <img src="./../img/discussion.png"
                width="50px" alt="discussion icon" />
            <br><br>
            <span class = "subTitle">Transaction</span>
            <p>Description</p>
            <br><br>
        </div>

        <div id="info">
            <img src="./../img/discussion.png"
                width="50px" alt="discussion icon" />
            <br><br>
            <span class = "subTitle">Information access</span>
            <p>Description</p>
            <br><br>
        </div>
    </div>
</body>

<footer>
    <div class="col">
        <div class="col-left">
          <h2>Black Markeducation</h2>
          <p>We are here to provide the best service to our clients!</p>
        </div>
        <div class="col-right">
          <h2>Contact Us</h2>
          <p>randomemail@example.com</p>
        </div>
    </div>
</footer>
<div class = "author">
    <p>COSC 360 project by Sydney Fang and Theodore</p>
</div>
</html>