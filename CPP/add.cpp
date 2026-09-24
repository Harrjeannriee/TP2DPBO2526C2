#include "Kucing.h"
#include "simpan.h"
#include <vector>
#include <iostream>
#include <string>
#include <algorithm>
#include <iomanip>
#include <cctype>
#include <sstream>

using namespace std;

string lowerString(string teks)
{
    transform(teks.begin(), teks.end(), teks.begin(), ::tolower);
    return teks;
}

void add_data(vector<Kucing>& daftarKucing)
{
    cout << "---------------------------" << endl;
    cout << "    TAMBAH DATA KUCING     " << endl;
    cout << "---------------------------" << endl;
    
    string Nama;
    int Umur;
    string JenisKelamin;
    string idTag;
    string NamaPemilik;
    string StatusVaksin;
    string Ras;
    string WarnaBulu;
    float BeratBadan;

    // membersihkan enter dari input sebelumnya
    cin.ignore();

    // input
    cout << "Nama Kucing    : ";
    getline(cin, Nama);
    cout << "Umur Kucing    : ";
    cin >> Umur;

    cin.ignore();

    cout << "Jenis Kelamin  : ";
    getline(cin, JenisKelamin);
    cout << "ID Tag         : ";
    getline(cin, idTag);
    cout << "Nama Pemilik   : ";
    getline(cin, NamaPemilik);
    cout << "Status Vaksin  : ";
    getline(cin, StatusVaksin);
    cout << "Ras Kucing     : ";
    getline(cin, Ras);
    cout << "Warna Bulu     : ";
    getline(cin, WarnaBulu);
    cout << "Berat Badan    : ";
    cin >> BeratBadan;

    Kucing kucingBaru(Nama, Umur, JenisKelamin, idTag, NamaPemilik, StatusVaksin, Ras, WarnaBulu, BeratBadan);

    daftarKucing.push_back(kucingBaru);

    simpanData(kucingBaru);

    cout << "\nData Kucing Baru Berhasil Ditambahkan!" << endl;
}

// MENAMPILKAN DATA KUCING
// MENAMPILKAN DATA KUCING

void show_data(vector<Kucing>& daftarKucing)
{
    cout << "    DAFTAR DATA KUCING     " << endl;

    if(daftarKucing.size() == 0)
    {
        cout << "\nBelum ada data kucing..." << endl;
        return;
    }

    // Header tabel
    vector<string> header = {
        "Nama",
        "Umur",
        "Jenis Kelamin",
        "ID Tag",
        "Nama Pemilik",
        "Status Vaksin",
        "Ras",
        "Warna Bulu",
        "Berat Badan"
    };

    // Menyimpan semua data dalam bentuk string
    vector<vector<string>> rows;

    for(Kucing kucing : daftarKucing)
    {
        ostringstream berat;
        berat << fixed << setprecision(2) << kucing.getBeratBadan();

        rows.push_back({
            kucing.getNama(),
            to_string(kucing.getUmur()),
            kucing.getJenisKelamin(),
            kucing.getIdTag(),
            kucing.getNamaPemilik(),
            kucing.getStatusVaksin(),
            kucing.getRas(),
            kucing.getWarnaBulu(),
            berat.str()
        });
    }

    // Mencari panjang kolom terpanjang
    vector<int> lebar;

    for(int i = 0; i < header.size(); i++)
    {
        int panjang = header[i].length();

        for(vector<string> row : rows)
        {
            if(row[i].length() > panjang)
            {
                panjang = row[i].length();
            }
        }

        lebar.push_back(panjang + 2);
    }

    // Fungsi untuk mencetak garis tabel
    auto garis = [&]()
    {
        cout << "+";

        for(int panjang : lebar)
        {
            cout << string(panjang, '-') << "+";
        }

        cout << endl;
    };

    // Cetak tabel
    garis();

    cout << "|";

    for(int i = 0; i < header.size(); i++)
    {
        cout << " " << left << setw(lebar[i] - 1)
             << header[i] << "|";
    }

    cout << endl;

    garis();

    for(vector<string> row : rows)
    {
        cout << "|";

        for(int i = 0; i < row.size(); i++)
        {
            cout << " " << left << setw(lebar[i] - 1)
                 << row[i] << "|";
        }

        cout << endl;

        garis();
    }
}