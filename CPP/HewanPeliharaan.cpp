#include "HewanPeliharaan.h"

// constructor yang sedang didefinisikan
HewanPeliharaan::HewanPeliharaan(string Nama, int Umur, string JenisKelamin, string idTag, string NamaPemilik, string StatusVaksin)

    // panggil constructor parent
    : Hewan(Nama, Umur, JenisKelamin)
    {
        this->idTag = idTag;
        this->NamaPemilik = NamaPemilik;
        this->StatusVaksin = StatusVaksin;
    }

// Getter
string HewanPeliharaan::getIdTag(){
    return idTag;
}
string HewanPeliharaan::getNamaPemilik(){
    return NamaPemilik;
}
string HewanPeliharaan::getStatusVaksin(){
    return StatusVaksin;
}

// Setter
void HewanPeliharaan::setIdTag(string idTag){
    this->idTag = idTag;
}
void HewanPeliharaan::setNamaPemilik(string NamaPemilik){
    this->NamaPemilik = NamaPemilik;
}
void HewanPeliharaan::setStatusVaksin(string StatusVaksin){
    this->StatusVaksin = StatusVaksin;
}
