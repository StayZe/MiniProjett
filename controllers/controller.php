<head>
    <link rel="icon" type="image/x-icon" href="https://cdn.icon-icons.com/icons2/1066/PNG/512/Books_icon-icons.com_76879.png">
</head>

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