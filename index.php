<?php

    // navbar
    require __DIR__.'../partials/nav.php';

?>

<body background="/jig/assets/img/stripes-light.png" id = "myimg">
<div id="HomePage">
    <div id = "myimg2">
        <img src = "/Jig/assets/img/HR.jpg" style="float:right;" id = "imgo" border = "5">
    </div>
    <div id="title">Manage your company efficiently with <br /> this program for 21st century needs</div>
    <div id="followup">A resource for keeping track of all HR needs all <br /> delivered within one tight and effective package.</div>
    <?php
        if(isset($_SESSION['UserToken'])) { ?>
            <button type="button" id ="mybutton" onclick = "window.location.href = '/jig/admin'">Go to Admin Panel </button>
        <?php } else {
            ?><button type="button" id ="mybutton" onclick = "window.location.href = '/jig/pages/login.php'"> Log In </button>
        <?php }
    ?>
    <div id="features"> Product Features </div>
    <div id="reasons"> -Effecient systems to add, remove, and edit information on your employees.
        <br />-Intuitive design makes it easy to navigate all the information about your company. <br />-Easy to organize your workforce through the ability to create and edit departments. <br />-Ability to assign management positions allows managers ease of acces to there employees</div>
</div>