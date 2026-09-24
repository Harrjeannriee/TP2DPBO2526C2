#include "simpan.h"

Kucing::Kucing(string Nama, int Umur, string JenisKelamin, string idTag, string NamaPemilik, string StatusVaksin, string Ras, string WarnaBulu, float BeratBadan) 

    // panggil constructor parent
    : HewanPeliharaan(Nama, Umur, JenisKelamin, idTag, NamaPemilik, StatusVaksin){
        this->Ras = Ras;
        this->WarnaBulu = WarnaBulu;
        this->BeratBadan = BeratBadan;
    }

// Getter
string Kucing::getRas(){
    return Ras;
}
string Kucing::getWarnaBulu(){
    return WarnaBulu;
}
float Kucing::getBeratBadan(){
    return BeratBadan;
}

// Setter
void Kucing::setRas(string Ras){
    this->Ras = Ras;
}
void Kucing::setWarnaBulu(string WarnaBulu){
    this->WarnaBulu = WarnaBulu;
}
void Kucing::setBeratBadan(float BeratBadan){
    this->BeratBadan = BeratBadan;
}