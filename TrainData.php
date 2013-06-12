<?php

$xml = simplexml_load_file("dashboard.xml");

// Most Recent 3 Withdrawals
$deposits = $xml->children()->deposits->children();
for($i = 0; $i < 3; $i++)
{
    $name = (string)$deposits[$i]->fullName;
    $lastSpace = strrpos($name, " ");
    $abbName = substr($name, 0, 1) . ". " . substr($name, $lastSpace + 1);
    $chart = array(
        "fullName" => $abbName,
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
    $name = (string)$withdrawals[$i]->fullName;
    $lastSpace = strrpos($name, " ");
    $abbName = substr($name, 0, 1) . ". " . substr($name, $lastSpace + 1);
    $chart = array(
        "fullName" => $abbName,
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
    $name = (string)$goals[$i]->fullName;
    $lastSpace = strrpos($name, " ");
    $abbName = substr($name, 0, 1) . ". " . substr($name, $lastSpace + 1);
    $chart = array(
        "fullName" => $abbName,
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