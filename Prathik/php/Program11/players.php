<?php
$indianPlayers = array("M S Dhoni","Sachin","Shewag","Ganguly","Virat Kohli","Rohit Sharma","Jadeja");

echo "
<table border='1' bgcolor='skyblue'>
    <tr bgcolor='cyan'>
        <th bgcolor='silver'>Sl no.</th>
        <th>Player Name</th>
    </tr>
";

$i = 1;
foreach ($indianPlayers as $player) {
    echo "
    <tr>
        <td bgcolor='pink'>$i</td>
        <td>$player</td>
    </tr>
    ";
    $i++;
}

echo "</table>";
?>

