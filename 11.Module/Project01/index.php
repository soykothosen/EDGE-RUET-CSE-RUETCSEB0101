<?php
include "dbconnect.php";


// Get the current request URI
$request = $_SERVER['REQUEST_URI'];

// Remove the project folder name from the URI (if applicable)
#$request = str_replace('/my_project', '', $request);
#$request = str_replace('/EDGE-RUET-CSE-RUETCSEB0103/EDGE-RUET-CSE-RUETCSEB0103/10.Module/my_project', '', $request);
$request = str_replace('/EDGE-RUET-CSE-RUETCSEB0101/11.Module/Project01', '', $request);

// Match the requested path
switch ($request) {
    case '/home':
        echo "Welcome to the Home page!";
        break;
    case '/about':
        echo "Welcome to the About page!";
        break;
    case '/':
        echo "Welcome to the Default Home page!";
        break;
    case "/page1":
        include"page1.php";
        break;

    default:
        echo "Page not found!";
        break;  

}




?>