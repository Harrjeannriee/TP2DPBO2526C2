<?php

class Kucing extends HewanPeliharaan
{
    private $Ras;
    private $WarnaBulu;
    private $BeratBadan;
    private $Foto_produk;

    public function __construct($Nama, $Umur, $JenisKelamin, $idTag, $NamaPemilik, $StatusVaksin, $Ras, $WarnaBulu, $BeratBadan, $Foto_produk)
    {
        parent::__construct($Nama, $Umur, $JenisKelamin, $idTag, $NamaPemilik, $StatusVaksin);

        $this->Ras = $Ras;
        $this->WarnaBulu = $WarnaBulu;
        $this->BeratBadan = $BeratBadan;
        $this->Foto_produk = $Foto_produk;
    }

    // Getter
    public function getRas(){
        return $this->Ras;
    }
    public function getWarnaBulu(){
        return $this->WarnaBulu;
    }
    public function getBeratBadan(){
        return $this->BeratBadan;
    }
    public function getFoto_produk(){
        return $this->Foto_produk;
    }

    // Setter
    public function setRas($Ras){
        $this->Ras = $Ras;
    }
    public function setWarnaBulu($WarnaBulu){
        $this->WarnaBulu = $WarnaBulu;
    }
    public function setBeratBadan($BeratBadan){
        $this->BeratBadan = $BeratBadan;
    }
    public function setFoto_produk($Foto_produk){
        $this->Foto_produk = $Foto_produk;
    }
}

?>