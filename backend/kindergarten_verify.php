<?php

$data = array();

if (!isset($_POST['parentemail']) || !isset($_POST['hash'])){
  $data = array(
      'error' => 'Error!'
  );
  die();
}
   
  $parentemail = $_GET['parentemail']); 
  $hash = $_GET['hash']);

  include_once 'db.php';

try {
        $stmt = $conn->prepare("SELECT parentemail, hash FROM kindergarten WHERE parentemail = :parentemail AND hash = :hash");
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

        $stmt = $conn->prepare("DELETE FROM kindergarten WHERE hash = :hash");
        $stmt->bindParam('hash', $hash);
        if ($stmt->execute() == false){
          $data = array(
              'error' => 'Error occured!'
          );
      } else {
          $data = array(
            echo "Hakemus kuitattu luetuksi";
            $to      = $email;
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
            $headers = 'Päivähoitohakemus | Pirtti' . "\r\n";
            mail($to, $subject, $message, $headers);
          );
      }
  
  } catch (PDOException $e) {
      $data = array(
          'error' => 'Tapahtui joku virhe!!'
      );
  }


?>
</body>
</html>
