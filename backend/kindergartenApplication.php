<?php

	include_once 'db.php'; //database connection

	//Post-data
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

	$hash = md5($parentemail.$parentphonenumber); //hash

	$url = "https://www.pkpirttiry.fi/backend/"; 

	$to = "pkpirttiry@surffi.fi"; //application creator
	// $to = "jermu.karjalainen@gmail.com"; //application creator

	//mail
	$subject = 'Varhaiskasvatushakemuksen tiedot';

	$message =
	"Lapsen etunimet: $firstname" . "\r\n" .
	"Lapsen sukunimi:   $lastname" . "\r\n" .
	"Lapsen henkilötunnus:   $identity" . "\r\n" .
	"Lapsen äidinkieli:   $address" . "\r\n" .
	"Lapsen äidinkieli:   $language" . "\r\n" .
	"Onko kotona lemmikkieläimiä:   $pets" . "\r\n" .
	"\r\n" .		

	"Huoltajan etunimi:   $firstname2" . "\r\n" .
	"Huoltajan sukunimi:   $lastname2" . "\r\n" .
	"Huoltajan ammatti:   $career" . "\r\n" .
	"Huoltajan työ:   $job" . "\r\n" .
	"Huoltajan puhelinnumero:   $parentphonenumber" . "\r\n" .
	"Huoltajan työaika:   $jobhours" . "\r\n" .
	"Huoltajan sähköposti:   $parentemail" . "\r\n" .
	"\r\n" .
	
	"Puolison etunimi:   $firstname3" . "\r\n" .
	"Puolison sukunimi:   $lastname3" . "\r\n" . 
	"Puolison ammatti:   $career2" . "\r\n" .
	"Puolison työ:   $job2" . "\r\n" .
	"Puolison puhelinnumero:   $parentphonenumber2" . "\r\n" .
	"Puolison työaika:   $jobhours2" . "\r\n" .
	"Puolison sähköposti:   $parentemail2" . "\r\n" .
	"Perhesuhde:   $relationship" . "\r\n" .
	"\r\n" .
	
	"Toivottu päivähoitomuoto:   $daycare" . "\r\n" .
	"Toivottu alkamispäivä:   $startdate" . "\r\n" .
	"Hoitopäivien lukumäärä/kk:   $dayscount" . "\r\n" .
	"Päivittäinen hoitoaika:   $dailycare" . "\r\n" .
	"\r\n" .

	"Kotona asuvien alle 18-vuotiaiden lasten nimet, syntymäajat sekä alle kouluikäisten päivähoitopaikat:   $familychildrens" . "\r\n" .
	"\r\n" .
	
	"Saako tarvittaessa olla yhteydessä päivähoidon eri yhteistyötahojen (kuten neuvolan) kanssa lapsen kehitystä ja terveyttä koskevissa asioissa:   $becontacted" . "\r\n" .
	"Mitä lastenneuvolaa olette viimeksi käyttänyt, osoite:   $hospital" . "\r\n" .
	"Sairaudet, allergiat, ruokavalio ym:   $allergic" . "\r\n" .
	"Onko lapsi ollut sairaalahoidossa tai jatkuvassa lääkärinhoidossa, milloin ja miksi?:   $hospital2" . "\r\n" .
	"Lisätiedot hakemuksen perusteeksi:   $extrainfo" . "\r\n" .
	"\r\n" .

	// "Kuittaa hakemus luetuksi: ". $url ."kindergarten_verify.php?parentemail=$parentemail&hash=$hash" . "\r\n" . //link for accepting application
	"Kuittaa hakemus luetuksi: ". $url ."kindergarten_verify.php?parentemail=$parentemail&hash=$hash" . "\r\n" .
	"\r\n" .

	"Älä vastaa tähän viestiin!". "\r\n" .
	"\r\n" .
	$headers = 'From: paivahoitohakemus@pirtti.com' . "\r\n" .
				'Reply-To: noreply@pirtti.com' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers); //all information will be sended
	

try {
		$stmt = $conn->prepare("INSERT INTO kindergarten_applications (parentemail, parentphonenumber, date, hash) VALUES (:parentemail, :parentphonenumber,  DATE(NOW()), :hash);"); //INSERT statement
		$stmt->bindParam(':parentemail', $parentemail); //bindParam variable
		$stmt->bindParam(':parentphonenumber', $parentphonenumber); //bindParam variable
		$stmt->bindParam(':hash', $hash); //bindParam variable

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



header("Content-type: application/json;charset=utf-8");
echo json_encode($data);
