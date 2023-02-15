<?php
require_once('./autoload.php');
require_once('./controllers/HomeController.php');

$home = new HomeController();

$pages = ['index','add','delete','update','category','addCategory','Contact','index','ProductAdmin','products','pageAdmin','regester','login','dashboard','loginAdmin'];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        $home->index($page);
    }else{
        include('Views/includes/404.php');
    }
}

?>
