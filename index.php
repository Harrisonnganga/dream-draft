<?php 
include "Router.php"; 
// include "config.php";
include 'DB/Database.php';

  
require 'controllers/ContactController.php';  

$action = $_GET['action'] ?? 'default'; // Default action if none is provided  

switch($action) {  
    case 'sendContact':  
        $controller = new ContactController();  
        $controller->sendEmail();  
        break;  
    default:  
        // Load other views or a default homepage  
        break;  
}  
