<?php

require_once "Hewan.php";
require_once "HewanPeliharaan.php";
require_once "Kucing.php";

session_start();

if (!isset($_SESSION["daftarKucing"]) || count($_SESSION["daftarKucing"]) == 0) {

    $_SESSION["daftarKucing"] = [

        new Kucing(
            "Mochi",
            2,
            "Betina",
            "KT001",
            "Andina",
            "Sudah",
            "Persia",
            "Putih Abu",
            3.5,
            "images/mochi.jpg"
        ),

        new Kucing(
            "Choco",
            1,
            "Jantan",
            "KT002",
            "Rara",
            "Sudah",
            "Maine Coon",
            "Oren Putih",
            4.2,
            "images/choco.jpg"
        ),

        new Kucing(
            "Luna",
            3,
            "Betina",
            "KT003",
            "Dina",
            "Belum",
            "British Shorthair",
            "Abu Putih",
            3.8,
            "images/luna.jpg"
        ),

        new Kucing(
            "Oreo",
            1,
            "Jantan",
            "KT004",
            "Nabil",
            "Sudah",
            "Scottish Fold",
            "Hitam Putih",
            3.0,
            "images/oreo.jpg"
        ),

        new Kucing(
            "Nala",
            2,
            "Betina",
            "KT005",
            "Salsa",
            "Sudah",
            "Ragdoll",
            "Cream",
            3.6,
            "images/nala.jpg"
        )

    ];
}

?>