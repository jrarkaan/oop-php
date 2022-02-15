<?php
    class Produk{
        private $totalProduk = 0;

        public function __construct(){
            $this->totalProduk++;
            echo "Class Produk telah dibuat, maka totalnya = ".$this->totalProduk."\n";
        }
    }

    $produk01 = new Produk();
    $produk02 = new Produk();
    $produk03 = new Produk();