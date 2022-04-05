<?php
require __DIR__ . '/vendor/autoload.php';

//Reading data from spreadsheet.

$client = new \Google_Client();

$client->setApplicationName('Google Sheets and PHP');

$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);

$client->setAccessType('offline');

$client->setAuthConfig(__DIR__ . '/credentials.json');

$service = new Google_Service_Sheets($client);

$spreadsheetId = "1E2q3EC2gWZ6sUydb3oowXjZQ4_eAQJ98Z1LDvkeEXBQ"; //It is present in your URL

       $range = 'Details!D2:F6';
       $response = $service->spreadsheets_values->get($spreadsheetId, $range);
       $values =$response ->getValues();
       if(empty($values)){
           print "No data found. \n";
       } else{
           $mask ="%10s %-10s %s\n";
           foreach ($values as $row){
               echo sprintf($mask, $row[2], $row[1], $row[0]);
           }
       }

    /*   $values = [
           ["Schooley", "Brent"],
       ];
    $body = new Google_Service_Sheets_ValueRange([
        'values' => $values
    ]);
    $params = [
        'valueInputOption' => 'RAW'
    ];
    $result = $service -> spreadsheets_values->update(
        $spreadsheetId,
        $range,
        $body,
        $params
    );
    */
?>