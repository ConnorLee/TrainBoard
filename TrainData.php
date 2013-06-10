<?php

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