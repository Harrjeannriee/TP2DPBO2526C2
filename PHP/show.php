<?php

require_once "session.php";

$dataKucing = $_SESSION["daftarKucing"];

?>

<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Daftar Kucing - Cat Comfort</title>

    <link rel="stylesheet" href="style.css">

</head>


<body>


    <!-- NAVBAR -->

    <nav class="navbar">

        <a href="index.php" class="logo">
            🐾 Cat Comfort
        </a>


        <div class="nav-menu">

            <a href="index.php">
                Home
            </a>

            <a href="show.php">
                Daftar Kucing
            </a>

            <a href="add.php" class="nav-button">
                + Tambah Kucing
            </a>

        </div>

    </nav>



    <!-- CONTENT -->

    <section class="table-section">


        <!-- JUDUL -->

        <div class="page-heading">

            <p class="subtitle">
                CAT COMFORT
            </p>

            <h1>
                Daftar Kucing Yang Dititipkan
            </h1>

            <p>
                Berikut adalah data kucing yang
                terdaftar di Cat Comfort.
            </p>

        </div>



        <!-- TABEL -->

        <div class="table-container">

            <table>


                <!-- HEADER -->

                <thead>

                    <tr>

                        <th>No</th>

                        <th>Foto</th>


                        <!-- HEWAN -->

                        <th>Nama</th>

                        <th>Umur</th>

                        <th>Jenis Kelamin</th>


                        <!-- HEWAN PELIHARAAN -->

                        <th>ID Tag</th>

                        <th>Nama Pemilik</th>

                        <th>Status Vaksin</th>


                        <!-- KUCING -->

                        <th>Ras</th>

                        <th>Warna Bulu</th>

                        <th>Berat Badan</th>

                    </tr>

                </thead>



                <!-- DATA -->

                <tbody>


                    <?php if (count($dataKucing) > 0): ?>


                        <?php $no = 1; ?>


                        <?php foreach ($dataKucing as $kucing): ?>


                            <tr>


                                <!-- NOMOR -->

                                <td>
                                    <?= $no++ ?>
                                </td>



                                <!-- FOTO -->

                                <td>


                                    <?php

                                    $foto =
                                        $kucing->getFoto_produk();

                                    ?>


                                    <?php if (
                                        !empty($foto) &&
                                        file_exists($foto)
                                    ): ?>


                                        <img
                                            src="<?= htmlspecialchars($foto) ?>"
                                            alt="Foto Kucing"
                                            class="cat-photo">


                                    <?php else: ?>


                                        <span class="no-photo">
                                            🐱
                                        </span>


                                    <?php endif; ?>


                                </td>



                                <!-- HEWAN -->

                                <td>

                                    <?= htmlspecialchars(
                                        $kucing->getNama()
                                    ) ?>

                                </td>



                                <td>

                                    <?= htmlspecialchars(
                                        $kucing->getUmur()
                                    ) ?>

                                    tahun

                                </td>



                                <td>

                                    <?= htmlspecialchars(
                                        $kucing->getJenisKelamin()
                                    ) ?>

                                </td>



                                <!-- HEWAN PELIHARAAN -->

                                <td>

                                    <?= htmlspecialchars(
                                        $kucing->getIdTag()
                                    ) ?>

                                </td>



                                <td>

                                    <?= htmlspecialchars(
                                        $kucing->getNamaPemilik()
                                    ) ?>

                                </td>



                                <td>


                                    <?php if (
                                        $kucing->getStatusVaksin()
                                        == "Sudah"
                                    ): ?>


                                        <span
                                            class="status vaccinated">

                                            Sudah

                                        </span>


                                    <?php else: ?>


                                        <span
                                            class="status not-vaccinated">

                                            Belum

                                        </span>


                                    <?php endif; ?>


                                </td>



                                <!-- KUCING -->

                                <td>

                                    <?= htmlspecialchars(
                                        $kucing->getRas()
                                    ) ?>

                                </td>



                                <td>

                                    <?= htmlspecialchars(
                                        $kucing->getWarnaBulu()
                                    ) ?>

                                </td>



                                <td>

                                    <?= htmlspecialchars(
                                        $kucing->getBeratBadan()
                                    ) ?>

                                    kg

                                </td>


                            </tr>


                        <?php endforeach; ?>


                    <?php else: ?>


                        <!-- KALAU DATA KOSONG -->

                        <tr>

                            <td
                                colspan="11"
                                class="empty-data">

                                Belum ada data kucing.

                                <br>

                                <a href="add.php">
                                    + Tambahkan data kucing
                                </a>

                            </td>

                        </tr>


                    <?php endif; ?>


                </tbody>


            </table>

        </div>


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