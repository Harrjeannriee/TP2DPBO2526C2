from Kucing import Kucing
from simpan import save_data

# func untuk menambahkan data/minta inputan
def add_data():
    print("\n-------------TAMBAH DATA KUCING--------------")

    # masukkan inputan ke variabel
    Nama = input("Nama : ")
    Umur = int(input("Umur : "))
    JenisKelamin = input("Jenis Kelamin : ")
    idTag = input("ID Tag : ")
    NamaPemilik = input("Nama Pemilik : ")
    StatusVaksin = input("Status Vaksin : ")
    Ras = input("Ras : ")
    WarnaBulu = input("Warna Bulu : ")
    BeratBadan = float(input("Berat Badan (kg) : "))

    # variabel inputan dikirim ke constructor
    kucing = Kucing(Nama, Umur, JenisKelamin, idTag, NamaPemilik, StatusVaksin, Ras, WarnaBulu, BeratBadan)

    save_data(kucing)

    return kucing

# func untuk menampilkan data yang tersimpan di file
def show_data(dataKucing):

    if not dataKucing:
        print("\nBelum ada data nih...")
        return

    # Header tabel
    header = [
        "Nama",
        "Umur",
        "Jenis Kelamin",
        "ID Tag",
        "Nama Pemilik",
        "Status Vaksin",
        "Ras",
        "Warna Bulu",
        "Berat Badan"
    ]

    # Menampung seluruh data
    rows = []

    for kucing in dataKucing:
        rows.append([
            str(kucing.getNama()),
            str(kucing.getUmur()),
            str(kucing.getJenisKelamin()),
            str(kucing.getIdTag()),
            str(kucing.getNamaPemilik()),
            str(kucing.getStatusVaksin()),
            str(kucing.getRas()),
            str(kucing.getWarnaBulu()),
            str(kucing.getBeratBadan())
        ])

    # Menentukan panjang maksimum setiap kolom
    lebar = []

    for i in range(len(header)):
        panjang = len(header[i])

        for row in rows:
            if len(row[i]) > panjang:
                panjang = len(row[i])

        lebar.append(panjang + 2)

    # Membuat garis horizontal
    def garis():
        print("+", end="")

        for panjang in lebar:
            print("-" * panjang, end="+")
        
        print()

    # Garis paling atas
    garis()

    # Header
    print("|", end="")

    for i in range(len(header)):
        print(f" {header[i]:<{lebar[i] - 1}}|", end="")

    print()

    # Garis setelah header
    garis()

    # Isi tabel
    for row in rows:

        print("|", end="")

        for i in range(len(row)):
            print(f" {row[i]:<{lebar[i] - 1}}|", end="")

        print()

        # Garis setiap baris
        garis()