<ul>
    <!-- Logo -->
    <div class=topnav>
        <img class = "logo" src="./img/logo.png" alt="logo"/>
        <div class = "centerNav">
            <!-- . takes to current location, .. takes to parents (goes up one directory) -->
            <li class = "nav-list"><a class = "page"<?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'home'){ echo "class='active'"; }?>href="home.php">Home</a></li>        
            <li class = "nav-list"><a class = "page"<?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'about'){ echo "class='active'"; }?>href="missions.php">Missions</a></li>
            <li class = "nav-list"><a class = "page"<?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'team'){ echo "class='active'"; }?>href="team.php">Team</a></li>
            <li class = "nav-list"><a class = "page"<?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'contact'){ echo "class='active'"; }?>href="gallery.php">Gallery</a></li>
            <li class = "nav-list"><a class = "page"<?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'info'){ echo "class='active'"; }?>href="info.php">Info</a></li>
        </div>
        <div class="rightNav">
            <!-- <input type="search" placeholder="search..." /> -->
        </div>
    </div>
</ul>