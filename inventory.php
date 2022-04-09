<!DOCTYPE html>
<head><title>Inventory</title>
<?php include "head.php";
      include "sheets.php";
?>
</head>
<body>
<div class="navbar">

<h4 style="color:white;">Nav</h4>


<!--<input type="text" name="search" id="search">
<input type="submit" name="search" value="search" class="btn btn-primary"> -->

</div>

<?php 
$range ="test!A2:J24";
$response = $service ->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues(); 
?>

<table class="table" style="width: 55%;"> 
  <tr>
    <th style=" text-align:center;">Action</th>
    <th style=" text-align:center;">Id</th>
    <th style=" text-align:center;">Brand</th>
    <th style=" text-align:center;">Model</th>
    <th style=" text-align:center;">Specs</th>
    <th style=" text-align:center;">Tag</th>
    <th style=" text-align:center;">Serial number</th>
    <th style=" text-align:center;">Employee Name</th>
    <th style=" text-align:center;">Department</th>
    <th style=" text-align:center;">Note</th>
    <th style=" text-align:center;">Date</th>
    <th style=" text-align:center;">Location</th>
</tr>

<?php
if(empty($values)) {
    print "No data found .\n";
} else {
    //$mask = "%10s %-10s %s";

    foreach ($values as $row){
    //echo $row[2] ?? 'default';
        echo "
        <tr style='text-align:center;'>
        <td><button class='btn btn-primary'>Update</button><button class='btn btn-danger'>Delete</button></td>
        <td>" . $row[0] ?? 'default' . "</td>
        <td>" . $row[1] ?? 'default' . "</td>
        <td>" . $row[2] ?? 'default' . "</td>
        <td>" . $row[3] ?? 'default' . "</td>
        <td>" . $row[4] ?? 'default' . "</td>
        <td>" . $row[5] ?? 'default' . "</td>
        <td>" . $row[6] ?? 'default' . "</td>
        <td>" . $row[7] ?? 'default' . "</td>
        <td>" . $row[8] ?? 'default' . "</td>
        <td>" . $row[9] ?? 'default' . "</td>
        <td>" . $row[10] ?? 'default' . "</td></tr>";
        }
        
}
?>
</table>
</body>








