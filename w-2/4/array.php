<?php
// array kosong
$fruit = [];
$fruit[0] = 1;
$fruit["buah"] = "pisang";

print_r($fruit);
echo "<br/>";

// panjang array
echo count($fruit);
echo "<br/>";

// tambah array di akhir
array_push($fruit, "semangka");
print_r($fruit);
echo "<br/>";

// cek data di array
var_dump(in_array("apel", $fruit));
echo "<br/>";

// ambil array di akhir
array_pop($fruit);
print_r($fruit);

// hapus array
unset($fruit);
