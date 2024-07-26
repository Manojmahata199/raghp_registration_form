<?php

// microsoft rapid api
// $text = $_GET['word']; 
// $curl = curl_init();

// curl_setopt_array($curl, [
// 	CURLOPT_URL => "https://microsoft-translator-text.p.rapidapi.com/translate?to%5B0%5D=hi&api-version=3.0&profanityAction=NoAction&textType=plain",
// 	CURLOPT_RETURNTRANSFER => true,
// 	CURLOPT_ENCODING => "",
// 	CURLOPT_MAXREDIRS => 10,
// 	CURLOPT_TIMEOUT => 30,
// 	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
// 	CURLOPT_CUSTOMREQUEST => "POST",
// 	CURLOPT_POSTFIELDS => json_encode([
// 		[
// 				'Text' => ''.$text.''
// 		]
// 	]),
// 	CURLOPT_HTTPHEADER => [
// 		"X-RapidAPI-Host: microsoft-translator-text.p.rapidapi.com",
// 		"X-RapidAPI-Key: 7647d7e32dmsh5ab75fa3572287ep1db0ecjsn6e5c479b912e",
// 		"content-type: application/json"
// 	],
// ]);

// $response = curl_exec($curl);
// $err = curl_error($curl);
// $responseDecoded = json_decode($response, true);

// curl_close($curl);

// if($responseDecoded[0]['translations'][0]['text']) {
// 	echo $responseDecoded[0]['translations'][0]['text'];
// } else {
// 	echo $text;
// }


$text = $_GET['word']; 
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://microsoft-translator-text.p.rapidapi.com/translate?to%5B0%5D=hi&api-version=3.0&profanityAction=NoAction&textType=plain",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => json_encode([
		[
				'Text' => 'I would really like to drive your car around the block a few times.'
		]
	]),
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: microsoft-translator-text.p.rapidapi.com",
		"X-RapidAPI-Key: 00522e6efamsh101c2df2c0b5524p172f22jsn23402ec8737a",
		"content-type: application/json"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
$responseDecoded = json_decode($response, true);

curl_close($curl);

if($responseDecoded[0]['translations'][0]['text']) {
	echo $responseDecoded[0]['translations'][0]['text'];
} else {
	echo $text;
}

	
// GOOGLE TRANSLATE
// require '../google_tranlate_new/vendor/autoload.php';

// use Google\Cloud\Translate\V2\TranslateClient;

// $text = $_GET['word']; 

// $translate = new TranslateClient([
//     'key' => 'AIzaSyBdhCfXJ8lvKdfwNM3be47ToKn60Pbylbs'
// ]);
// // lod key:AIzaSyDdA7nzA_8qU1D5ptMtMLbU2VFmN-OpWdw
// // Translate text from english to french.
// $result = $translate->translate(''.$text.' ', [
//     'target' => 'hi'
// ]);

// if(isset($result['text']))
// {
// 	echo $result['text'];
	
// }
// else
// {
// 	echo $text;
// } 





?>
