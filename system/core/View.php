<?php


class Views
{
    function getView($controller,$view,$data=""){
        $controller = get_class($controller);
        if ($controller == "home"){
            $view = "app/views/".$view.".php";
            if ($controller == "about"){
                $view = "app/views/".$view.".php";
            }
        }else{
            //'app/views/Home/home.php'
            $view = "app/views/".$view.".php";
        }
        require_once ($view);
    }
}