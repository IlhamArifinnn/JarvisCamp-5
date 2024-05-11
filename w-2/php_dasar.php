<?php
echo "hello world";
echo "<br />";

$nama = "ilham  arifin";
$usia = 19;
echo $nama . " " . $usia . " tahun";
echo "<br />";

function jumlah($angka1, $angka2)
{
    $result = $angka1 + $angka2;
    return $result;
}

echo jumlah(12, 5);
