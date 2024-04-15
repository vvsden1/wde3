<?php
require_once __DIR__ . '/../config/database.php';
$email = "";
$updated_password = "";
$email_err = "";

// Check if the database connection is successful
if (isset($pdo)) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['email'])) {
            $email = trim($_POST["email"]);
        } else {
            $email_err = "Please enter your email.";
        }

        if (empty($email_err)) {
            $updated_password = $_POST['updated_password'];

            // Hash the new password for security
            $hashed_password = password_hash($updated_password, PASSWORD_DEFAULT);

            $sql = "UPDATE users SET password = :updated_password WHERE email = :email";
            
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['updated_password' => $hashed_password, 'email' => $email]);

            if ($stmt->rowCount() > 0) {
                echo "Password updated successfully.";
            } else {
                echo "Failed to update password.";
            }
        }
    }
} else {
    echo "Database connection failed. Please check your database configuration.";
}
?>
