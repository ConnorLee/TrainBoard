<?php

$xml = simplexml_load_file("dashboard.xml");

// Most Recent 3 Deposits
$deposits = $xml->children()->deposits->children();
for($i = 0; $i < 3; $i++)
{
    $name = (string)$deposits[$i]->fullName;
    $lastSpace = strrpos($name, " ");
    $abbName = substr($name, 0, 1) . ". " . substr($name, $lastSpace + 1);
    if ((string)$deposits[$i]->onOffTrack == "OFF_TRACK") {
        $status = "DELAYED";
    } else if ((string)$deposits[$i]->onOffTrack == "ON_TRACK") {
        $status = "ON TIME";
    } else if ((string)$deposits[$i]->onOffTrack == "FINISHED") {
        $status = "ARRIVED";
    } else {
        $status = "PENDING";
    }
    $chart = array(
        "NAME" => $abbName,
        "DESTINATION" => (string)$deposits[$i]->goalName,
        "TRIP DISTANCE" => (string)round($deposits[$i]->goalAmount),
        "DURATION" => (string)$deposits[$i]->goalLength,
        "Δ MILES" => (string)round($deposits[$i]->amount),
        "PROGRESS" => (string)(round($deposits[$i]->balance) + round($deposits[$i]->amount)),
        "STATUS" => $status,
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
    if ((string)$withdrawals[$i]->onOffTrack == "OFF_TRACK") {
        $status = "DELAYED";
    } else if ((string)$withdrawals[$i]->onOffTrack == "ON_TRACK") {
        $status = "ON TIME";
    } else if ((string)$withdrawals[$i]->onOffTrack == "FINISHED") {
        $status = "ARRIVED";
    } else {
        $status = "PENDING";
    }
    $chart = array(
        "NAME" => $abbName,
        "DESTINATION" => (string)$withdrawals[$i]->goalName,
        "TRIP DISTANCE" => (string)round($withdrawals[$i]->goalAmount),
        "DURATION" => (string)$withdrawals[$i]->goalLength,
        "Δ MILES" => (string)round($withdrawals[$i]->amount),
        "PROGRESS" => (string)(round($withdrawals[$i]->balance) + round($withdrawals[$i]->amount)),
        "STATUS" => $status,
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
        "NAME" => $abbName,
        "DESTINATION" => (string)$goals[$i]->goalName,
        "TRIP DISTANCE" => (string)round($goals[$i]->goalAmount),
        "DURATION" => (string)$goals[$i]->goalLength,
        "Δ MILES" => (string)round($goals[$i]->initDeposit),
        "PROGRESS" => (string)round($goals[$i]->initDeposit),
        "STATUS" => "DEPARTED",
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