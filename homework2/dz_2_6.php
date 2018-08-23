<?php
$string = 'Hello again!';
file_put_contents('test.txt', $string);

function reading_file($namefile)
{
    echo file_get_contents($namefile);
}

reading_file('test.txt');
