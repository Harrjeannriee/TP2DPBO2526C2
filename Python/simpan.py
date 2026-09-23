from Kucing import Kucing

# Func untuk menyimpan data baru ke file
def save_data(data, namaFile="data.txt"):

    # append untuk menambahkan data di akhir file tanpa ngehapus data sebelumnya
    with open(namaFile, "a") as file:

        file.write(
            "|".join([  #dia berfungsi sebagai menggabungkan data lalu memisahkannya menggunakan |. Contoh Nama|Umur|Jenis Kelamin|...
                str(data.getNama()),
                str(data.getUmur()),
                data.getJenisKelamin(),
                data.getIdTag(),
                data.getNamaPemilik(),
                data.getStatusVaksin(),
                data.getRas(),
                data.getWarnaBulu(),
                str(data.getBeratBadan())
            ]) + "\n"
        )

# Func untuk membaca data dari file untuk dijadikan object
def read_data(namaFile="data.txt"):

    dataKucing = [] #list ini akan diisi obejct

    # coba buka file dan jalankan program
    try:
        with open(namaFile, "r") as file:

            # baca setiap baris di file
            for baris in file:
                baris = baris.strip()       #membersihkan bagian kosong di awal/akhir, termasuk \n

                # jika baris kosong, lanjut ke baris berikutnya
                if not baris:
                    continue

                data = baris.split("|")     #gunanya untuk memisahkan string setiap kali menemukan | lalu masukkan ke obejct

                # data yang diambil dari file dimasukkan kembali ke constructor sehingga terbentuk objek kucing
                kucing = Kucing(
                    data[0],
                    int(data[1]),
                    data[2],
                    data[3],
                    data[4],
                    data[5],
                    data[6],
                    data[7],
                    float(data[8])
                )

                dataKucing.append(kucing)       #masukkan object kucing ke dalam list dataKucing

    # kalau file tidak ditemukan, jangan bikin crash
    except FileNotFoundError:
        pass

    return dataKucing