<?php

class HewanPeliharaan extends Hewan
{
    private $idTag;
    private $NamaPemilik;
    private $StatusVaksin;

    public function __construct($Nama, $Umur, $JenisKelamin, $idTag, $NamaPemilik, $StatusVaksin)
    {
        parent::__construct($Nama, $Umur, $JenisKelamin);

        $this->idTag = $idTag;
        $this->NamaPemilik = $NamaPemilik;
        $this->StatusVaksin = $StatusVaksin;
    }

    // Getter
    public function getIdTag(){
        return $this->idTag;
    }
    public function getNamaPemilik(){
        return $this->NamaPemilik;
    }
    public function getStatusVaksin(){
        return $this->StatusVaksin;
    }

    // Setter
    public function setIdTag($idTag){
        $this->idTag = $idTag;
    }
    public function setNamaPemilik($NamaPemilik){
        $this->NamaPemilik = $NamaPemilik;
    }
    public function setStatusVaksin($StatusVaksin){
        $this->StatusVaksin = $StatusVaksin;
    }
}

?>