<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Mission</title>
    <link rel="stylesheet" href="./css/blog.css"/>
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
        <h1 id = "main-title">Blog</h1>
        <p id="title-desc">Take a look at our progress</p>
        <div class = "main-container">
            <div class = "content">
                <h2 class = "block-title">Place holder</h2>
                <p class = "block-text">Our mission is to...</p>
                <p class = "block-text">This is some more text</p>
            </div>
        </div>
    </header>
</body>
<?php include 'footer.php'?>
</html>