<?php
    class Produk {
        private static $totalProduk = 1;

        public function __construct(){
            self::$totalProduk++;
            echo "Class Produk telah berhasil dibuat, total: ".self::$totalProduk."\n";
        }
    }

    $produk01 = new Produk();
    $produk02 = new Produk();
    $produk03 = new Produk();