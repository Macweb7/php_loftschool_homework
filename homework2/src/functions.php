<?php
/*function takes_array($input)
{
    echo "$input[0] + $input[1] = ", $input[0]+$input[1];
}*/
function task1($strings, $glue = false)
{
    if (!is_array($strings)) {
        return false;
    }
    if ($glue === false) {
        foreach ($strings as $string) {
            echo "<p>" . $string . "</p>";
        }
    } else {
        return "<p>" . implode($strings) . "</p>";
    }
}

function task2(...$arg)
{
    $arg_list = $arg;
    $arithmetic_sign = array_shift($arg_list);
    $imploded_numbers = implode($arithmetic_sign, $arg_list);
    /*echo $imploded_numbers . " =";
    eval('$result = ' . "$imploded_numbers;");
    echo $result;*/
    $first_number = array_shift($arg_list);
    $numbers = $arg_list;
    $result = $first_number;
    echo $result;
    foreach ($numbers as $number) {
        echo $arithmetic_sign . $number;
        switch ($arithmetic_sign) {
            case '-' :
                $result -= $number;
                break;
            case '+' :
                $result += $number;
                break;
            case '*' :
                $result *= $number;
                break;
            case '/' :
                $result /= $number;
                break;
        }
    }
    echo " = $result";
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
        echo "</table><br>";
    } else {
        echo "<p>Введите целые числа</p>";
    }
}

function task4()
{
    echo "<p>" . date('d.m.Y H:i') . "</p>";
}

function task5()
{
    $date = mktime(0, 0, 0, 02, 24, 2016);
    echo "<p>" . $date . "</p>";
}

function task6($string)
{
    echo "<p>" . str_replace('К', '', $string) . "</p>";
}

function task7($string)
{
    echo "<p>" . str_replace('Две', 'Три', $string) . "</p>";
}

function task8($filename)
{
    $string = 'Hello again!';
    file_put_contents('test.txt', $string);
    echo "<p>" . file_get_contents($filename) . "</p>";
}
