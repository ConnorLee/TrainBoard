<?php
<<<<<<< HEAD
// $xml_string = file_get_contents('https://wwws.betterment.com/admin/Dashboard'); 
// [{"zipcode":"10004"}]
// $xml_string = file_get_contents('dashboard.xml'); 
// $xmlObject = new SimpleXMLElement($xml_string);

// $stats = $xmlObject->children()->stats;
// $daySignups =  $stats->daySignups;
// $weekSignups =  $stats->weekSignups;
// $hourSignups =  $stats->hourSignups;
// $fundedUsers = $xmlObject->children()->fundedUsers;

// echo "{\"zipcodes\":[";

// foreach ($xmlObject->children()->users->user as $user) {
// 	//    {'zipcode':'        023456       '},
// 	echo "{\"zipcode\":" .$user->zipCode . "},";
//     echo "\n";
// }

// echo "{ }], ";

// function printjson($key, $value){
// 	return "\"" .$key . "\":" . $value . ",";   
// }

// echo printjson("hourSignups", $hourSignups);
// echo printjson("daySignups", $daySignups);
// echo printjson("weekSignups", $weekSignups);
// echo printjson("fundedUsers", $fundedUsers);



// echo "\"foo\":\"bar\"";

// echo "}";

$xml = simplexml_load_file("dashboard.xml");

echo "DEPOSIT INFORMATION";
echo "";

echo("<table>");
for($i = 0; $i < 10; $i++)
{
   $deposit = $xml->children()->deposits->deposit;
   echo("<tr>");
   print("<td>");
   echo $deposit->fullName . "<br>";
   print("</td>");
   print("<td>");
   echo $deposit->goalName . "<br>";
   print("</td>");
   print("<td>");
   echo $deposit->amount . "<br>";
   print("</td>");
   print("<td>");
   echo $deposit->description . "<br>";
   print("</td>");
   echo("</tr>");        
}
echo("</table>");
?>


=======

$xml = simplexml_load_file("dashboard.xml");
$deposits = $xml->children()->deposits->children();

echo "DEPOSIT INFORMATION";
echo "";
echo("<table>");
$i = 0;
foreach($deposits as $deposit)
    {
        echo("<tr>");
        echo("<td>");
        echo $deposit->fullName . "<br>";
        echo("</td>");
        echo("<td>");
        echo $deposit->goalName . "<br>";
        echo("</td>");
        echo("<td>");
        echo $deposit->amount . "<br>";
        echo("</td>");
        echo("<td>");
        echo $deposit->description . "<br>";
        echo("</td>");
        echo("</tr>");
        $i++;
        if($i >= 3) 
            break;
    }
echo("</table>");

?>
>>>>>>> 47912041483c175a73181c0af8ca546bedd0b2bb
