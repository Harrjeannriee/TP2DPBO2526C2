import java.io.*;
import java.util.ArrayList;
import java.util.Scanner;

// Class Kucing
public class Kucing extends HewanPeliharaan {
    private String Ras;
    private String WarnaBulu;
    private float BeratBadan;

    public Kucing(String Nama, int Umur, String JenisKelamin, String idTag, String NamaPemilik, String StatusVaksin,
            String Ras, String WarnaBulu, float BeratBadan) {
        // call parent class atribute
        super(Nama, Umur, JenisKelamin, idTag, NamaPemilik, StatusVaksin);
        this.Ras = Ras;
        this.WarnaBulu = WarnaBulu;
        this.BeratBadan = BeratBadan;
    }

    // Getter
    public String getRas() {
        return Ras;
    }

    public String getWarnaBulu() {
        return WarnaBulu;
    }

    public float getBeratBadan() {
        return BeratBadan;
    }

    // Setter
    public void setRas(String Ras) {
        this.Ras = Ras;
    }

    public void setWarnaBulu(String WarnaBulu) {
        this.WarnaBulu = WarnaBulu;
    }

    public void setBeratBadan(float BeratBadan) {
        this.BeratBadan = BeratBadan;
    }

    // Read data.txt
    public static ArrayList<Kucing> bacaData() {
        // menyiapkan tempat untuk menampung banyak objek kucing
        ArrayList<Kucing> daftarKucing = new ArrayList<>();

        try {
            BufferedReader file = new BufferedReader(
                    new FileReader("data.txt"));

            String baris;

            // baca file baris demi baris selama masih ada baris
            while ((baris = file.readLine()) != null) {
                // pisahkan string setiap ketemu |
                String[] data = baris.split("\\|");

                // data dari file txt diubah kembali menjadi objek kucing dan dimasukkan ke
                // array list
                Kucing kucingBaru = new Kucing(
                        data[0],
                        Integer.parseInt(data[1]),
                        data[2],
                        data[3],
                        data[4],
                        data[5],
                        data[6],
                        data[7],
                        Float.parseFloat(data[8]));

                daftarKucing.add(kucingBaru);
            }

            file.close();
        } catch (IOException e) {
            System.out.println("Terjadi kesalahan saat membaca data!");
        }

        return daftarKucing;
    }

    // Simpan ke data.txt
    public static void simpanData(Kucing kucing) {
        try {
            FileWriter file = new FileWriter("data.txt", true);

            // ambil atribut dan susun pakai |
            file.write(
                    kucing.getNama() + "|" +
                            kucing.getUmur() + "|" +
                            kucing.getJenisKelamin() + "|" +
                            kucing.getIdTag() + "|" +
                            kucing.getNamaPemilik() + "|" +
                            kucing.getStatusVaksin() + "|" +
                            kucing.getRas() + "|" +
                            kucing.getWarnaBulu() + "|" +
                            kucing.getBeratBadan() +
                            System.lineSeparator());
            file.close();
        } catch (IOException e) {
            System.out.println("Terjadi kesalahan saat menyimpan data!");
        }
    }

    // Tambah data
    public static void tambahData(ArrayList<Kucing> daftarKucing, Scanner input) {
        System.out.println("------------------------------");
        System.out.println("|     TAMBAH DATA KUCING     |");
        System.out.println("------------------------------");

        System.out.print("Nama Kucing     : ");
        String Nama = input.nextLine();

        System.out.print("Umur Kucing     : ");
        int Umur = Integer.parseInt(input.nextLine());

        System.out.print("Jenis Kelamin   : ");
        String JenisKelamin = input.nextLine();

        System.out.print("ID Tag Kucing   : ");
        String idTag = input.nextLine();

        System.out.print("Nama Pemilik    : ");
        String NamaPemilik = input.nextLine();

        System.out.print("Status Vaksin   : ");
        String StatusVaksin = input.nextLine();

        System.out.print("Ras Kucing      : ");
        String Ras = input.nextLine();

        System.out.print("Warna Bulu      : ");
        String WarnaBulu = input.nextLine();

        System.out.print("Berat Badan     : ");
        float BeratBadan = Float.parseFloat(input.nextLine());

        Kucing kucingBaru = new Kucing(
                Nama, Umur, JenisKelamin, idTag, NamaPemilik, StatusVaksin, Ras, WarnaBulu, BeratBadan);

        daftarKucing.add(kucingBaru);

        simpanData(kucingBaru);

        System.out.println("\nData kucing berhasil ditambahkan!");
    }

    // Tampilkan Data
    public static void tampilkanData(ArrayList<Kucing> daftarKucing) {
        if (daftarKucing.isEmpty()) {
            System.out.println("\nBelum ada data kucing...");
            return;
        }

        String[] header = {
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

        // Menyimpan semua data dalam bentuk String
        ArrayList<String[]> rows = new ArrayList<>();

        for (Kucing kucing : daftarKucing) {
            rows.add(new String[] {
                    kucing.getNama(),
                    String.valueOf(kucing.getUmur()),
                    kucing.getJenisKelamin(),
                    kucing.getIdTag(),
                    kucing.getNamaPemilik(),
                    kucing.getStatusVaksin(),
                    kucing.getRas(),
                    kucing.getWarnaBulu(),
                    String.valueOf(kucing.getBeratBadan())
            });
        }

        // Menentukan lebar setiap kolom
        int[] lebar = new int[header.length];

        for (int i = 0; i < header.length; i++) {
            // Awalnya panjang kolom mengikuti header
            lebar[i] = header[i].length();

            // Bandingkan dengan semua data
            for (String[] row : rows) {
                if (row[i].length() > lebar[i]) {
                    lebar[i] = row[i].length();
                }
            }

            // Tambahkan spasi kiri dan kanan
            lebar[i] += 2;
        }

        // Membuat garis tabel
        String garis = "+";

        for (int panjang : lebar) {
            garis += "-".repeat(panjang) + "+";
        }

        // Cetak garis atas
        System.out.println(garis);

        // Cetak header
        System.out.print("|");

        for (int i = 0; i < header.length; i++) {
            System.out.printf(" %-" + (lebar[i] - 1) + "s|", header[i]);
        }

        System.out.println();

        // Garis setelah header
        System.out.println(garis);

        // Cetak isi tabel
        for (String[] row : rows) {
            System.out.print("|");

            for (int i = 0; i < row.length; i++) {
                System.out.printf(" %-" + (lebar[i] - 1) + "s|", row[i]);
            }

            System.out.println();
            System.out.println(garis);
        }
    }

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        // Membaca data awal dari data.txt
        ArrayList<Kucing> daftarKucing = bacaData();

        while (true) {
            System.out.println("\n================================");
            System.out.println("            PET SHOP");
            System.out.println("================================");
            System.out.println("1. Tampilkan Data");
            System.out.println("2. Tambah Data");
            System.out.println("3. Keluar");
            System.out.println("================================");

            System.out.print("Pilih menu : ");
            String pilihan = input.nextLine();

            if (pilihan.equals("1")) {
                tampilkanData(daftarKucing);
            } else if (pilihan.equals("2")) {
                tambahData(daftarKucing, input);
            } else if (pilihan.equals("3")) {
                System.out.println("\nProgram selesai.");
                break;
            } else {
                System.out.println("\nPilihan tidak valid!");
            }
        }

        input.close();
    }
}
