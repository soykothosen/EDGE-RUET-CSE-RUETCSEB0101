<?php
include "dbcon.php";


// Get the current request URI
$request = $_SERVER['REQUEST_URI'];

// Remove the project folder name from the URI (if applicable)
$request = str_replace('/EDGE-RUET-CSE-RUETCSEB0101/13.Module/mywebsite', '', $request);

// Match the requested path
switch ($request) {
    
    case "/":

        $sql = "SELECT * FROM `changinfo`";
        $result = $conn->query($sql);

        $output = $result->fetch_all(MYSQLI_ASSOC);

        #print_r($output[0]['title']);



        include"views/home.php";
        break;
    
    case "/page01":
        echo "Welcome to Page 01";
        break;
    
    case "/adminpanel":
        echo "Welcome to Admin Panel";
        break;
   
    default:
        echo "Page not found!";
        break;  

}




?>