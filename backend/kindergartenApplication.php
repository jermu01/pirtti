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

	$message =
				"Huoltajan etunimi:   $firstname2"
	.PHP_EOL.	"Huoltajan sukunimi:   $lastname2"   
	.PHP_EOL.	"Huoltajan ammatti:   $career"
	.PHP_EOL.	"Huoltajan työ:   $job"
	.PHP_EOL.	"Huoltajan puhelinnumero:   $parentphonenumber"
	.PHP_EOL.	"Huoltajan työaika:   $jobhours"
	.PHP_EOL.	"Huoltajan sähköposti:   $parentemail"
	.PHP_EOL. PHP_EOL. PHP_EOL.

	$message =
				"Puolison etunimi:   $firstname3"
	.PHP_EOL.	"Puolison sukunimi:   $lastname3"   
	.PHP_EOL.	"Puolison ammatti:   $career2"
	.PHP_EOL.	"Puolison työ:   $job2"
	.PHP_EOL.	"Puolison puhelinnumero:   $parentphonenumber2"
	.PHP_EOL.	"Puolison työaika:   $jobhours2"
	.PHP_EOL.	"Puolison sähköposti:   $parentemail2"
	.PHP_EOL.	"Perhesuhde:   $relationship"
	.PHP_EOL. PHP_EOL. PHP_EOL.

	$message =
				"Toivottu päivähoitomuoto:   $daycare"
	.PHP_EOL.	"Toivottu alkamispäivä:   $startdate"
	.PHP_EOL.	"Hoitopäivien lukumäärä/kk:   $dayscount"
	.PHP_EOL.	"Päivittäinen hoitoaika:   $dailycare"
	.PHP_EOL. PHP_EOL. PHP_EOL.

	$message =
				"Kotona asuvien alle 18-vuotiaiden lasten nimet, syntymäajat sekä alle kouluikäisten päivähoitopaikat:   $familychildrens" 
	.PHP_EOL. PHP_EOL. PHP_EOL.

	$message =
				"Saako tarvittaessa olla yhteydessä päivähoidon eri yhteistyötahojen (kuten neuvolan) kanssa lapsen kehitystä ja terveyttä koskevissa asioissa:   $becontacted"
	.PHP_EOL.	"Mitä lastenneuvolaa olette viimeksi käyttänyt, osoite:   $hospital"
	.PHP_EOL.	"Sairaudet, allergiat, ruokavalio ym:   $allergic"
	.PHP_EOL.	"Onko lapsi ollut sairaalahoidossa tai jatkuvassa lääkärinhoidossa, milloin ja miksi?:   $hospital2"
	.PHP_EOL.	"Lisätiedot hakemuksen perusteeksi:   $extrainfo"
	.PHP_EOL. PHP_EOL. PHP_EOL.

	$message =
				"Älä vastaa tähän viestiin!"
	.PHP_EOL. PHP_EOL. PHP_EOL.


	$message = PHP_EOL. "Kuittaa hakemus luetuksi: " . $http_host  ."kindergarten_verify.php?email=$parentemail&hash=$hash";

	

	try {
			$stmt = $conn->prepare("INSERT INTO kindergarten_applications (parentemail, parentphonenumber, date, hash) VALUES (:parentemail, :parentphonenumber,  DATE(NOW()), :hash);");
			$stmt->bindParam(':parentemail', $parentemail);
			$stmt->bindParam(':parentphonenumber', $parentphonenumber);
			$stmt->bindParam(':date', $date);
			$stmt->bindParam(':hash', $hash);

			if($stmt->execute() == false){
				$data = array(
					'error' => 'Tapahtui joku virhe tallennuksessa!'
				);
			} else {
				$data = array(
					$hash = md5($parentemail, $parentphonenumber, $date
					
				);
			}
		
		} catch (PDOException $e) {
			$data = array(
				'error' => 'Tapahtui joku virhe!!'
			);
		}


$headers = 'From: paivahoitohakemus@pirtti.com' . "\r\n" .
'Reply-To: noreply@pirtti.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
mail('jermu.karjalainen@gmail.com', 'Paivahoitohakemus | Pirtti',$message, $headers);
echo "Varhaiskasvatushakemus lähetetty!";

echo json_encode($data);
