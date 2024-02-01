<?php

// Function to sanitize input data
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

// Validate and sanitize form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if honeypot field is empty (indicating it wasn't filled by a human)
    if (!empty($_POST["honeypot"])) {
        // Redirect back to contact page or display an error message
        header("Location: test.html");
        exit();
    }

    $name = sanitizeInput($_POST["name"]);
    $email = sanitizeInput($_POST["email"]);
    $message = sanitizeInput($_POST["message"]);

    // Validate name
    if (empty($name)) {
        $error = "Name is required";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $error = "Only letters and white space allowed for name";
    }

    // Validate email
    if (empty($email)) {
        $error = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format";
    }

    // Validate message
    if (empty($message)) {
        $error = "Message is required";
    }

    // If no errors, process the form
    if (!isset($error)) {
		try {
			mail($to, $subject, $body, $headers);
			echo "<h2>Thank you for your message, $name!</h2>";
			// Email sent successfully, replace the form with a thank you message
		} catch (Exception $e) {
			// Error sending email
			echo "<h2>Oops! Something went wrong. Please try again later.</h2>";
			debug_to_console($e->getMessage(), "\n");
		}
    } else {
        // If there are errors, redirect back to contact page with error message
        header("Location: test.html?error=" . urlencode($error));
        exit();
    }
} else {
    // If form is not submitted, redirect back to contact page
    header("Location: test.html");
    exit();
}

?>
