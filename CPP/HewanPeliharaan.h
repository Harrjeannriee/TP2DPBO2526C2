#ifndef HEWANPELIHARAAN_H
#define HEWANPELIHARAAN_H

#include "Hewan.h"

class HewanPeliharaan: public Hewan{
private:
    string idTag;
    string NamaPemilik;
    string StatusVaksin;

public:
    HewanPeliharaan(string Nama, int Umur, string JenisKelamin, string idTag, string NamaPemilik, string StatusVaksin);

    // Getter
    string getIdTag();
    string getNamaPemilik();
    string getStatusVaksin();

    // Setter
    void setIdTag(string idTag);
    void setNamaPemilik(string NamaPemilik);
    void setStatusVaksin(string StatusVaksin);
};

#endif