<ul>
    <!-- Logo -->
    <div class=topnav>
        <img class = "logo" src="./img/logo.png" alt="logo"/>
        <div class = "centerNav">
            <!-- . takes to current location, .. takes to parents (goes up one directory) -->
            <li><a <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'home'){ echo "class='active'"; }?>href="./../js/home.php">Home</a></li>        
            <li><a <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'about'){ echo "class='active'"; }?>href="./../js/missions.php">Missions</a></li>
            <li><a <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'team'){ echo "class='active'"; }?>href="./../js/team.php">Team</a></li>
            <li><a <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'contact'){ echo "class='active'"; }?>href="./../js/gallery.php">Gallery</a></li>
            <li><a <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'info'){ echo "class='active'"; }?>href="./../js/info.php">Info</a></li>
        </div>
        <div class="rightNav">
            <!-- <input type="search" placeholder="search..." /> -->
        </div>
    </div>
</ul>