<?php
$xml = simplexml_load_file("dashboard.xml");

$goals = $xml->children()->goals->children();
for($i = 0; $i < 3; $i++)
{
    $chart = array(
        "fullName" => (string)$goals[$i]->fullName,
        "goalName" => (string)$goals[$i]->goalName,
        "goalAmount" => (string)$goals[$i]->goalAmount,
        "goalLength" => (string)$goals[$i]->goalLength,
        "initDeposit" => (string)$goals[$i]->initDeposit,
        );
    $mostRecentThreeGoals[$i]=$chart;
}

?>