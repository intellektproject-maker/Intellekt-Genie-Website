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

// Reject unexpectedly large input before processing or sending.
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

// Prevent header injection in the email value sent as Reply-To.
$clean_email = str_replace(["\r", "\n", "%0a", "%0d"], '', $email);
$clean_name = str_replace(["\r", "\n", "%0a", "%0d"], '', $name);

// Web3Forms configuration.
// The access key is a public form key and is safe to use in website code.
$web3formsAccessKey = "33bef98b-c0aa-4e21-80b8-32aa96322e42";

$subject = "Website Enquiry Details from $clean_name";

$payload = [
    'access_key' => $web3formsAccessKey,
    'subject' => $subject,
    'name' => $name,
    'address' => $address,
    'phone' => $phone,
    'email' => $clean_email,
    'message' => $message,
];

// Submit the enquiry through Web3Forms HTTPS API.
// This avoids PHP mail(), local SMTP, and Railway SMTP restrictions.
$ch = curl_init('https://api.web3forms.com/submit');
curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json',
        'Accept: application/json',
    ],
    CURLOPT_POSTFIELDS => json_encode($payload),
    CURLOPT_CONNECTTIMEOUT => 10,
    CURLOPT_TIMEOUT => 20,
]);

$response = curl_exec($ch);
$curlError = curl_error($ch);
$httpCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($response !== false && $httpCode >= 200 && $httpCode < 300) {
    $result = json_decode($response, true);

    if (is_array($result) && !empty($result['success'])) {
        header("Location: thank_you.php");
        exit;
    }
}

// Log technical details server-side without exposing them to the visitor.
error_log(
    "Web3Forms contact submission failed. HTTP {$httpCode}" .
    ($curlError !== '' ? " - cURL: {$curlError}" : "") .
    ($response !== false ? " - Response: {$response}" : "")
);

header("Location: contact-us.php");
exit;
?>
