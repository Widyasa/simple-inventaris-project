<?php 

function assets($path){
    return BASEURL . "/assets/$path";
}

function url($path){
    return ("Location: ".BASEURL . "/$path");
}

function redirect($string){
    header("Location: " . BASEURL . "$string");
    exit;
}