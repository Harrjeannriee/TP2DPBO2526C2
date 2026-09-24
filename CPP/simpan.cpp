#include "Kucing.h"
#include <vector>
#include <fstream>
#include <sstream>

using namespace std;

// FUNC MEMBACA FILE
vector<Kucing> bacaData(){      //baca data.txt dan mengembalikan vector yang berisi objek kucing
    vector<Kucing> daftarKucing;

    // input file stream dipakai untuk membaca file
    ifstream file("data.txt");

    string baris;

    // ambil satu baris dari file
    while(getline(file, baris))
    {
        stringstream ss(baris);

        // jadikan semua string dulu
        string Nama;
        string Umur;
        string JenisKelamin;
        string idTag;
        string NamaPemilik;
        string StatusVaksin;
        string Ras;
        string WarnaBulu;
        string BeratBadan;

        getline(ss, Nama, '|');
        getline(ss, Umur, '|');
        getline(ss, JenisKelamin, '|');
        getline(ss, idTag, '|');
        getline(ss, NamaPemilik, '|');
        getline(ss, StatusVaksin, '|');
        getline(ss, Ras, '|');
        getline(ss, WarnaBulu, '|');
        getline(ss, BeratBadan, '|');

        // parsing
        Kucing kucingBaru(Nama, stoi(Umur), JenisKelamin, idTag, NamaPemilik, StatusVaksin, Ras, WarnaBulu, stof(BeratBadan));

        // masukkan kucingbaru ke daftarkucing
        daftarKucing.push_back(kucingBaru);
    }

    file.close();

    return daftarKucing;
}

// FUNC MENYIMPAN DATA
void simpanData(Kucing kucing)  //(class, variabel)
{
    // buka file untuk menulis satu data baru di akhir
    ofstream file("data.txt", ios::app);

    // gabungkan dengan |
    file << kucing.getNama() << "|";
    file << kucing.getUmur() << "|";
    file << kucing.getJenisKelamin() << "|";
    file << kucing.getIdTag() << "|";
    file << kucing.getNamaPemilik() << "|";
    file << kucing.getStatusVaksin() << "|";
    file << kucing.getRas() << "|";
    file << kucing.getWarnaBulu() << "|";
    file << kucing.getBeratBadan() << endl;
    
    file.close();
}