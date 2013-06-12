<?php

$xml = simplexml_load_file("dashboard.xml");

// Most Recent 3 Deposits
$deposits = $xml->children()->deposits->children();
for($i = 0; $i < 3; $i++)
{
    $name = (string)$deposits[$i]->fullName;
    $lastSpace = strrpos($name, " ");
    $abbName = substr($name, 0, 1) . ". " . substr($name, $lastSpace + 1);
    $chart = array(
        "fullName" => $abbName,
        "goalName" => (string)$deposits[$i]->goalName,
        "goalAmount" => (string)round($deposits[$i]->goalAmount),
        "goalLength" => (string)$deposits[$i]->goalLength,
        "amount" => (string)round($deposits[$i]->amount),
        "balance" => (string)round($deposits[$i]->balance),
        "onOffTrack" => (string)$deposits[$i]->onOffTrack,
        );
    $mostRecentThreeDeposits[$i]=$chart;
}

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
        "goalAmount" => (string)round($withdrawals[$i]->goalAmount),
        "goalLength" => (string)$withdrawals[$i]->goalLength,
        "amount" => (string)round($withdrawals[$i]->amount),
        "balance" => (string)round($withdrawals[$i]->balance),
        "onOffTrack" => (string)$withdrawals[$i]->onOffTrack,
        );
    $mostRecentThreeWithdrawals[$i]=$chart;
}

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
        "goalAmount" => (string)round($goals[$i]->goalAmount),
        "goalLength" => (string)$goals[$i]->goalLength,
        "amount" => (string)round($goals[$i]->initDeposit),
        "balance" => NULL,
        "onOffTrack" => NULL,
        );
    $mostRecentThreeGoals[$i]=$chart;
}


// Split into 3 Objects, each an array of 3 Transactions
$file = "TrainData.json";
file_put_contents($file, "{\"DepositObject\":");
$fh = fopen($file, 'a') or die("can't open file");
fwrite($fh, json_encode($mostRecentThreeDeposits));
fwrite($fh, ",");
fwrite($fh, "\"WithdrawalObject\":");
fwrite($fh, json_encode($mostRecentThreeWithdrawals));
fwrite($fh, ",");
fwrite($fh, "\"GoalObject\":");
fwrite($fh, json_encode($mostRecentThreeGoals));
fwrite($fh, "}");
fclose($fh);

// Keep as an entire array of 9 transactions
$transactions = array_merge($mostRecentThreeDeposits, $mostRecentThreeWithdrawals);
$merged = array_merge($transactions, $mostRecentThreeGoals);
$file2 = "TrainDataMerged.json";
file_put_contents($file2, json_encode($merged));
?>