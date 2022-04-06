<!DOCTYPE html>
<head><title>Inventory</title>
<?php include "head.php";
      include "sheets.php";
?>
</head>
<body>
<div class="navbar">

<h4 style="color:white;">Gemotech</h4>


<input type="text" name="search" id="search">
<input type="submit" name="search" value="search" class="btn btn-primary">

</div>

<?php
$range ="Details!A2:G20";
$response = $service ->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();
?>

<table class="table" style="width: 55%;"> 
  <tr>
    <th style=" text-align:center;">Action</th>
    <th style=" text-align:center;">Id</th>
    <th style=" text-align:center;">Description</th>
    <th style=" text-align:center;">Email</th>
    <th style=" text-align:center;">Age</th>
    <th style=" text-align:center;">Gender</th>
    <th style=" text-align:center;">Location</th>
    <th style=" text-align:center;">Nationality</th>

</tr>

<?php
if(empty($values)) {
    print "No data found .\n";
} else {
    //$mask = "%10s %-10s %s";
    foreach ($values as $row){
        echo "<tr style='text-align:center;'><td><button class='btn btn-primary'>View</button></td><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td><td>" . $row[5] . "</td><td>" . $row[6] . "</td></tr>";
        }
}
?>
</table>
</body>




