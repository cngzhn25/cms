<?php

function admin_controller($controllerName)
{
    $controllerName = strtolower($controllerName);
    return PATH. "/admin/controller/" . $controllerName. ".php";
}

function admin_view($viewName) {
    $viewName = strtolower($viewName);
    return PATH. "/admin/view/" . $viewName . ".php";
}

function admin_url($url = null)
{
    return URL . "/admin/" . $url;
}

function admin_public_url($url = null)
{
    return URL . "/admin/public/" . $url;
}

function menu_control($key, $array)
{
    if(!is_array($array)) {
        return false;
    } else {
        foreach ($array as $url => $val) {
            if($key == $url) {
                return true;
            }
            if(is_array($val)) {
                 menu_control($key, $val);
            }
        }
        return false;
    }

}
