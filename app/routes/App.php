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
    $view = "landing"; //default functions
    $function = "index"; //default method
    $parameters = [];

    $url = parseURL();

    //FUNCTIONS
    if (isset($url[0])){
        if (file_exists("../app/functions/" . $url[0] . ".php")){
            $view = $url[0];
            unset($url[0]);
        }
    }
    require_once "../app/functions/" . $view . '.php';

    //FUNCTION
    if(isset($url[1])) {
        if (method_exists($view,$url[1])){
            $function = $url[1];
            unset($url[1]);
        }
    }

    //PARAMETERS
    if (!empty($url)){
        $parameters = array_values(($url));
    }

    call_user_func_array([$view,$function],$parameters);
}