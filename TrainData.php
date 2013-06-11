<?php

$xml = simplexml_load_file("dashboard.xml");

// Most Recent 3 Withdrawals
$deposits = $xml->children()->deposits->children();
for($i = 0; $i < 3; $i++)
{
    $chart = array(
        "fullName" => (string)$deposits[$i]->fullName,
        "goalName" => (string)$deposits[$i]->goalName,
        "amount" => (string)$deposits[$i]->amount,
        "description" => (string)$deposits[$i]->description,
        );
    $mostRecentThreeDeposits[$i]=$chart;
}
echo "<br>DEPOSIT INFORMATION <br>";
print_r($mostRecentThreeDeposits);

// Most Recent 3 Withdrawals
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
    $mostRecentThreeWithdrawals[$i]=$chart;
}
echo "<br>WITHDRAWAL INFORMATION<br>";
print_r($mostRecentThreeWithdrawals);


// Most Recent 3 Goals
$goals = $xml->children()->goals->children();
for($i = 0; $i < 3; $i++)
{
    $chart = array(
        "fullName" => (string)$goals[$i]->fullName,
        "goalName" => (string)$goals[$i]->goalName,
        "goalAmount" => (string)$goals[$i]->goalAmount,
        "goalLength" => (string)$goals[$i]->goalLength,
        "initDeposit" => $goals[$i]->initDeposit,
        );
    $mostRecentThreeGoals[$i]=$chart;
}
echo "<br>GOAL INFORMATION <br>";
print_r($mostRecentThreeGoals);

?>