<?php 

class mobil 
{

    public $merk = "TOYOTA";
    public $tahun_produksi = 2018;
    public $warna = "putih";
    public $kecepatan = 100;

    public function start(){
        echo "mobil berjalan";
    }

    public function akselerasi(){
        echo "mobil akselerasi";
    }

    public function berhenti(){
        echo "mobil berhenti";
    }

}

echo "<div><h1>MOBIL 1 :</h1></div>";

    $mobil_1 = new mobil();
    echo $mobil_1->merk;
    echo "<br/>";
    echo $mobil_1->tahun_produksi;
    echo "<br/>";
    echo $mobil_1->warna;
    echo "<br/>";
    echo $mobil_1->kecepatan;
    echo "<br/>";
    $mobil_1->start();
    echo "<br/>";
    $mobil_1->akselerasi();
    echo "<br/>";
    $mobil_1->berhenti();


    echo "<br/>";

echo "<div><h1>MOBIL 2 :</h1></div>";

    $mobil_2 = new mobil();
    echo $mobil_2->merk="DAIHATSU";
    echo "<br/>";
    echo $mobil_2->tahun_produksi="2001";
    echo "<br/>";
    echo $mobil_2->warna="hitam";
    echo "<br/>";
    echo $mobil_2->kecepatan="70";
    echo "<br/>";
    $mobil_2->start();
    echo "<br/>";
    $mobil_2->akselerasi();
    echo "<br/>";
    $mobil_2->berhenti();
   

?>
