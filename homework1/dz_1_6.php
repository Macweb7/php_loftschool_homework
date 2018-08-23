<?php
$rows = 10;
$cols = 10;
$tr = 1;
$td = 1;

echo "<table border='homework1'>";
for ($tr = 1; $tr <= $rows; $tr++) {
    echo "<tr>";
    for ($td = 1; $td <= $cols; $td++) {
        if (($tr % 2) == 0 and ($td % 2) == 0 and $td !== 1 and $tr !== 1) {
            echo "<td>[" . $tr * $td . "]</td>";
        } elseif (($tr % 2) == 1 and ($td % 2) == 1 and $td !== 1 and $tr !== 1) {
            echo "<td>(" . $tr * $td . ")</td>";
        } else
            echo "<td>" . $tr * $td . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
