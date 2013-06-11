<?php

$xml = simplexml_load_file("dashboard.xml");

// Most Recent 3 Deposits
$deposits = $xml->children()->deposits->children();
for($i = 0; $i < 3; $i++)
{
    $chart = array(
        "fullName" => (string)$deposits[$i]->fullName,
        "description" => "Deposit",
        "goalName" => (string)$deposits[$i]->goalName,
        "goalAmount" => (string)$deposits[$i]->goalAmount,
        "goalLength" => (string)$deposits[$i]->goalLength,
        "amount" => (string)$deposits[$i]->amount,
        "balance" => (string)$deposits[$i]->balance,
        "onOffTrack" => (string)$deposits[$i]->onOffTrack,
        );
    $mostRecentThreeDeposits[$i]=$chart;
}

// Most Recent 3 Withdrawals
$withdrawals = $xml->children()->withdrawals->children();
for($i = 0; $i < 3; $i++)
{
    $chart = array(
        "fullName" => (string)$withdrawals[$i]->fullName,
        "description" => "Withdrawal",
        "goalName" => (string)$withdrawals[$i]->goalName,
        "goalAmount" => (string)$withdrawals[$i]->goalAmount,
        "goalLength" => (string)$withdrawals[$i]->goalAmount,
        "amount" => (string)$withdrawals[$i]->amount,
        "balance" => (string)$withdrawals[$i]->balance,
        "onOffTrack" => (string)$withdrawals[$i]->onOffTrack,
        );
    $mostRecentThreeWithdrawals[$i]=$chart;
}

// Most Recent 3 Goals
$goals = $xml->children()->goals->children();
for($i = 0; $i < 3; $i++)
{
    $chart = array(
        "fullName" => (string)$goals[$i]->fullName,
        "description" => "Goal",
        "goalName" => (string)$goals[$i]->goalName,
        "goalAmount" => (string)$goals[$i]->goalAmount,
        "goalLength" => (string)$goals[$i]->goalLength,
        "amount" => (string)$goals[$i]->initDeposit,
        "balance" => NULL,
        "onOffTrack" => NULL,
        );
    $mostRecentThreeGoals[$i]=$chart;
}

// Combine into one table
$transactions = array_merge($mostRecentThreeDeposits, $mostRecentThreeWithdrawals);
$TrainData = array_merge($transactions, $mostRecentThreeGoals);

$file = 'TrainData.json';
file_put_contents($file, json_encode($TrainData));

?>