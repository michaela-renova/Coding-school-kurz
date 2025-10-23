<?php

$routes =
[
    "/onas",
    "/rezervace",
];

$URL = $_SERVER['REQUEST_URI'];

$clearURL = str_replace("/", "", $URL);

if(in_array($clearURL, $routes))
{
    $name = "Tom";
    require "{$clearURL}.php";
}else
{
    require "error.php";
}

