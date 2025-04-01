<?php  
require "views/contact.view.php";   

// Check if the form has been submitted  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    // Use null coalescing operator to avoid undefined index warnings  
    $to = "ngangaharrison490@gmail.com";  
    $from = $_REQUEST['email'] ?? '';  
    $name = $_REQUEST['name'] ?? '';  
    $subject = $_REQUEST['subject'] ?? '';  
    $number = $_REQUEST['number'] ?? '';  
    $message = $_REQUEST['message'] ?? '';  

    // Validate input (you can add more validation as needed)  
    if (empty($from) || empty($name) || empty($subject) || empty($message)) {  
        echo "Please fill out all required fields.";  
        exit;  
    }  

    $headers = "From: $from\r\n";  
    $headers .= "Reply-To: $from\r\n";  
    $headers .= "MIME-Version: 1.0\r\n";  
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";  

    $subject = "You have a message.";  

    $logo = ''; // Add your logo URL if needed  
    $link = '#'; // Add your link if needed  

    $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";  
    $body .= "<table style='width: 100%;'>";  
    $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";  
    $body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";  
    $body .= "</td></tr></thead><tbody><tr>";  
    $body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";  
    $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";  
    $body .= "</tr>";  
    $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>";  
    $body .= "<tr><td></td></tr>";  
    $body .= "<tr><td colspan='2' style='border:none;'>{$message}</td></tr>";  
    $body .= "</tbody></table>";  
    $body .= "</body></html>";  

    $send = mail($to, $subject, $body, $headers);  

    if ($send) {  
        echo "Email sent successfully.";  
    } else {  
        echo "Error in sending email.";  
    }  
} else {  
    echo "Invalid request.";  
}