<?php
session_set_cookie_params([
    'httponly' => true,
    'secure' => (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'),
    'samesite' => 'Lax',
]);
session_start();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "Invalid request.";
    exit;
}

// CSRF protection for the public contact form.
$csrfToken = $_POST["csrf_token"] ?? '';
if (empty($_SESSION['contact_csrf']) || !is_string($csrfToken) || !hash_equals($_SESSION['contact_csrf'], $csrfToken)) {
    http_response_code(403);
    exit("Invalid form submission.");
}
unset($_SESSION['contact_csrf']);

// Honeypot field: real users should leave this empty.
if (!empty($_POST["website"])) {
    die("Spam detected. Submission blocked.");
}

// Sanitize input while preserving the existing form behaviour.
function clean_input($data) {
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
}

$name = clean_input($_POST["name"] ?? '');
$address = clean_input($_POST["address"] ?? '');
$phone = clean_input($_POST["phone"] ?? '');
$email = filter_var($_POST["email"] ?? '', FILTER_SANITIZE_EMAIL);
$message = clean_input($_POST["message"] ?? '');

// Reject unexpectedly large input before processing or sending email.
if (strlen($name) > 100 || strlen($address) > 250 || strlen($phone) > 20 || strlen($email) > 254 || strlen($message) > 5000) {
    http_response_code(413);
    exit("Error: One or more fields are too long.");
}

// Validate required fields.
if (empty($name) || empty($address) || empty($phone) || empty($email) || empty($message)) {
    die("Error: All required fields must be filled out.");
}

// Validate email format.
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Error: Invalid email format.");
}

// Prevent header injection in the Reply-To header and subject.
$clean_email = str_replace(["\r", "\n", "%0a", "%0d"], '', $email);
$clean_name = str_replace(["\r", "\n", "%0a", "%0d"], '', $name);

// Keep the existing recipient and email workflow.
$to = "info@intellektgenie.com";
$subject = "Website Enquiry Details from $clean_name";

$message_body = <<<EMAIL
You have received a new Intellekt Robotics enquiry:<br/>

Name: $name<br/>
Address: $address<br/>
Phone: $phone<br/>
Email: $clean_email<br/>
Message: $message
EMAIL;

// Email headers.
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "Reply-To: $clean_email\r\n";

// Send the enquiry email and preserve the existing success/failure flow.
if (mail($to, $subject, $message_body, $headers)) {
    header("Location: thank_you.php");
    exit;
}

header("Location: contact-us.php");
exit;
?>
