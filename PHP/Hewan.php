<?php

class Hewan
{
    private $Nama;
    private $Umur;
    private $JenisKelamin;

    public function __construct($Nama, $Umur, $JenisKelamin)
    {
        $this->Nama = $Nama;
        $this->Umur = $Umur;
        $this->JenisKelamin = $JenisKelamin;
    }

    // Getter
    public function getNama(){
        return $this->Nama;
    }
    public function getUmur(){
        return $this->Umur;
    }
    public function getJenisKelamin(){
        return $this->JenisKelamin;
    }

    // Setter
    public function setNama($Nama){
        $this->Nama = $Nama;
    }
    public function setUmur($Umur){
        $this->Umur = $Umur;
    }
    public function setJenisKelamin($JenisKelamin){
        $this->JenisKelamin = $JenisKelamin;
    }
}

?>