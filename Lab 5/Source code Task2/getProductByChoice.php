<?php
$parameter = $ GET('q');
$sql = "SELECT * FROM products where productLine
$result = $conn-›query ($sql);
=
*".Sparameter
// Initialize an empty array to hold the data
$data = array ();
/ Insert each row into the $data array if ($result-›num rows > 0) {
foreach ($result as $row) {
$data[] = $row;
}
}
// Encode the $data array into a JSON string
$json = json_encode($data);
// Set the appropriate headers
header ('Content-Type: application/json');
/ Output the JSON string echo Sjson;
Sconn-›close () ;
?>