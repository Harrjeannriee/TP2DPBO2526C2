<?php

require_once "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Nama = $_POST["Nama"];
    $Umur = $_POST["Umur"];
    $JenisKelamin = $_POST["JenisKelamin"];

    $idTag = $_POST["idTag"];
    $NamaPemilik = $_POST["NamaPemilik"];
    $StatusVaksin = $_POST["StatusVaksin"];

    $Ras = $_POST["Ras"];
    $WarnaBulu = $_POST["WarnaBulu"];
    $BeratBadan = $_POST["BeratBadan"];

    $folder = "images/";

    $namaFoto = basename($_FILES["foto_produk"]["name"]);
    $lokasiFoto = $folder . $namaFoto;

    move_uploaded_file(
        $_FILES["foto_produk"]["tmp_name"],
        $lokasiFoto
    );

    $kucingBaru = new Kucing(
        $Nama,
        $Umur,
        $JenisKelamin,
        $idTag,
        $NamaPemilik,
        $StatusVaksin,
        $Ras,
        $WarnaBulu,
        $BeratBadan,
        $lokasiFoto
    );

    $_SESSION["daftarKucing"][] = $kucingBaru;

    header("Location: show.php");
    exit;
}

?>

<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        Tambah Kucing - Cat Comfort
    </title>

    <link
        rel="stylesheet"
        href="style.css">

</head>


<body>


    <!-- NAVBAR -->

    <nav class="navbar">

        <a
            href="index.php"
            class="logo">
            🐾 Cat Comfort
        </a>


        <div class="nav-menu">

            <a href="index.php">
                Home
            </a>

            <a href="show.php">
                Daftar Kucing
            </a>

            <a
                href="add.php"
                class="nav-button">
                + Tambah Kucing
            </a>

        </div>

    </nav>



    <!-- FORM -->

    <section class="form-section">


        <div class="page-heading">

            <p class="subtitle">
                CAT COMFORT
            </p>

            <h1>
                Yuk, Titipkan Kucing Anda
            </h1>

            <p>
                Isi data kucing yang akan dititipkan
                atau dirawat di Cat Comfort.
            </p>

        </div>



        <form
            action="add.php"
            method="POST"
            enctype="multipart/form-data"
            class="cat-form">


            <!-- DATA KUCING -->

            <div class="form-card">

                <h2>
                    Data Kucing
                </h2>


                <label>
                    Nama Kucing
                </label>

                <input
                    type="text"
                    name="Nama"
                    placeholder="Contoh: Mochi"
                    required>



                <label>
                    Umur
                </label>

                <input
                    type="number"
                    name="Umur"
                    placeholder="Contoh: 2"
                    min="0"
                    required>



                <label>
                    Jenis Kelamin
                </label>

                <select
                    name="JenisKelamin"
                    required>

                    <option value="">
                        Pilih jenis kelamin
                    </option>

                    <option value="Jantan">
                        Jantan
                    </option>

                    <option value="Betina">
                        Betina
                    </option>

                </select>



                <label>
                    Ras
                </label>

                <input
                    type="text"
                    name="Ras"
                    placeholder="Contoh: Persia"
                    required>



                <label>
                    Warna Bulu
                </label>

                <input
                    type="text"
                    name="WarnaBulu"
                    placeholder="Contoh: Putih"
                    required>



                <label>
                    Berat Badan (kg)
                </label>

                <input
                    type="number"
                    name="BeratBadan"
                    placeholder="Contoh: 3.5"
                    step="0.1"
                    min="0"
                    required>

            </div>



            <!-- DATA PEMILIK -->

            <div class="form-card">

                <h2>
                    Informasi Penitipan
                </h2>


                <label>
                    ID Tag
                </label>

                <input
                    type="text"
                    name="idTag"
                    placeholder="Contoh: CAT006"
                    required>



                <label>
                    Nama Pemilik
                </label>

                <input
                    type="text"
                    name="NamaPemilik"
                    placeholder="Masukkan nama pemilik"
                    required>



                <label>
                    Status Vaksin
                </label>

                <select
                    name="StatusVaksin"
                    required>

                    <option value="">
                        Pilih status vaksin
                    </option>

                    <option value="Sudah">
                        Sudah
                    </option>

                    <option value="Belum">
                        Belum
                    </option>

                </select>



                <label>
                    Foto Kucing
                </label>

                <input
                    type="file"
                    name="foto_produk"
                    accept="image/*"
                    required>



                <button
                    type="submit"
                    class="button submit-button">
                    Simpan Data
                </button>

            </div>

        </form>

    </section>



    <!-- FOOTER -->

    <footer>

        <h2>
            Cat Comfort
        </h2>

        <p>
            Pet Care & Cat Boarding
        </p>

        <p>
            Developed by Andina · 2026
        </p>

        <p>
            © 2026 Cat Comfort. All rights reserved.
        </p>

    </footer>


</body>

</html>