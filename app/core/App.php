<?php

function parseURL(){
    if(isset($_GET['url'])){
        $url = rtrim($_GET['url'],'/');
        $url = filter_var($url,FILTER_SANITIZE_URL);
        $url = explode('/',$url);
        return $url;
    }
}

function App (){
    $module = "home";
    $function = "index";

    $url = parseURL();

    if (isset($url[0])){
        if (file_exists("../app/functions/" . $url[0] . ".php")){
            $module = $url[0];
            unset($url[0]);
        }
    }
    require_once "../app/functions/" . $module . '.php';

    if(isset($url[1])) {
        if (method_exists($module,$url[1])){
            $function = $url[1];
            unset($url[1]);
        }
    }

    return [$module,$function];
}

function views($folder, $module) {
    $view = $folder . "/" .  $module;
    require_once '../app/views/' . $view . '.php';
}
function functions($module) {
    require_once '../app/functions/' . $module . '.php';
}