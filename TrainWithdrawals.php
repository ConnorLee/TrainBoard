<?php
$xml = simplexml_load_file("dashboard.xml");

$withdrawals = $xml->children()->withdrawals->children();
for($i = 0; $i < 3; $i++)
{
    $chart = array(
        "fullName" => (string)$withdrawals[$i]->fullName,
        "goalName" => (string)$withdrawals[$i]->goalName,
        "amount" => (string)$withdrawals[$i]->amount,
        "balance" => (string)$withdrawals[$i]->balance,
        "onOffTrack" => (string)$withdrawals[$i]->onOffTrack,
        );
    $mostRecentWithdrawals[$i]=$chart;
}

?>