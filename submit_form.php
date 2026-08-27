<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (!empty($_POST["website"])) {
die("Spam detected. Submission blocked.");
}

// function to sanitize input
function clean_input($data) {
return htmlspecialchars(strip_tags(trim($data)));
}

// Sanitize individual fields
$name = clean_input($_POST["name"] ?? '');
$address = clean_input($_POST["address"] ?? '');
$phone = clean_input($_POST["phone"] ?? '');
$email = filter_var($_POST["email"] ?? '', FILTER_SANITIZE_EMAIL);
$message = clean_input($_POST["message"] ?? '');



// Validate required fields
if (empty($name) ||empty($address) || empty($phone) || empty($email) || empty($message) ) {
die("Error: All required fields must be filled out.");
}

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
die("Error: Invalid email format.");
}

// Prevent header injection in email
$clean_email = str_replace(["\r", "\n", "%0a", "%0d"], '', $email);

// Build email content
$to = "info@intellektgenie.com";  
$subjects = "Website Enquiry Details from $name";

$messages = <<<EMAIL
You have received a new intellekt Enquiry Details:<br/>

Name: $name<br/>
Address: $address<br/>
Phone: $phone<br/>
Email: $clean_email<br/>
Message: $message

EMAIL;
// die();

// Email headers
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

$headers .= "Reply-To: $clean_email\r\n";

// Send the email
if (mail($to, $subjects, $messages, $headers)) {
header("Location:thank_you.php");
} else {
header("Location:contact.php");
}
} else {
echo "Invalid request.";
}
?>