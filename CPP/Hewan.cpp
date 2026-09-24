#include "Hewan.h"

Hewan::Hewan(string Nama, int Umur, string JenisKelamin){
    this->Nama = Nama;
    this->Umur = Umur;
    this->JenisKelamin = JenisKelamin;
}

// Getter
string Hewan::getNama(){
    return Nama;
}
int Hewan::getUmur(){
    return Umur;
}
string Hewan::getJenisKelamin(){
    return JenisKelamin;
}

// Setter
void Hewan::setNama(string Nama){
    this->Nama = Nama;
}   
void Hewan::setUmur(int Umur){
    this->Umur = Umur;
}
void Hewan::setJenisKelamin(string JenisKelamin){
    this->JenisKelamin = JenisKelamin;
}

