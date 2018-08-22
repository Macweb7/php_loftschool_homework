<?php
function task1($arg1, $arg2)
{
    if ((is_array($arg1)) and ($arg2 !== 'true')) {
        foreach ($arg1 as $val) {
            echo "<p>" . $val . "</p>";
        }
    } else
        return "<p>" . $arg1 . "</p>";
}

function task2($arg)
{
    $numargs = func_num_args();
    $arg_list = func_get_args();
    if ($arg_list[0] == '-') {
        for ($i = 1; $i < $numargs; $i++) {
            echo $result -= $arg_list[$i] . "\n";
        }
    } elseif ($arg_list[0] == '+') {
        for ($i = 1; $i < $numargs; $i++) {
            echo $result += $arg_list[$i] . "\n";
        }
    } elseif ($arg_list[0] == '*') {
        for ($i = 1; $i < $numargs; $i++) {
            echo $result *= $arg_list[$i] . "\n";
        }
    } elseif ($arg_list[0] == '/') {
        for ($i = 1; $i < $numargs; $i++) {
            echo $result /= $arg_list[$i] . "\n";
        }
    }
}

function task3($rows = 1, $cols = 1)
{
    $int_rows = is_int($rows);
    $int_cols = is_int($cols);
    if (($int_rows == true) and ($int_cols == true)) {
        echo "<table border='1'>";
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
    } else {
        echo 'Введите целые числа';
    }
}