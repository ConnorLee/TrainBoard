<?php

$xml = simplexml_load_file("dashboard.xml");

// Most Recent 3 Withdrawals
$deposits = $xml->children()->deposits->children();
for($i = 0; $i < 3; $i++)
{
    $chart = array(
        "fullName" => $deposits[$i]->fullName,
        "goalName" => $deposits[$i]->goalName,
        "amount" => $deposits[$i]->amount,
        "description" => $deposits[$i]->description,
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
        "fullName" => $withdrawals[$i]->fullName,
        "goalName" => $withdrawals[$i]->goalName,
        "amount" => $withdrawals[$i]->amount,
        "balance" => $withdrawals[$i]->balance,
        "onOffTrack" => $withdrawals[$i]->onOffTrack,
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
        "fullName" => $goals[$i]->fullName,
        "goalName" => $goals[$i]->goalName,
        "goalAmount" => $goals[$i]->goalAmount,
        "goalLength" => $goals[$i]->goalLength,
        "initDeposit" => $goals[$i]->initDeposit,
        );
    $mostRecentThreeGoals[$i]=$chart;
}
echo "<br>GOAL INFORMATION <br>";
print_r($mostRecentThreeGoals);

?>