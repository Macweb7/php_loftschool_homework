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
    //echo $numargs;
    $arg_list = func_get_args();
    $arithmetic_sign = $arg_list[0];
    $result = '';
    if (!is_string($arithmetic_sign)) {
        echo "Первым параметром передайте один из арифметических знаков: +, -, *, /, 
        заключенный в одинарные кавычки.<br> Пример '+'";
    }
    if ($arithmetic_sign == '-') {
        $i=0;
        while($i < count($arg_list)) {
             echo $arg_list[$i] . "-";
             $i++;
        }
        /*for ($i = 1; $i < $numargs; $i++) {
            $result -= $arg_list[$i];
        }
        echo $result;*/
    } elseif ($arithmetic_sign == '+') {
        for ($i = 1; $i < $numargs; $i++) {
            $result += $arg_list[$i];
        }
        echo $result;
    } elseif ($arithmetic_sign == '*') {
        for ($i = 1; $i < $numargs; $i++) {
            $result *= $arg_list[$i];
        }
        echo $result;
    } elseif ($arithmetic_sign == '/') {
        for ($i = 1; $i < $numargs; $i++) {
            $result /= $arg_list[$i] . "\n";
        }
        echo $result;
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
