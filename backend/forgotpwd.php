<?php

include_once 'db.php';

//Post-data
$email = $_POST['email'];

try {
    $stmt = $conn->prepare("SELECT email FROM admin_user WHERE email = :email"); //SELECT statement
    $stmt->bindParam(':email', $email); //bindParam variable

    //run stmt
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

    //mail

    $url = "https://localhost/pirtti/forgotpwd/pwdreset.php"; //url to website where u can create new password

    $to = $email; //password reset requester email

    //mail subject & messages
    $subject = 'Vaihda salasanasi Päiväkoti Pirrti Admin sivustolle.';

    $message = '<p>Salasana linkin avulla voit vaihtaa uuden salasanan.</p>';
    $message .= '<p>Linkki salasanan vaihtamiseen: </br>';
    $message .= '<a href="' . $url . '">' . $url . '</a></p>';

    $headers = "From: paivahoitohakemus@pirtti.com\r\n";
	$headers .= "Reply-To: noreply@pirtti.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers); //all information will be sended

    header("Content-type: application/json;charset=utf-8");
    echo json_encode($data);