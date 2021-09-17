<?php

include_once 'db.php';

$data = array();

$hash = $_GET['hash'];

try {
        $stmt = $conn->prepare("SELECT parentemail, hash FROM kindergarten_applications WHERE parentemail = :parentemail AND hash = :hash");
        $stmt->bindParam(':parentemail', $parentemail);
        $stmt->bindParam(':hash', $hash);

        if ($stmt->execute() == false){
          $data['error'] = 'Error occured!';
        } else {
          $result = $stmt->fetch(PDO::FETCH_ASSOC);
          $data = $result;
        }
    } catch (PDOException $e) {
      $data = array(
          'error' => 'Tapahtui joku virhe!!'
        );
    }

try {
        $stmt = $conn->prepare("DELETE FROM kindergarten_applications WHERE hash = :hash");
        $stmt->bindParam('hash', $hash);
        if ($stmt->execute() === false){
          $data = array(
            'error' => 'Failed!'
          );
      } else {
        $data = array(
          'success' => 'Hakemus kuitattu luetuksi!'
          );

            $to      = $parentemail;
            $subject = ' Päivähoitohakemus on luettu!';
            $message = '
            Hei!
            Jättämänne päivähoitohakemus on kuitattu luetuksi.
            -----------------------
            Päiväkotiyhdistys Pirtti ry
            Puh. 0440 214 297
            Telkänkatu 2 50190 Mikkeli
            pkpirttiry@surffi.fi

            (Tämä on automaattisesti lähetetty ilmoitus. Älä vastaa tähän viestiin!)
            ';
            $headers = 'From: paivahoitohakemus@pirtti.com' . "\r\n" .
                        'Reply-To: noreply@pirtti.com' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
            mail($to, $subject, $message, $headers);
            header("Location: ../website/applicationReaded.php");
      }

    } catch (PDOException $e) {
      $data = array(
          'error' => 'Tapahtui joku virhe!!'
        );
    }

header("Content-type: application/json;charset=utf-8");
echo json_encode($data);
