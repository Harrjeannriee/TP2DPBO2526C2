<?php

require_once "session.php";

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cat Comfort</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">

        <a href="index.php" class="logo">
            🐾 Cat Comfort
        </a>

        <div class="nav-menu">

            <a href="show.php">
                Daftar Kucing
            </a>

            <a href="add.php" class="nav-button">
                + Tambah Kucing
            </a>

        </div>

    </nav>


    <!-- HERO -->
    <section class="hero">

        <div class="hero-text">

            <p class="subtitle">
                WELCOME TO
            </p>

            <h1>
                Cat Comfort
            </h1>

            <h2>
                Tempat nyaman untuk setiap kucing kesayangan.
            </h2>

            <p>
                Cat Comfort membantu mencatat dan mengelola
                data kucing yang sedang dititipkan dan dirawat.
            </p>

            <a href="show.php" class="button">
                Lihat Daftar Kucing →
            </a>

        </div>


        <div class="hero-image">
            <img
                src="images/Hero.png"
                alt="Cute Cat"
                style="width: 600px !important; max-width: 600px !important; height: auto !important; flex: none !important;">
        </div>

    </section>


    <!-- FITUR -->
    <section class="features">

        <div class="feature-card">

            <div class="feature-icon">
                🐾
            </div>

            <h3>
                Penitipan Nyaman
            </h3>

            <p>
                Tempat aman dan nyaman
                untuk kucing kesayanganmu.
            </p>

        </div>


        <div class="feature-card">

            <div class="feature-icon">
                ♡
            </div>

            <h3>
                Perawatan Terpercaya
            </h3>

            <p>
                Data kucing tercatat
                dengan rapi.
            </p>

        </div>


        <div class="feature-card">

            <div class="feature-icon">
                💉
            </div>

            <h3>
                Status Vaksin
            </h3>

            <p>
                Informasi vaksin kucing
                tersimpan dengan lengkap.
            </p>

        </div>


        <div class="feature-card">

            <div class="feature-icon">
                🐱
            </div>

            <h3>
                Data Lengkap
            </h3>

            <p>
                Seluruh informasi kucing
                dapat dilihat dengan mudah.
            </p>

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