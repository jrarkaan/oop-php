<?php
    class Produk {
        public static $totalProduk = 100;

        public static function cekProduk(){
            return "Total produk ada".self::$totalProduk;
        }
    }

    echo Produk::cekProduk();