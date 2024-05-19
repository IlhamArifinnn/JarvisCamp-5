<?php
class Kendaraan
{
    public $merk;
    public $tahun;
    public $warna;

    public function __construct($merk, $tahun, $warna)
    {
        $this->merk = $merk;
        $this->tahun = $tahun;
        $this->warna = $warna;
    }

    public function info()
    {
        return "Merk: $this->merk, Tahun: $this->tahun, Warna: $this->warna";
    }
}

class Mobil extends Kendaraan
{
    public $tipe;
    public $bahanBakar;

    public function __construct($merk, $tahun, $warna, $tipe, $bahanBakar)
    {
        parent::__construct($merk, $tahun, $warna);
        $this->tipe = $tipe;
        $this->bahanBakar = $bahanBakar;
    }

    public function infoLengkap()
    {
        return parent::info() . ", Tipe: $this->tipe, Bahan Bakar: $this->bahanBakar";
    }
}

$kendaraan = new Kendaraan("Toyota", 2020, "Hitam");
echo $kendaraan->info();

echo "<hr/>";

$mobil = new Mobil("Mitsubisi", 2021, "Putih", "Pajero Sport", "Solar");
echo $mobil->infoLengkap();
