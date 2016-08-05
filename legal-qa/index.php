<?php
require_once("./controller/Home.php");
require_once("./controller/Pair.php");
require_once("./controller/PairFeedBack.php");
require_once("./model/Pair.php");
require_once("./model/PairFeedBack.php");
require_once("./controller/ReferenceDetection.php");
require_once("./helper/ViewHelper.php");
$controller = "Home";
$action = "index";

if (isset($_REQUEST["controller"]))
{    
    $controller = $_REQUEST["controller"];
}

if (isset($_REQUEST["action"]))
{    
    $action = $_REQUEST["action"];
}

switch ($controller."_".$action)
{           
    case "Home_index":
        $controller = new HomeController();
        $controller->index();
        break;
    case "Home_ask":
        $controller = new HomeController();
        $controller->ask();
        break;
    case "Pair_add":
        $controller = new PairController();
        $controller->add();
        break;
    case "Pair_list":
        $controller = new PairController();
        $controller->listall();
        break;
    case "Pair_view":
        $controller = new PairController();
        $controller->view();
        break;
    case "PairFeedBack_add":
        $controller = new PairFeedBackController();
        $controller->add();
        break;
    case "PairFeedBack_list":
        $controller = new PairFeedBackController();
        $controller->listall();
        break;
    case "PairFeedBack_view":
        $controller = new PairFeedBackController();
        $controller->view();
        break;
    default:
        echo "$controller_$action : Not found !!!";        
        break;
}


