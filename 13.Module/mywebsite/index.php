<?php



// Get the current request URI
$request = $_SERVER['REQUEST_URI'];

// Remove the project folder name from the URI (if applicable)
$request = str_replace('/EDGE-RUET-CSE-RUETCSEB0101/13.Module/mywebsite', '', $request);

// Match the requested path
switch ($request) {
    case '/home':
        echo "Welcome to the Home page!";
        break;
 
    case "/":
        include"views/home.php";
        break;
   
    default:
        echo "Page not found!";
        break;  

}




?>