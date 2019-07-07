<?php

require __DIR__.'/vendor/autoload.php';

$client = new \Google_Client();
$client->setApplicationName('Increment API');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__.'/credentials.json');
$service = new Google_Service_Sheets($client);
$spreedSheetID = '1IMaYClh5HLbvgkW961a-PRLi3UCSV2ZCjsIa5nOeWwQ';

// $range = "Options!A1:A2";



// $response = $service->spreadsheets_values->get($spreedSheetID, $range);

// echo json_encode($response);
$type = $_GET['type'];

$values = null;
$range = null;
if($type == 'contacts'){
  $fullName = $_GET['fullname'];
  $email = $_GET['email'];
  $details = $_GET['details'];
  $values = [
    [$fullName, $email, $details, 'new']
  ];
  $range = "Contacts";
}else{
  $platforms = $_GET['platforms'];
  $details = $_GET['details'];
  $features = $_GET['features'];

  $values = [
    [$platforms, $details, $features, 'new']
  ];

  $range = "Quotation";
}

$body = new Google_Service_Sheets_ValueRange([
  'values' => $values
]);

$params = [
  'valueInputOption' => 'USER_ENTERED'
];

$result = $service->spreadsheets_values->append($spreedSheetID, $range, $body, $params);
