<?php

include_once 'db.php';

$email = $_POST['email'];

try {
    $stmt = $conn->prepare("SELECT email FROM admin_user WHERE email = :email");
    $stmt->bindParam(':email', $email);

    if($stmt->execute() == false){
        $data = array(
            'error' => 'Failed!'
        );
    } else {
        $data = array(
            'success' => 'Success!'
        );
    }
} catch (PDOException $e) {
    $data = array(
        'error' => 'Tapahtui joku virhe!!'
    );
}


    $url = "https://localhost/pirtti/forgotpwd/pwdreset.php?email=$email";

    $to = $email;

    $subject = 'Change your password for Päiväkoti Pirrti ry.';

    $message = '<p>Password reset link with link you can reset and choice new password if you didnt tried change your password, you can ignore this mail.</p>';
    $message .= '<p>Link for reset your password: </br>';
    $message .= '<a href="' . $url . '">' . $url . '</a></p>';

    $headers = "From: paivahoitohakemus@pirtti.com\r\n";
	$headers .= "Reply-To: noreply@pirtti.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);

    header("Content-type: application/json;charset=utf-8");
    echo json_encode($data);