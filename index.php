<head>
    <link rel="icon" type="image/x-icon" href="https://cdn.icon-icons.com/icons2/1066/PNG/512/Books_icon-icons.com_76879.png">
</head>

<?php
require("controllers/controller.php");

if (isset($_GET["page"]) && !empty($_GET["page"])) {

    $page = htmlspecialchars($_GET["page"]);

    if ($page == "home") {
        DisplayHome();
    } 

    else if ($page == "books") {
        DisplayBooks();
    }

    else{
        Display404();
    }
} 
