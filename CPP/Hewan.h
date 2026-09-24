#ifndef HEWAN_H
#define HEWAN_H

#include <string>
using namespace std;

class Hewan {
private:
    string Nama;
    int Umur;
    string JenisKelamin;

public:
    Hewan(string Nama, int Umur, string JenisKelamin);

    // Getter
    string getNama();
    int getUmur();
    string getJenisKelamin();

    // Setter
    void setNama(string Nama);
    void setUmur(int Umur);
    void setJenisKelamin(string JenisKelamin);
};

#endif