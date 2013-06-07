<?php
// gets output of zipcodes.php --> 10 zip codes seperated by new lines
$zips = file('zipcodes.php');
// creates empty array and stores it in $data
$data = array();

// get random zipcode from the array of zipcodes called $zips
$random_zipcode = array_rand($zips);


// work: pad left to 5 digits a random selection out of the zip array
$data[]['zipcode'] = str_pad($random_zipcode, 5, "0", STR_PAD_LEFT);
echo json_encode($data);
?>
