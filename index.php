<?php

echo "<br>";
echo "index.php";

require_once('Model/Autoloader.php');
Autoloader::register();

if(!empty($_GET['page'])) {
    $page = strtolower($_GET['page']);
} else {
    $page = 'home';
}

if(is_file("Controller/".$page.".controller.php")) {
    require_once("Controller/".$page.".controller.php");
} else {
    ### define route here...
    // if($page == "route1") {
    //     require_once("Controller/route1.controller.php");
    // } else if($page == "route2") {
    //     require_once("Controller/route2.controller.php");
    // } else($page == "default") {
    //     require_once("Controller/default.controller.php");
    // }
    require_once("Controller/home.controller.php");
}