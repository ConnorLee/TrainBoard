<?php

$xml = simplexml_load_file("dashboard.xml");

$deposits = $xml->children()->deposits->children();
for($i = 0; $i < 3; $i++)
{
    $chart = array(
        "fullName" => (string)$deposits[$i]->fullName,
        "goalName" => (string)$deposits[$i]->goalName,
        "amount" => (string)$deposits[$i]->amount,
        "balance" => (string)$deposits[$i]->balance,
        "onOffTrack" => (string)$deposits[$i]->onOffTrack,
        "description" => (string)$deposits[$i]->description,
        );
    $mostRecentDeposits[$i]=$chart;
}

echo json_encode($mostRecentDeposits);
?>