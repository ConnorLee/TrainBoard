<?php

$xml = simplexml_load_file("dashboard.xml");

// Most Recent 3 Deposits
$deposits = $xml->children()->deposits->children();
for($i = 0; $i < 3; $i++)
{
    // get digits for trip distance
    $dist = round($deposits[$i]->goalAmount);
    $finalDists = array(" ", " ", " ", " ");
    $numDigDist = strlen((string)round($deposits[$i]->goalAmount));
    if ($numDigDist <= 3) {
        for($j = 3; $j > (3 - $numDigDist); $j--) {
            $finalDists[$j] = (string)($dist % 10);
            $dist = floor($dist/10);
        }
    } else if ($numDigDist >= 4 && $numDigDist <= 6) {
        $finalDists[3] = 'K';
        $dist = floor($dist/1000);
        for($j = 3; $j > (3 - ($numDigDist - 3)); $j--) {
            $finalDists[($j - 1)] = (string)($dist % 10);
            $dist = floor($dist/10);
        }
    } else if ($numDigDist >= 7 && $numDigDist <= 9) {
        $finalDists[3] = 'M';
        $dist = floor($dist/1000000);
        for($j = 3; $j > (3 - ($numDigDist - 3)); $j--) {
            $finalDists[($j - 1)] = (string)($dist % 10);
            $dist = floor($dist/10);
        }
    } else {
        $finalDists[0] = 1;
        $finalDists[1] = 'B';
        $finalDists[2] = '+';
    }

    // get digits for duration
    $dur = round($deposits[$i]->goalLength);
    $finalDurs = array(" ", " ", " ", " ");
    $numDigDur = strlen((string)round($deposits[$i]->goalLength));
    if ($numDigDur > 3) {
        $finalDurs[0] = 9;
        $finalDurs[1] = 9;
        $finalDurs[2] = 9;
        $finalDurs[3] = '+';
    }
    for($j = 3; $j > (3 - $numDigDur); $j--) {
        $finalDurs[$j] = (string)($dur % 10);
        $dur = floor($dur/10);
    }

    // get digits for miles change
    $mile = round($deposits[$i]->amount);
    $finalMiles = array(" ", " ", " ", " ");
    $numDigMile = strlen((string)round($deposits[$i]->amount));
    if ($numDigMile <= 3) {
        for($j = 3; $j > (3 - $numDigMile); $j--) {
            $finalMiles[$j] = (string)($mile % 10);
            $mile = floor($mile/10);
        }
    } else if ($numDigMile >= 4 && $numDigMile <= 6) {
        $finalMiles[3] = 'K';
        $mile = floor($mile/1000);
        for($j = 3; $j > (3 - ($numDigMile - 3)); $j--) {
            $finalMiles[($j - 1)] = (string)($mile % 10);
            $mile = floor($mile/10);
        }
    } else if ($numDigMile >= 7 && $numDigMile <= 9) {
        $finalMiles[3] = 'M';
        $mile = floor($mile/1000000);
        for($j = 3; $j > (3 - ($numDigMile - 3)); $j--) {
            $finalMiles[($j - 1)] = (string)($mile % 10);
            $mile = floor($mile/10);
        }
    } else {
        $finalMiles[0] = 1;
        $finalMiles[1] = 'B';
        $finalMiles[2] = '+';
    }

    // get digits for progress
    $prog = (round($deposits[$i]->balance) + round($deposits[$i]->amount));
    $finalProgs = array(" ", " ", " ", " ");
    $numDigProg = strlen((string)(round($deposits[$i]->balance) + round($deposits[$i]->amount)));
    if ($numDigProg <= 3) {
        for($j = 3; $j > (3 - $numDigProg); $j--) {
            $finalProgs[$j] = (string)($prog % 10);
            $prog = floor($prog/10);
        }
    } else if ($numDigProg >= 4 && $numDigProg <= 6) {
        $finalProgs[3] = 'K';
        $prog = floor($prog/1000);
        for($j = 3; $j > (3 - ($numDigProg - 3)); $j--) {
            $finalProgs[($j - 1)] = (string)($prog % 10);
            $prog = floor($prog/10);
        }
    } else if ($numDigProg >= 7 && $numDigProg <= 9) {
        $finalProgs[3] = 'M';
        $prog = floor($prog/1000000);
        for($j = 3; $j > (3 - ($numDigProg - 3)); $j--) {
            $finalProgs[($j - 1)] = (string)($prog % 10);
            $prog = floor($prog/10);
        }
    } else {
        $finalProgs[0] = 1;
        $finalProgs[1] = 'B';
        $finalProgs[2] = '+';
    }

    // get characters for name
    $name = (string)$deposits[$i]->fullName;
    $lastSpace = strrpos($name, " ");
    $lastName = substr($name, $lastSpace + 1, 3);
    $finalName = array(" ", " ", " ");
    if(strlen($lastName) <= 3) {
        $lastLen = strlen($lastName);
    } else {
        $lastLen = 3;
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
        "NAME5" => " ",
        "DESTINATION" => (string)$deposits[$i]->goalName,
        "TRIP_DIST0" => $finalDists[0],
        "TRIP_DIST1" => $finalDists[1],
        "TRIP_DIST2" => $finalDists[2],
        "TRIP_DIST3" => $finalDists[3],
        "DURATION0" => $finalDurs[0],
        "DURATION1" => $finalDurs[1],
        "DURATION2" => $finalDurs[2],
        "DURATION3" => $finalDurs[3],
        "MILES_CHANGE0" => $finalMiles[0],
        "MILES_CHANGE1" => $finalMiles[1],
        "MILES_CHANGE2" => $finalMiles[2],
        "MILES_CHANGE3" => $finalMiles[3],
        "PROGRESS0" => $finalProgs[0],
        "PROGRESS1" => $finalProgs[1],
        "PROGRESS2" => $finalProgs[2],
        "PROGRESS3" => $finalProgs[3],
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
    $finalDists = array(" ", " ", " ", " ");
    $numDigDist = strlen((string)round($withdrawals[$i]->goalAmount));
    if ($numDigDist <= 3) {
        for($j = 3; $j > (3 - $numDigDist); $j--) {
            $finalDists[$j] = (string)($dist % 10);
            $dist = floor($dist/10);
        }
    } else if ($numDigDist >= 4 && $numDigDist <= 6) {
        $finalDists[3] = 'K';
        $dist = floor($dist/1000);
        for($j = 3; $j > (3 - ($numDigDist - 3)); $j--) {
            $finalDists[($j - 1)] = (string)($dist % 10);
            $dist = floor($dist/10);
        }
    } else if ($numDigDist >= 7 && $numDigDist <= 9) {
        $finalDists[3] = 'M';
        $dist = floor($dist/1000000);
        for($j = 3; $j > (3 - ($numDigDist - 3)); $j--) {
            $finalDists[($j - 1)] = (string)($dist % 10);
            $dist = floor($dist/10);
        }
    } else {
        $finalDists[0] = 1;
        $finalDists[1] = 'B';
        $finalDists[2] = '+';
    }

    // get digits for duration
    $dur = round($withdrawals[$i]->goalLength);
    $finalDurs = array(" ", " ", " ", " ");
    $numDigDur = strlen((string)round($withdrawals[$i]->goalLength));
    if ($numDigDur > 3) {
        $finalDurs[0] = 9;
        $finalDurs[1] = 9;
        $finalDurs[2] = 9;
        $finalDurs[3] = '+';
    }
    for($j = 3; $j > (3 - $numDigDur); $j--) {
        $finalDurs[$j] = (string)($dur % 10);
        $dur = floor($dur/10);
    }

    // get digits for miles change
    $mile = abs(round($withdrawals[$i]->amount));
    $finalMiles = array(" ", " ", " ", " ");
    $numDigMile = strlen((string)abs(round($withdrawals[$i]->amount)));
    if ($numDigMile <= 3) {
        for($j = 3; $j > (3 - $numDigMile); $j--) {
            $finalMiles[$j] = (string)($mile % 10);
            $mile = floor($mile/10);
        }
    } else if ($numDigMile >= 4 && $numDigMile <= 6) {
        $finalMiles[3] = 'K';
        $mile = floor($mile/1000);
        for($j = 3; $j > (3 - ($numDigMile - 3)); $j--) {
            $finalMiles[($j - 1)] = (string)($mile % 10);
            $mile = floor($mile/10);
        }
    } else if ($numDigMile >= 7 && $numDigMile <= 9) {
        $finalMiles[3] = 'M';
        $mile = floor($mile/1000000);
        for($j = 3; $j > (3 - ($numDigMile - 3)); $j--) {
            $finalMiles[($j - 1)] = (string)($mile % 10);
            $mile = floor($mile/10);
        }
    } else {
        $finalMiles[0] = 1;
        $finalMiles[1] = 'B';
        $finalMiles[2] = '+';
    }

    // get digits for progress
    $prog = (round($withdrawals[$i]->balance) + round($withdrawals[$i]->amount));
    $finalProgs = array(" ", " ", " ", " ");
    $numDigProg = strlen((string)(round($withdrawals[$i]->balance) + round($withdrawals[$i]->amount)));
    if ($numDigProg <= 3) {
        for($j = 3; $j > (3 - $numDigProg); $j--) {
            $finalProgs[$j] = (string)($prog % 10);
            $prog = floor($prog/10);
        }
    } else if ($numDigProg >= 4 && $numDigProg <= 6) {
        $finalProgs[3] = 'K';
        $prog = floor($prog/1000);
        for($j = 3; $j > (3 - ($numDigProg - 3)); $j--) {
            $finalProgs[($j - 1)] = (string)($prog % 10);
            $prog = floor($prog/10);
        }
    } else if ($numDigProg >= 7 && $numDigProg <= 9) {
        $finalProgs[3] = 'M';
        $prog = floor($prog/1000000);
        for($j = 3; $j > (3 - ($numDigProg - 3)); $j--) {
            $finalProgs[($j - 1)] = (string)($prog % 10);
            $prog = floor($prog/10);
        }
    } else {
        $finalProgs[0] = 1;
        $finalProgs[1] = 'B';
        $finalProgs[2] = '+';
    }


    // get characters for name
    $name = (string)$withdrawals[$i]->fullName;
    $lastSpace = strrpos($name, " ");
    $lastName = substr($name, $lastSpace + 1, 3);
    $finalName = array(" ", " ", " ");
    if(strlen($lastName) <= 3) {
        $lastLen = strlen($lastName);
    } else {
        $lastLen = 3;
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
        "NAME5" => " ",
        "DESTINATION" => (string)$withdrawals[$i]->goalName,
        "TRIP_DIST0" => $finalDists[0],
        "TRIP_DIST1" => $finalDists[1],
        "TRIP_DIST2" => $finalDists[2],
        "TRIP_DIST3" => $finalDists[3],
        "DURATION0" => $finalDurs[0],
        "DURATION1" => $finalDurs[1],
        "DURATION2" => $finalDurs[2],
        "DURATION3" => $finalDurs[3],
        "MILES_CHANGE0" => $finalMiles[0],
        "MILES_CHANGE1" => $finalMiles[1],
        "MILES_CHANGE2" => $finalMiles[2],
        "MILES_CHANGE3" => $finalMiles[3],
        "PROGRESS0" => $finalProgs[0],
        "PROGRESS1" => $finalProgs[1],
        "PROGRESS2" => $finalProgs[2],
        "PROGRESS3" => $finalProgs[3],
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
    $finalDists = array(" ", " ", " ", " ");
    $numDigDist = strlen((string)round($goals[$i]->goalAmount));
    if ($numDigDist <= 3) {
        for($j = 3; $j > (3 - $numDigDist); $j--) {
            $finalDists[$j] = (string)($dist % 10);
            $dist = floor($dist/10);
        }
    } else if ($numDigDist >= 4 && $numDigDist <= 6) {
        $finalDists[3] = 'K';
        $dist = floor($dist/1000);
        for($j = 3; $j > (3 - ($numDigDist - 3)); $j--) {
            $finalDists[($j - 1)] = (string)($dist % 10);
            $dist = floor($dist/10);
        }
    } else if ($numDigDist >= 7 && $numDigDist <= 9) {
        $finalDists[3] = 'M';
        $dist = floor($dist/1000000);
        for($j = 3; $j > (3 - ($numDigDist - 3)); $j--) {
            $finalDists[($j - 1)] = (string)($dist % 10);
            $dist = floor($dist/10);
        }
    } else {
        $finalDists[0] = 1;
        $finalDists[1] = 'B';
        $finalDists[2] = '+';
    }

    // get digits for duration
    $dur = round($goals[$i]->goalLength);
    $finalDurs = array(" ", " ", " ", " ");
    $numDigDur = strlen((string)round($goals[$i]->goalLength));
    if ($numDigDur > 3) {
        $finalDurs[0] = 9;
        $finalDurs[1] = 9;
        $finalDurs[2] = 9;
        $finalDurs[3] = '+';
    }
    for($j = 3; $j > (3 - $numDigDur); $j--) {
        $finalDurs[$j] = (string)($dur % 10);
        $dur = floor($dur/10);
    }

    // get digits for miles change
    $mile = round($goals[$i]->amount);
    $finalMiles = array(" ", " ", " ", " ");
    $numDigMile = strlen((string)round($goals[$i]->amount));
    if ($numDigMile <= 3) {
        for($j = 3; $j > (3 - $numDigMile); $j--) {
            $finalMiles[$j] = (string)($mile % 10);
            $mile = floor($mile/10);
        }
    } else if ($numDigMile >= 4 && $numDigMile <= 6) {
        $finalMiles[3] = 'K';
        $mile = floor($mile/1000);
        for($j = 3; $j > (3 - ($numDigMile - 3)); $j--) {
            $finalMiles[($j - 1)] = (string)($mile % 10);
            $mile = floor($mile/10);
        }
    } else if ($numDigMile >= 7 && $numDigMile <= 9) {
        $finalMiles[3] = 'M';
        $mile = floor($mile/1000000);
        for($j = 3; $j > (3 - ($numDigMile - 3)); $j--) {
            $finalMiles[($j - 1)] = (string)($mile % 10);
            $mile = floor($mile/10);
        }
    } else {
        $finalMiles[0] = 1;
        $finalMiles[1] = 'B';
        $finalMiles[2] = '+';
    }

    // get digits for progress
    $prog = (round($goals[$i]->balance) + round($goals[$i]->amount));
    $finalProgs = array(" ", " ", " ", " ");
    $numDigProg = strlen((string)(round($goals[$i]->balance) + round($goals[$i]->amount)));
    if ($numDigProg <= 3) {
        for($j = 3; $j > (3 - $numDigProg); $j--) {
            $finalProgs[$j] = (string)($prog % 10);
            $prog = floor($prog/10);
        }
    } else if ($numDigProg >= 4 && $numDigProg <= 6) {
        $finalProgs[3] = 'K';
        $prog = floor($prog/1000);
        for($j = 3; $j > (3 - ($numDigProg - 3)); $j--) {
            $finalProgs[($j - 1)] = (string)($prog % 10);
            $prog = floor($prog/10);
        }
    } else if ($numDigProg >= 7 && $numDigProg <= 9) {
        $finalProgs[3] = 'M';
        $prog = floor($prog/1000000);
        for($j = 3; $j > (3 - ($numDigProg - 3)); $j--) {
            $finalProgs[($j - 1)] = (string)($prog % 10);
            $prog = floor($prog/10);
        }
    } else {
        $finalProgs[0] = 1;
        $finalProgs[1] = 'B';
        $finalProgs[2] = '+';
    }

    // get characters for name
    $name = (string)$goals[$i]->fullName;
    $lastSpace = strrpos($name, " ");
    $lastName = substr($name, $lastSpace + 1, 3);
    $finalName = array(" ", " ", " ");
    if(strlen($lastName) <= 3) {
        $lastLen = strlen($lastName);
    } else {
        $lastLen = 3;
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
        "NAME5" => " ",
        "DESTINATION" => (string)$goals[$i]->goalName,
        "TRIP_DIST0" => $finalDists[0],
        "TRIP_DIST1" => $finalDists[1],
        "TRIP_DIST2" => $finalDists[2],
        "TRIP_DIST3" => $finalDists[3],
        "DURATION0" => $finalDurs[0],
        "DURATION1" => $finalDurs[1],
        "DURATION2" => $finalDurs[2],
        "DURATION3" => $finalDurs[3],
        "MILES_CHANGE0" => $finalMiles[0],
        "MILES_CHANGE1" => $finalMiles[1],
        "MILES_CHANGE2" => $finalMiles[2],
        "MILES_CHANGE3" => $finalMiles[3],
        "PROGRESS0" => $finalProgs[0],
        "PROGRESS1" => $finalProgs[1],
        "PROGRESS2" => $finalProgs[2],
        "PROGRESS3" => $finalProgs[3],
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