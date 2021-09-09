<?php

	include_once 'db.php';

	$date = time();

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$identity = $_POST['identity'];
    $address = $_POST['address'];

	$language = $_POST['language'];
	$pets = $_POST['pets'];

	$firstname2 = $_POST['firstname2'];
	$lastname2 = $_POST['lastname2'];
	$career = $_POST['career'];
	$job = $_POST['job'];
    $parentphonenumber = $_POST['parentphonenumber'];
	$jobhours = $_POST['jobhours'];
	$parentemail = $_POST['parentemail'];

	$firstname3 = $_POST['firstname3'];
	$lastname3 = $_POST['lastname3'];
	$career2 = $_POST['career2'];
	$job2 = $_POST['job2'];
    $parentphonenumber2 = $_POST['parentphonenumber2'];
	$jobhours2 = $_POST['jobhours2'];
	$parentemail2 = $_POST['parentemail2'];

	$relationship = $_POST['relationship'];

    $daycare = $_POST['daycare'];
	$startdate = $_POST['startdate'];
    $dayscount = $_POST['dayscount'];
	$dailycare = $_POST['dailycare'];
	$familychildrens = $_POST['familychildrens'];
	$becontacted = $_POST['becontacted'];
	$hospital = $_POST['hospital'];
	$allergic = $_POST['allergic'];
	$hospital2 = $_POST['hospital2'];
	$extrainfo = $_POST['extrainfo'];


	$message =
				"Lapsen etunimet: $firstname"
	.PHP_EOL.	"Lapsen sukunimi:   $lastname"
	.PHP_EOL.	"Lapsen henkilötunnus:   $identity"
	.PHP_EOL.	"Lapsen äidinkieli:   $address"
	.PHP_EOL.	"Lapsen äidinkieli:   $language"
	.PHP_EOL.	"Onko kotona lemmikkieläimiä:   $pets"
	.PHP_EOL. PHP_EOL. PHP_EOL.

	$message = PHP_EOL. "Kuittaa hakemus luetuksi: " . $http_host  ."kindergarten_verify.php?email=$parentemail&hash=$hash";

	$headers = 'From: paivahoitohakemus@pirtti.com' . "\r\n" .
	'Reply-To: noreply@pirtti.com' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	mail('jermu.karjalainen@gmail.com', 'Paivahoitohakemus | Pirtti',$message, $headers);
	echo "Varhaiskasvatushakemus lähetetty!";
	header( "Refresh:1; url=doneApplication.php", true, 5);

	

	$hash = md5($parentemail.$parentphonenumber.$date);

	


try	{
	$stmt = $conn->prepare("INSERT INTO kindergarten_application (parentemail, parentphonenumber, date, hash) VALUES ('$parentemail', '$parentphonenumber',  DATE(NOW()), '$hash')");
	$stmt->bindParam(':parentemail', $parentemail);
	$stmt->bindParam(':parentphonenumber', $parentphonenumber);
	$stmt->bindParam(':date', $date);
	$stmt->bindParam(':hash', $hash);



if($stmt->execute() == false){
    $data = array(
        'error' => 'Error!!'
    );
} else {
        $data = array(
            'success' => 'Uusi Hakemus!!'
        );
    }
} catch (PDOException $e) {
    $data = array(
        'error' => $e->getMessage()
    );
}


header("Content-type: application/json;charset=utf-8");
echo json_encode($data);

?>