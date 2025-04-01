<?php  
class ContactController {  
    public function sendEmail() {  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {  
            // Handle form submission  
            $to = "ngangaharrison490@gmail.com";  
            $from = $_POST['email'] ?? '';  
            $name = $_POST['name'] ?? '';  
            $subject = $_POST['subject'] ?? '';  
            $message = $_POST['message'] ?? '';  

            // Validate inputs  
            if (empty($from) || empty($name) || empty($subject) || empty($message)) {  
                echo "Please fill all fields.";  
                return;  
            }  

            $headers = "From: $from\r\n";  
            $send = mail($to, $subject, $message, $headers);  

            if ($send) {  
                header('Location: contact.view.php?status=success'); // Redirect on success  
                exit;  
            } else {  
                echo "Failed to send email.";  
            }  
        }  
    }  
}  
?>