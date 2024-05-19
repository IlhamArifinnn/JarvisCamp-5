<?php

class Buah
{
    public $nama;
    public $warna;
    public $rasa;

    public function __construct($nama, $warna, $rasa)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->rasa = $rasa;
    }

    public function jatuh()
    {
        echo $this->nama . " jatuh";
    }
}

class Mobil
{
    public $warna;
    public $merk;

    public function __construct($merk, $warna)
    {
        $this->warna = $warna;
        $this->merk = $merk;
    }
    public function berjalan()
    {
        echo $this->merk . " berjalan";
    }

    public function mengerem()
    {
        echo $this->merk . " mengerem";
    }
}


$jeruk = new Buah("jeruk", "merah", "manis");
$jeruk->jatuh();

echo "<hr />";

$toyota = new Mobil("toyota", "merah");
$toyota->berjalan();
echo "<br />";
$toyota->mengerem();
