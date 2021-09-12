<?php

if (isset($_POST["reset-request-submit"])) {
    
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "https://localhost/pirtti/forgotpwd/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expires = date("U") + 180;

    require 'db.php';

    $userEmail = $_POST["email"];

    $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pwdreset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();
    } else {
        $hashToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashToken, $expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    $to = $userEmail;

    $subject = 'Change your password for Päiväkoti Pirrti ry.';

    $message = '<p>Password reset link with link you can reset and choice new password if you didnt tried change your password, you can ignore this mail.</p>';
    $message .= '<p>Link for reset your password: </br>';
    $message .= '<a href="' . $url . '">' . $url . '</a></p>';

    $headers = "From: paivahoitohakemus@pirtti.com\r\n";
	$headers .= "Reply-To: noreply@pirtti.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);

    header("Location: reset-password.php?reset=success");

} else {
    header("Location: ../admin/login.php");
}