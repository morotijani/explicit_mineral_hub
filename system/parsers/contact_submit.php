<?php

require_once dirname(__DIR__) . '/DatabaseConnector.php';


if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and retrieve form data
    $firstName = sanitize($_POST['first_name'] ?? '');
    $lastName = sanitize($_POST['last_name'] ?? '');
    $email = sanitize($_POST['email'] ?? '');
    $companyName = sanitize($_POST['company_name'] ?? '');
    $phone = sanitize($_POST['phone'] ?? '');
    $message = sanitize($_POST['message'] ?? '');

    // Basic validation
    if (empty($firstName) || empty($lastName) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message)) {
        $_SESSION['error_message'] = "Please fill all required fields correctly.";
        redirect(PROOT . "contact");
        exit();
    }

    // insert into database table
    $sql = "INSERT INTO `contacts`(`contact_id`, `fname`, `lname`, `email`, `compnay_name`, `phone_number`, `message`) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $statement = $dbConnection->prepare($sql);
    $statement->execute([
        guidv4() . strtotime("now"),
        $firstName,
        $lastName,
        $email,
        $companyName,
        $phone,
        $message
    ]);

    try {
        $subject = 'New Contact Form Submission from ' . $firstName . ' ' . $lastName;
        $body = "<h2>New Contact Form Submission</h2>";
        $body .= "<p><strong>Name:</strong> {$firstName} {$lastName}</p>";
        $body .= "<p><strong>Email:</strong> {$email}</p>";
        if (!empty($phone)) {
            $body .= "<p><strong>Phone:</strong> {$phone}</p>";
        }
        if (!empty($companyName)) {
            $body .= "<p><strong>Company:</strong> {$companyName}</p>";
        }
        $body .= "<p><strong>Message:</strong><br>" . nl2br($message) . "</p>";

        send_email($name, $to, $subject, $body);
        
        $_SESSION['success_message'] = 'Your message has been sent successfully!';
    } catch (Exception $e) {
        // You might want to log the detailed error message instead of showing it to the user
        // error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        $_SESSION['error_message'] = "Message could not be sent. Please try again later.";
    }

    redirect(PROOT . "contact");
    exit();

} else {
    // Not a POST request
    redirect(PROOT . "contact");
    exit();
}