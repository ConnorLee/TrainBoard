<?php

$xml = simplexml_load_file("dashboard.xml");

// Most Recent 3 Deposits
$deposits = $xml->children()->deposits->children();
for($i = 0; $i < 3; $i++)
{
    // get digits for trip distance
    $dist = round($deposits[$i]->goalAmount);
    $finalDists = array(" ", " ", " ", " ", " ", " ", " ", " ");
    $numDigDist = strlen((string)round($deposits[$i]->goalAmount));
    for($j = 7; $j > (7 - $numDigDist); $j--) {
        $finalDists[$j] = (string)($dist % 10);
        $dist = floor($dist/10);
    }

    // get digits for duration
    $dur = round($deposits[$i]->goalLength);
    $finalDurs = array(" ", " ", " ", " ");
    $numDigDur = strlen((string)round($deposits[$i]->goalLength));
    for($j = 3; $j > (3 - $numDigDur); $j--) {
        $finalDurs[$j] = (string)($dur % 10);
        $dur = floor($dur/10);
    }

    // get digits for miles change
    $mile = round($deposits[$i]->amount);
    $finalMiles = array(" ", " ", " ", " ", " ", " ", " ", " ");
    $numDigMile = strlen((string)round($deposits[$i]->amount));
    for($j = 7; $j > (7 - $numDigMile); $j--) {
        $finalMiles[$j] = (string)($mile % 10);
        $mile = floor($mile/10);
    }

    // get digits for progress
    $prog = (round($deposits[$i]->balance) + round($deposits[$i]->amount));
    $finalProgs = array(" ", " ", " ", " ", " ", " ", " ", " ");
    $numDigProg = strlen((string)(round($deposits[$i]->balance) + round($deposits[$i]->amount)));
    for($j = 7; $j > (7 - $numDigProg); $j--) {
        $finalProgs[$j] = (string)($prog % 10);
        $prog = floor($prog/10);
    }

    // get characters for name
    $name = (string)$deposits[$i]->fullName;
    $lastSpace = strrpos($name, " ");
    $lastName = substr($name, $lastSpace + 1);
    $finalName = array(" ", " ", " ", " ", " ", " ", " ", " ", " ", " ", );
    if(strlen($lastName) <= 10) {
        $lastLen = strlen($lastName);
    } else {
        $lastLen = 10;
    }
    for($n=0; $n < $lastLen; $n++) {
        $finalName[$n] = substr($lastName, $n, 1);
    }



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
        "NAME0" => substr($name, 0, 1),
        "NAME1" => ".",
        "NAME2" => $finalName[0],
        "NAME3" => $finalName[1],
        "NAME4" => $finalName[2],
        "NAME5" => $finalName[3],
        "NAME6" => $finalName[4],
        "NAME7" => $finalName[5],
        "NAME8" => $finalName[6],
        "NAME9" => $finalName[7],
        "NAME10" => $finalName[8],
        "NAME11" => $finalName[9],
        "DESTINATION" => (string)$deposits[$i]->goalName,
        "TRIP_DIST0" => $finalDists[0],
        "TRIP_DIST1" => $finalDists[1],
        "TRIP_DIST2" => $finalDists[2],
        "TRIP_DIST3" => $finalDists[3],
        "TRIP_DIST4" => $finalDists[4],
        "TRIP_DIST5" => $finalDists[5],
        "TRIP_DIST6" => $finalDists[6],
        "TRIP_DIST7" => $finalDists[7],
        "DURATION0" => $finalDurs[0],
        "DURATION1" => $finalDurs[1],
        "DURATION2" => $finalDurs[2],
        "DURATION3" => $finalDurs[3],
        "MILES_CHANGE0" => $finalMiles[0],
        "MILES_CHANGE1" => $finalMiles[1],
        "MILES_CHANGE2" => $finalMiles[2],
        "MILES_CHANGE3" => $finalMiles[3],
        "MILES_CHANGE4" => $finalMiles[4],
        "MILES_CHANGE5" => $finalMiles[5],
        "MILES_CHANGE6" => $finalMiles[6],
        "MILES_CHANGE7" => $finalMiles[7],
        "PROGRESS0" => $finalProgs[0],
        "PROGRESS1" => $finalProgs[1],
        "PROGRESS2" => $finalProgs[2],
        "PROGRESS3" => $finalProgs[3],
        "PROGRESS4" => $finalProgs[4],
        "PROGRESS5" => $finalProgs[5],
        "PROGRESS6" => $finalProgs[6],
        "PROGRESS7" => $finalProgs[7],
        "STATUS" => $status,
        "selector" => ".deposit" . $i
        );
    $mostRecentThreeDeposits[$i]=$chart;
}

// Most Recent 3 Withdrawals
$withdrawals = $xml->children()->withdrawals->children();
for($i = 0; $i < 3; $i++)
{
    // get digits for trip distance
    $dist = round($withdrawals[$i]->goalAmount);
    $finalDists = array(" ", " ", " ", " ", " ", " ", " ", " ");
    $numDigDist = strlen((string)round($withdrawals[$i]->goalAmount));
    for($j = 7; $j > (7 - $numDigDist); $j--) {
        $finalDists[$j] = (string)($dist % 10);
        $dist = floor($dist/10);
    }

    // get digits for duration
    $dur = round($withdrawals[$i]->goalLength);
    $finalDurs = array(" ", " ", " ", " ");
    $numDigDur = strlen((string)round($withdrawals[$i]->goalLength));
    for($j = 3; $j > (3 - $numDigDur); $j--) {
        $finalDurs[$j] = (string)($dur % 10);
        $dur = floor($dur/10);
    }

    // get digits for miles change
    $mile = round(abs($withdrawals[$i]->amount));
    $finalMiles = array(" ", " ", " ", " ", " ", " ", " ", " ");
    $numDigMile = strlen(round(abs($withdrawals[$i]->amount)));
    for($j = 7; $j > (7 - $numDigMile); $j--) {
        $finalMiles[$j] = (string)($mile % 10);
        $mile = floor($mile/10);
    }

    // get digits for progress
    $prog = (round($withdrawals[$i]->balance) + round($withdrawals[$i]->amount));
    $finalProgs = array(" ", " ", " ", " ", " ", " ", " ", " ");
    $numDigProg = strlen((string)(round($withdrawals[$i]->balance) + round($withdrawals[$i]->amount)));
    for($j = 7; $j > (7 - $numDigProg); $j--) {
        $finalProgs[$j] = (string)($prog % 10);
        $prog = floor($prog/10);
    }


    // get characters for name
    $name = (string)$withdrawals[$i]->fullName;
    $lastSpace = strrpos($name, " ");
    $lastName = substr($name, $lastSpace + 1);
    $finalName = array(" ", " ", " ", " ", " ", " ", " ", " ", " ", " ", );
    if(strlen($lastName) <= 10) {
        $lastLen = strlen($lastName);
    } else {
        $lastLen = 10;
    }
    for($n=0; $n < $lastLen; $n++) {
        $finalName[$n] = substr($lastName, $n, 1);
    }


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
        "NAME0" => substr($name, 0, 1),
        "NAME1" => ".",
        "NAME2" => $finalName[0],
        "NAME3" => $finalName[1],
        "NAME4" => $finalName[2],
        "NAME5" => $finalName[3],
        "NAME6" => $finalName[4],
        "NAME7" => $finalName[5],
        "NAME8" => $finalName[6],
        "NAME9" => $finalName[7],
        "NAME10" => $finalName[8],
        "NAME11" => $finalName[9],
        "DESTINATION" => (string)$withdrawals[$i]->goalName,
        "TRIP_DIST0" => $finalDists[0],
        "TRIP_DIST1" => $finalDists[1],
        "TRIP_DIST2" => $finalDists[2],
        "TRIP_DIST3" => $finalDists[3],
        "TRIP_DIST4" => $finalDists[4],
        "TRIP_DIST5" => $finalDists[5],
        "TRIP_DIST6" => $finalDists[6],
        "TRIP_DIST7" => $finalDists[7],
        "DURATION0" => $finalDurs[0],
        "DURATION1" => $finalDurs[1],
        "DURATION2" => $finalDurs[2],
        "DURATION3" => $finalDurs[3],
        "MILES_CHANGE0" => $finalMiles[0],
        "MILES_CHANGE1" => $finalMiles[1],
        "MILES_CHANGE2" => $finalMiles[2],
        "MILES_CHANGE3" => $finalMiles[3],
        "MILES_CHANGE4" => $finalMiles[4],
        "MILES_CHANGE5" => $finalMiles[5],
        "MILES_CHANGE6" => $finalMiles[6],
        "MILES_CHANGE7" => $finalMiles[7],
        "PROGRESS0" => $finalProgs[0],
        "PROGRESS1" => $finalProgs[1],
        "PROGRESS2" => $finalProgs[2],
        "PROGRESS3" => $finalProgs[3],
        "PROGRESS4" => $finalProgs[4],
        "PROGRESS5" => $finalProgs[5],
        "PROGRESS6" => $finalProgs[6],
        "PROGRESS7" => $finalProgs[7],
        "STATUS" => $status,
        "selector" => ".withdrawal" . $i
        );
    $mostRecentThreeWithdrawals[$i]=$chart;
}

// Most Recent 3 Goals
$goals = $xml->children()->goals->children();
for($i = 0; $i < 3; $i++)
{
    // get digits for trip distance
    $dist = round($goals[$i]->goalAmount);
    $finalDists = array(" ", " ", " ", " ", " ", " ", " ", " ");
    $numDigDist = strlen((string)round($goals[$i]->goalAmount));
    for($j = 7; $j > (7 - $numDigDist); $j--) {
        $finalDists[$j] = (string)($dist % 10);
        $dist = floor($dist/10);
    }

    // get digits for duration
    $dur = round($goals[$i]->goalLength);
    $finalDurs = array(" ", " ", " ", " ");
    $numDigDur = strlen((string)round($goals[$i]->goalLength));
    for($j = 3; $j > (3 - $numDigDur); $j--) {
        $finalDurs[$j] = (string)($dur % 10);
        $dur = floor($dur/10);
    }

    // get digits for miles change
    $mile = round($goals[$i]->amount);
    $finalMiles = array(" ", " ", " ", " ", " ", " ", " ", " ");
    $numDigMile = strlen((string)round($goals[$i]->amount));
    for($j = 7; $j > (7 - $numDigMile); $j--) {
        $finalMiles[$j] = (string)($mile % 10);
        $mile = floor($mile/10);
    }

    // get digits for progress
    $prog = (round($goals[$i]->balance) + round($goals[$i]->amount));
    $finalProgs = array(" ", " ", " ", " ", " ", " ", " ", " ");
    $numDigProg = strlen((string)(round($goals[$i]->balance) + round($go[$i]->amount)));
    for($j = 7; $j > (7 - $numDigProg); $j--) {
        $finalProgs[$j] = (string)($prog % 10);
        $prog = floor($prog/10);
    }

    // get characters for name
    $name = (string)$goals[$i]->fullName;
    $lastSpace = strrpos($name, " ");
    $lastName = substr($name, $lastSpace + 1);
    $finalName = array(" ", " ", " ", " ", " ", " ", " ", " ", " ", " ", );
    if(strlen($lastName) <= 10) {
        $lastLen = strlen($lastName);
    } else {
        $lastLen = 10;
    }
    for($n=0; $n < $lastLen; $n++) {
        $finalName[$n] = substr($lastName, $n, 1);
    }


    $chart = array(
        "NAME0" => substr($name, 0, 1),
        "NAME1" => ".",
        "NAME2" => $finalName[0],
        "NAME3" => $finalName[1],
        "NAME4" => $finalName[2],
        "NAME5" => $finalName[3],
        "NAME6" => $finalName[4],
        "NAME7" => $finalName[5],
        "NAME8" => $finalName[6],
        "NAME9" => $finalName[7],
        "NAME10" => $finalName[8],
        "NAME11" => $finalName[9],
        "DESTINATION" => (string)$goals[$i]->goalName,
        "TRIP_DIST0" => $finalDists[0],
        "TRIP_DIST1" => $finalDists[1],
        "TRIP_DIST2" => $finalDists[2],
        "TRIP_DIST3" => $finalDists[3],
        "TRIP_DIST4" => $finalDists[4],
        "TRIP_DIST5" => $finalDists[5],
        "TRIP_DIST6" => $finalDists[6],
        "TRIP_DIST7" => $finalDists[7],
        "DURATION0" => $finalDurs[0],
        "DURATION1" => $finalDurs[1],
        "DURATION2" => $finalDurs[2],
        "DURATION3" => $finalDurs[3],
        "MILES_CHANGE0" => $finalMiles[0],
        "MILES_CHANGE1" => $finalMiles[1],
        "MILES_CHANGE2" => $finalMiles[2],
        "MILES_CHANGE3" => $finalMiles[3],
        "MILES_CHANGE4" => $finalMiles[4],
        "MILES_CHANGE5" => $finalMiles[5],
        "MILES_CHANGE6" => $finalMiles[6],
        "MILES_CHANGE7" => $finalMiles[7],
        "PROGRESS0" => $finalProgs[0],
        "PROGRESS1" => $finalProgs[1],
        "PROGRESS2" => $finalProgs[2],
        "PROGRESS3" => $finalProgs[3],
        "PROGRESS4" => $finalProgs[4],
        "PROGRESS5" => $finalProgs[5],
        "PROGRESS6" => $finalProgs[6],
        "PROGRESS7" => $finalProgs[7],
        "STATUS" => "DEPARTED",
        "selector" => ".goal" . $i
        );
        $mostRecentThreeGoals[$i]=$chart;
}


// // Keep as an entire array of 9 transactions
$transactions = array_merge($mostRecentThreeDeposits, $mostRecentThreeWithdrawals);
$merged = array_merge($transactions, $mostRecentThreeGoals);


echo "{\"TransObject\":" . json_encode($merged) . "}";

?>



