<?php
$client->setApplicationName('Google Sheets and PHP');
$client->setScopes(['Google_Service_Sheets::SPREADSHEETS']);
$client->setAuthConfig(CLIENT_SECRET_PATH);
$client->setAccessToken(ACCESS_TOKEN);

$service = new Google_Service_Sheets($client);

$sheetInfo = $service->spreadsheets->get(SHEET_ID)->getProperties();

print($sheetInfo['title']. PHP_EOL);

?>


