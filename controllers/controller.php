<?php
function DisplayHome()
{
    require("../views/home.php");
}

function DisplayBooks()
{
    require("../views/connexion.php");
    $data = dball();
    require("../views/books.php");
}


function Display404()
{
    require("../views/404.php");
}