# Tugas Praktikum 2 DPBO

## Janji
Saya Andina Dwi Listiana dengan NIM 2501065 mengerjakan TP 2
dalam mata kuliah Desain Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin

## Tema Program
Cat Comfort - Pet shop (Pendataan Kucing)

## Konsep OOP
Multilevel Inheritance

## Penjelasan Atribut dan Method
Program ini menggunakan 3 class yang saling terhubung dengan konsep multilevel inheritance, yaitu Hewan - HewanPeliharaan - Kucing

1. Class Hewan
   Atribut :
   - Nama = untuk menyimpan data nama hewan
   - Umur = untuk menyimpan umur hewan
   - JenisKelamin = untuk menyimpan data jenis kelamin hewan
   Method:
   - getNama() = untuk mengambil nama hewan
   - getUmur() = untuk mengambil umur hewan
   - getJenisKelamin() = untuk mengambil jenis kelamin hewan
   - setNama() = untuk mengubah nama hewan
   - setUmur() = untuk mengubah umur hewan
   - setJenisKelamin() = untuk mengubah jenis kelamin hewan
     
3. Class HewanPeliharaan
   Class ini merupakan turunan dari class Hewan. Class ini juga memiliki atribut dari class Hewan. Selain itu, class HewanPeliharaan menambah atribut sebagai data yang berkaitan dengan hewan peliharaan.
   Atribut:
   - idTag = untuk menyimpan ID atau tanda pengenal hewan
   - NamaPemilik = untuk menyimpan nama pemilik hewan
   - Statusvaksin = menyimpan informasi apakah hewan sudah divaksin atau belum
   Method:
   - getIdTag() = untuk mengambil ID tag
   - getNamaPemilik() = untuk mengambil nama pemilik
   - getStatusVaksin() = untuk mengambil status vaksin
   - setIdTag() = untuk mengubah ID tag
   - setNamaPemilik() = untuk mengubah nama pemilik
   - setStatusVaksin() = untuk mengubah status vaksin
     
5. Class Kucing
   Class ini merupakan turunan dari class HewanPeliharaan dan menambahkan data spesiifk tentang kucinh
   Atribut:
   - Ras = untuk menyimpan ras kucing
   - WarnaBulu = untuk menyimpan warna bulu kucing
   - BeratBadan = untul menyimpan berat badan kucing
   - foto_produk = untuk menyimpan foto kucing (khusus php)
   Method:
   - getRas() = untuk mengambil ras kucing
   - getWarnaBulu() = untuk mengambil warna bulu kucing
   - getBeratBadan() = untuk mengambil berat badan kucing
   - getFoto_produk() = untuk mengambil foto kucing pada versi PHP
   - setRas() = untuk mengubah ras kucing
   - setWarnaBulu() = untuk mengubah warna bulu kucing
   - setBeratBadan() = untuk mengubah berat badan kucing
   - setFoto_produk() = untuk mengubah foto kucing pada versi PHP

## Design Diagram 
  Hewan berperan sebagai parent class yang menyimpan atribut dasar yang dimiliki oleh hewan, seperti nama, umur, dan jenis kelamin. HewanPeliharaan merupakan child dari Hewan sekaligus menjadi parent bagi Kucing. Class ini menambahkan data yang berkaitan dengan hewan peliharaan, seperti ID tag, nama pemilik, dan status vaksin. Sementara Kucing merupakan child class terakhir yang mewarisi atribut dari kedua class sebelumnya dan menambahkan data khusus kucing, seperti ras, warna bulu, dan berat badan.

Note: Diagram ada pada folder dokumentasi

## Alur Program
1. Program dijalankan dan terjadi proses membaca data.txt yang berisi data awal (Note: sudah ada 5 data kucing di awal)
2. Data kucing ditampilkan dalam bentuk tabel yang berisi seluruh atribut
3. Pada menu, user dapat memilih 3 fitur yaitu tampilkan data, tambah data, keluar/exit
4. Ketika user memilih untuk menambahkan data, input digunakan untuk membuat objek kucing baru
5. Objek baru ditambahkan ke dalam daftar data, kemudian terjadi proses menyimpan ke data.txt agar data tambahan tercatat
6. Data yang sudah diperbaharui dapat ditampilkan kembali melalui menu 'Tampilkan Data'
7. Proses dapat dilakukan berulang selama program belum memilih menu 'Keluar/Exit'
