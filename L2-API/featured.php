<?php

//get featured listings

// access URL and request method
$url = 'https://api.idxbroker.com/clients/featured';
$method = 'GET';

// headers (required and optional)
$headers = array(
	'Content-Type: application/x-www-form-urlencoded', // required
	'accesskey: z9pAsp0kheiw1Egpi81V@W', // required - replace with your own
	'outputtype: json',
	 'apiversion: 1.4.0'// optional - overrides the preferences in our API control page
);

// set up cURL. curl is an open source command line tool and library for transferring data with URL syntax
$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);

// exec the cURL request and returned information.
$response = curl_exec($handle);

//Store the returned HTTP code in $code for later reference
$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if ($code >= 200 || $code < 300){
	$response = json_decode($response,true);
}
else{
	$error = $code;
}

//dump out the return
var_dump($response);

  //loop through all properties
    foreach ($response as $key => $value) {

      //The first property image in the images array
      echo '<div class="image"><img id="main-image" src="'.$value["image"][0]["url"].'"></div>';

      //the property address
      echo '<div id="address" class="text">'.$value["address"]."</div>";

      //The property price
      echo '<div id="price" class="text">'.$value["listingPrice"]."</div>";

    }

?>
