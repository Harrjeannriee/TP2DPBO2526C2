#include "Kucing.h"
#include <vector>
#include <iostream>

using namespace std;

// Func from simpan.cpp
vector<Kucing> bacaData();
void simpanData(Kucing kucing);

// Func from add.cpp
void add_data(vector<Kucing>& daftarKucing);
void show_data(vector<Kucing>& daftarKucing);

int main()
{
    vector<Kucing> daftarKucing = bacaData();

    while(true)
    {
        cout << "\n--------------------------------" << endl;
        cout << "|         MENU PETSHOP         |" << endl;
        cout << "|------------------------------|" << endl;
        cout << "| 1. Tambah Data               |" << endl;
        cout << "| 2. Tampilkan Data            |" << endl;
        cout << "| 3. Exit                      |" << endl;
        cout << "--------------------------------" << endl;

        int pilihan;

        cout << "Pilihan Menu (Nomor) : ";
        cin >> pilihan;

        if(cin.fail())
        {
            cout << "\nInput tidak valid! Masukkan angka 1-2" << endl;

            cin.clear();
            cin.ignore(1000, '\n');
            continue;
        }

        if(pilihan == 1){
            add_data(daftarKucing);
        }
        else if(pilihan == 2){
            show_data(daftarKucing);
        }
        else if(pilihan == 3){
            cout << "\nProgram Selesai" << endl;
            break;
        }
        else {
            cout << "\nPilihan Tidak Tersedia" << endl;
        }
    }
    return 0;
}