<?php
require __DIR__ . '/vendor/autoload.php';

$client = new \Google_Client();
$client->setApplicationName('Google Sheets and PHP');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');
$service = new Google_Service_Sheets($client);
$spreadsheetId = "1E2q3EC2gWZ6sUydb3oowXjZQ4_eAQJ98Z1LDvkeEXBQ";

$range ="Details!D2:F6";
$response = $service ->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();
if(empty($values)) {
    print "No data found .\n";
} else {
    $mask = "%10s %-10s %s\n";
    foreach ($values as $row){
        echo sprintf($mask, $row[2], $row[1], $row[0]);
    }
}

?>