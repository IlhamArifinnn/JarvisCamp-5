<?php
function ganjil($num1, $num2)
{
    for ($i = $num1; $i < $num2; $i++) {
        if ($i % 2 == 1) {
            echo $i;
        }
    }
}

function genap($num1, $num2)
{
    for ($i = $num1; $i < $num2; $i++) {
        if ($i % 2 == 0) {
            echo $i;
        }
    }
}

function tambah($num1, $num2)
{
    return $num1 + $num2;
}

function kurang($num1, $num2)
{
    return $num1 - $num2;
}

function kali($num1, $num2)
{
    return $num1 * $num2;
}

function bagi($num1, $num2)
{
    return $num1 / $num2;
}


ganjil(1, 10);
echo "<br/>";

genap(1, 10);
echo "<br/>";

echo tambah(10, 2);
echo "<br/>";

echo kurang(10, 2);
echo "<br/>";

echo kali(10, 2);
echo "<br/>";

echo bagi(10, 2);
