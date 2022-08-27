<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Mission</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/mission.css"/>
    <link rel="stylesheet" href="../css/theme.css"/>
    <!-- Nav bar css-->
    <link rel="stylesheet" href="../css/navBar.css"/>
    <!-- Nav bar arrow font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font style from https://fonts.google.com/specimen/Arvo?thickness=7&width=8&preview.text=COMING&preview.text_type=custom#standard-styles-->
    <style>@import url('https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&display=swap');</style>
    <style>@import url('https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&display=swap');</style>
</head>

<body>
    <header>
        <nav>
            <!-- Navigation bar -->
            <?php include 'navBar.php'?>
        </nav>
        <br><br><br>
        <h1 class = "page-title">Our Mission</h1>
        <div class = "main-container">
            <div class = "content">
                <p class = "fs-5-5 text-start">
                    Galactic cosmic rays, solar flare particles, and radiation belt particles are known to collide
                    with nuclei of atoms in the upper atmosphere to create a ‘shower’ of subatomic particles. The
                    effects of intergalactic radiation on causing bit flips, interchanging values of ‘0’s and ‘1’s in a
                    computer’s binary code, have been recognized since 1978 and given the name <span class = "fw-bold fst-italic">Single Event
                    Upsets (SEUs)</span>.
                </p>
                <p class = "fs-5-5 text-start">
                    Our project aims to study the efficiency of three well established hardware mitigators to
                    combat the occurrence of bit flips in data. Four electronic microcontrollers will be powered and
                    connected to custom ordered Solid State Drive cards, fixed to a high density styrofoam insulation
                    structure. Three types of bit flip mitigators will be used in this experiment, Fully Depleted
                    Silicon-on-Insulator circuits, Partially Depleted SOI circuits, and Mixed Mode SOI circuits,
                    along with a SOI free SSD to act as a baseline, and an SOI free SSD remaining on the ground for
                    the experiment duration as a control. Each SSD connected to a microcontroller will be read
                    before and after exposure to stratospheric conditions to compare the number of bit flips.
                </p>
                <h2 class = "fw-bold fs-5">Place holder</h2>
                
                <p class = "fw-bolder fs-5">This is some more text</p>
            </div>
        </div>
    </header>
</body>
<?php include 'footer.php'?>
</html>