<?php

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
    $phonenumber = $_POST['phonenumber'];
	$jobhours = $_POST['jobhours'];
	$email = $_POST['email'];

	$firstname3 = $_POST['firstname3'];
	$lastname3 = $_POST['lastname3'];
	$career2 = $_POST['career2'];
	$job2 = $_POST['job2'];
    $phonenumber2 = $_POST['phonenumber2'];
	$jobhours2 = $_POST['jobhours2'];
	$email2 = $_POST['email2'];

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

	include_once 'db.php';

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