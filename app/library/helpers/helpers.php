<?php

function dnd($data){
    echo '<pre>';
        var_dump($data);
    echo '</pre>';
    die();
}

function sanitize($dirty){
    // return htmlentities($dirty, ENT_QUOTES, 'utf-8');
    return htmlspecialchars($dirty, ENT_COMPAT, 'UTF-8');
    // return $dirty;
}

function currentUser() {
    return Users::currentLoggedInUser();
}

function posted_values($post){
    $clean_array = [];
    foreach($post as $key => $value){
        $clean_array[$key] = sanitize($value);
    }

    return $clean_array;
}

function currentPage() {
    $currentPage = $_SERVER['REQUEST_URI'];
    if($currentPage == PROOT || $currentPage == PROOT . 'home/index'){
        $currentPage = PROOT . 'home';
    }
    return $currentPage;
}

function getObjectProperties($obj){
    return get_object_vars($obj);
}


?>