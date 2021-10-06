<?php

include_once 'db.php'; //database connection

$data = array();

$hash = $_GET['hash']; //GET hash

try {
        $stmt = $conn->prepare("SELECT parentemail, hash FROM preschool_application WHERE parentemail = :parentemail AND hash = :hash"); //SELECT statement
        $stmt->bindParam(':parentemail', $parentemail); //bindParam variable
        $stmt->bindParam(':hash', $hash); //bindParam variable

        //run stmt
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
        $stmt = $conn->prepare("DELETE FROM preschool_application WHERE hash = :hash"); //DELETE statement
        $stmt->bindParam('hash', $hash); //bindParam variable

        //run stmt
        if ($stmt->execute() === false){
          $data = array(
            'error' => 'Failed!'
          );
      } else {
        $data = array(
          'success' => 'Hakemus kuitattu luetuksi!'
          );
            //mail
            $to      = $parentemail; //application creator
            $subject = ' Esikouluhakemus on luettu!';
            $message = '
            Hei!
            Jättämänne Esikouluhakemus on kuitattu luetuksi.
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
            mail($to, $subject, $message, $headers); //all information will be sended
            header("Location: ../website/applicationReaded.php"); //control you in new website
      }

    } catch (PDOException $e) {
      $data = array(
          'error' => 'Tapahtui joku virhe!!'
        );
    }

header("Content-type: application/json;charset=utf-8");
echo json_encode($data);
