from add import add_data, show_data
from simpan import read_data


dataKucing = read_data()


while True:

    print("\n================================")
    print("            PET SHOP")
    print("================================")
    print("1. Tampilkan Data")
    print("2. Tambah Data")
    print("3. Keluar")
    print("================================")

    pilihan = input("Pilih menu : ")

    if pilihan == "1":

        show_data(dataKucing)

    elif pilihan == "2":

        kucingBaru = add_data()
        dataKucing.append(kucingBaru)

    elif pilihan == "3":

        print("\nProgram selesai.")
        break

    else:

        print("\nPilihan tidak valid!")