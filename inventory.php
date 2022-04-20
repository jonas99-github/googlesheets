<!DOCTYPE html>
<head><title></title>
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
    <th style=" text-align:center;">Item</th>
    <th style=" text-align:center;">Brand</th>
    <th style=" text-align:center;">Model</th>
    <th style=" text-align:center;">Tag</th>
    <th style=" text-align:center;">Serial number</th>
    <th style=" text-align:center;">Department</th>
    <th style=" text-align:center;">Employee Name</th>
    <th style=" text-align:center;">Note</th>
    <th style=" text-align:center;">Date</th>
    <th style=" text-align:center;">Location</th>
  </tr>

<?php
if(empty($values)) {
    print "No data found .\n";
} else {
    //$mask = "%10s %-10s %s";

    foreach ($values as $col){
$res0=$col[0] ?? "";
$res1=$col[1] ?? "";
$res2=$col[2] ?? "";
$res3=$col[3] ?? "";
$res4=$col[4] ?? "";
$res5=$col[5] ?? "";
$res6=$col[6] ?? "";
$res7=$col[7] ?? "";
$res8=$col[8] ?? "";
$res9=$col[9] ?? "";


        echo "<tr style='text-align:center;'>
        <td><button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>Update</button>
        <button class='btn btn-danger'>Delete</button></td>
        <td></td>
        <td>" . $res0  . "</td>
        <td>" . $res1  . "</td>
        <td>" . $res2  . "</td>
        <td>" . $res3  . "</td>
        <td>" . $res4  . "</td>
        <td>" . $res5  . "</td>
        <td>" . $res6  . "</td>
        <td>" . $res7  . "</td>
        <td>" . $res8  . "</td>
        <td>" . $res9  . "</td>
        </tr>";
        }
        
    }
?>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Update Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" >
            <label>Id</label><br>
            <input type="text" id="" name="" required><br>
            <label>Item</label><br>
            <input type="text" id="" name="" required><br>
            <label>Brand</label><br>
            <input type="text" id="" name="" required><br>
            <label>Model</label><br>
            <input type="text" id="" name="" required><br>
            <label>Tag</label><br>
            <input type="text" id="" name="" required><br>
            <label>Serial number</label><br>
            <input type="text" id="" name="" required><br>
            <label>Department</label><br>
            <input type="text" id="" name="" required><br>
            <label>Employee name</label><br>
            <input type="text" id="" name="" required><br>
            <label>Note</label><br>
            <input type="text" id="" name="" required><br>
            <label>Date</label><br>
            <input type="text" id="" name="" required><br>
            <label>Location</label><br>
            <input type="text" id="" name="" required><br>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
</table>
</body>








