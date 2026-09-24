#ifndef KUCING_H
#define KUCING_H

#include "HewanPeliharaan.h"

class Kucing: public HewanPeliharaan{
private: 
    string Ras;
    string WarnaBulu;
    float BeratBadan;

public: 
    Kucing(string Nama, int Umur, string JenisKelamin, string idTag, string NamaPemilik, string StatusVaksin, string Ras, string WarnaBulu, float BeratBadan);

    // Getter
    string getRas();
    string getWarnaBulu();
    float getBeratBadan();

    // Setter
    void setRas(string Ras);
    void setWarnaBulu(string WarnaBulu);
    void setBeratBadan(float BeratBadan);
};

#endif