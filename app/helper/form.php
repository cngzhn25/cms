<?php

function post($name)
{
    return isset($_POST[$name]) ? htmlspecialchars(trim($_POST[$name])) : null;
}

function get($name)
{
    return isset($_GET[$name]) ? htmlspecialchars(trim($_GET[$name])) : null;
}

