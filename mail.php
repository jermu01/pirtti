<?php


$message =
.PHP_EOL.	"Lapsen etunimet: $firsname "
.PHP_EOL.	"Lapsen sukunimi:   $lastname"
.PHP_EOL.	"Lapsen henkilötunnus:   $identity"
.PHP_EOL.	"Lapsen äidinkieli:   $address"
.PHP_EOL.	"Lapsen äidinkieli:   $language"
.PHP_EOL.	"Onko kotona lemmikkieläimiä:   $pets"
.PHP_EOL. PHP_EOL. PHP_EOL;

$message .=
PHP_EOL.	"Huoltajan etunimi:   $firstname2"
.PHP_EOL.	"Huoltajan sukunimi:   $lastname2"   
.PHP_EOL.	"Huoltajan ammatti:   $career"
.PHP_EOL.	"Huoltajan työ:   $job"
.PHP_EOL.	"Huoltajan puhelinnumero:   $phonenumber"
.PHP_EOL.	"Huoltajan työaika:   $jobhours"
.PHP_EOL.	"Huoltajan sähköposti:   $email"
.PHP_EOL. PHP_EOL. PHP_EOL.

$message .=
PHP_EOL.	"Huoltajan etunimi:   $firstname2"
.PHP_EOL.	"Huoltajan sukunimi:   $lastname2"   
.PHP_EOL.	"Huoltajan ammatti:   $career"
.PHP_EOL.	"Huoltajan työ:   $job"
.PHP_EOL.	"Huoltajan puhelinnumero:   $phonenumber"
.PHP_EOL.	"Huoltajan työaika:   $jobhours"
.PHP_EOL.	"Huoltajan sähköposti:   $email"
.PHP_EOL. PHP_EOL. PHP_EOL.

$message .=
PHP_EOL.	"Toivottu päivähoitomuoto:   $daycare"
.PHP_EOL. PHP_EOL. PHP_EOL.
PHP_EOL.	"Toivottu alkamispäivä:   $startdate"
.PHP_EOL.	"Hoitopäivien lukumäärä/kk:   $dayscount"
.PHP_EOL.	"Päivittäinen hoitoaika:   $dailycare"
.PHP_EOL. PHP_EOL. PHP_EOL.
PHP_EOL.	"Kotona asuvien alle 18-vuotiaiden lasten nimet, syntymäajat sekä alle kouluikäisten päivähoitopaikat:   $familychildrens"
.PHP_EOL. PHP_EOL. PHP_EOL.
PHP_EOL.	"Saako tarvittaessa olla yhteydessä päivähoidon eri yhteistyötahojen (kuten neuvolan) kanssa lapsen kehitystä ja terveyttä koskevissa asioissa::   $becontacted"
.PHP_EOL.	"Mitä lastenneuvolaa olette viimeksi käyttänyt, osoite:   $hospital"
.PHP_EOL.	"Sairaudet, allergiat, ruokavalio ym:   $allergic"
.PHP_EOL.	"Onko lapsi ollut sairaalahoidossa tai jatkuvassa lääkärinhoidossa, milloin ja miksi?:   $hospital2"
.PHP_EOL.	"Lisätiedot hakemuksen perusteeksi:   $extrainfo"
.PHP_EOL. PHP_EOL. PHP_EOL;
PHP_EOL.	"Älä vastaa tähän viestiin!";

$hash = md5($parentemail.$parentphonenumber.$date);

$message .= PHP_EOL. "Kuittaa hakemus luetuksi: " . $http_host  ."kindergarten_verify.php?email=$parentemail&hash=$hash";

// to email
$headers = 'From: paivahoitohakemus@pirtti.com' . "\r\n" .
'Reply-To: noreply@pirtti.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
mail('jermu.karjalainen@gmail.com', 'Paivahoitohakemus | Pirtti',$message, $headers);
echo "Varhaiskasvatushakemus lähetetty!";
header( "Refresh:1; url=doneApplication.php", true, 5);

?>