<?php
require('vendor/autoload.php');

//Get authentication Variables from VCAPS_SERVICES. We first need to pull in our Twilio  
//connection variables from the VCAPS_SERVICES environment variable. This environment variable 
//will be put in your project by Bluemix once you bind the Twilio service to your Bluemix
// application. 
// var_dump(getenv('VCAPS_SERVICES'));

// vcap_services Extraction 
//Debug: If you want to see all the variables returned you can use this line of code. 
// var_dump($services_json); 
$services_json = json_decode(getenv('VCAP_SERVICES'),true);
$VcapSvs = $services_json["user-provided"][0]["credentials"];

// Extract the VCAP_SERVICES variables for Twilio connection.  
 $sid = "AC9c4eac6062bb5ed989296ab54aa25d67";
 $token ="7de43b5c75638e60d5f84d617cd6b2da";
 $msg = $_POST['msg'];
 $email = $_POST['email'];
 try { 	

 	if (is_null($sid) || is_null($token) || empty($sid) || empty($token)) {
 		echo "<p>Failed to retrieve Twilio authentication parameters.</p>";
 		
 	} else {
		$fromNumber = "+1205-732-8850"; //Your Twilio number from twilio.com/user/account/phone-numbers/incoming
		$toNumber = "+917899760052"; //Verified Twilio number from twilio.com/user/account/phone-numbers/verified

		$client = new Services_Twilio($sid, $token);
		$message = $client->account->messages->sendMessage(
		  $fromNumber, // From a valid Twilio number
		  $toNumber, // Text this number
		 "From:\"$email\" -> \"$msg\""
		);
	echo '<script> alert("Sent the SMS to an admin");window.location.href = "index.html"; </script> ';

 	}
}
  catch(Exception $e) {
  //We sent something to Sag that it didn't expect.
  echo '<p>There was an error sending an SMS using Twilio!!!</p>';
  echo $e->getMessage();

  }
?>