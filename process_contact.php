<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $service = trim($_POST['service'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    // Validate inputs
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        // Email configuration
        $to = "info@agroconsultpro.com";
        $subject = "New Contact Form Submission";
        
        // Email content
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Phone: $phone\n";
        $email_content .= "Service: $service\n\n";
        $email_content .= "Message:\n$message\n";
        
        // Headers
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        // Send email
        if (mail($to, $subject, $email_content, $headers)) {
            // Redirect with success message
            header("Location: contact.php?status=success");
            exit;
        } else {
            // Redirect with error message
            header("Location: contact.php?status=error");
            exit;
        }
    } else {
        // Redirect with error messages
        $error_string = implode(",", $errors);
        header("Location: contact.php?status=error&messages=" . urlencode($error_string));
        exit;
    }
} else {
    // If not POST request, redirect to contact page
    header("Location: contact.php");
    exit;
}
?> 