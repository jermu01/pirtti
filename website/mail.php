<?php
if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['identity'])) {
    $firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$identity = $_POST['identity'];
    $to = 'jere.karjalainen@esedulainen.fi';
    $subject = "Morjens";
    $body = '<html>
                <body>
                    <h2>Tiedot</h2>
                    <hr>
                    <p>"Lapsen etunimet<br>'.$firstname.'</p>
                    <p>"Lapsen sukunimi<br>'.$lastname.'</p>
                    <p>"Lapsen henkilötunnus<br>'.$identity.'</p>
                </body>
            </html>';
    $headers = 'From: joku@gmail.com' . "\r\n" .
                'Reply-To: noreply@pirtti.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
    $send = mail($to, $subject, $body, $headers);
}
?>