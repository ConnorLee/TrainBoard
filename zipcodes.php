<<<<<<< HEAD

=======
>>>>>>> 47912041483c175a73181c0af8ca546bedd0b2bb
<?php
//$xml_string = file_get_contents('https://wwws.betterment.com/admin/Dashboard'); 
// [{"zipcode":"10004"}]
$xml_string = file_get_contents('dashboard.xml'); 
$xmlObject = new SimpleXMLElement($xml_string);

$stats = $xmlObject->children()->stats;
$daySignups =  $stats->daySignups;
$weekSignups =  $stats->weekSignups;
$hourSignups =  $stats->hourSignups;
$fundedUsers = $xmlObject->children()->fundedUsers;

echo "{\"zipcodes\":[";

foreach ($xmlObject->children()->users->user as $user) {
	//    {'zipcode':'        023456       '},
	echo "{\"zipcode\":" .$user->zipCode . "},";
    echo "\n";
}

echo "{ }], ";

function printjson($key, $value){
	return "\"" .$key . "\":" . $value . ",";   
}

echo printjson("hourSignups", $hourSignups);
echo printjson("daySignups", $daySignups);
echo printjson("weekSignups", $weekSignups);
echo printjson("fundedUsers", $fundedUsers);

<<<<<<< HEAD
echo "\"foo\":\"bar\"";
=======


echo "\"foo\":\"bar\"";

>>>>>>> 47912041483c175a73181c0af8ca546bedd0b2bb
echo "}";

?>


