<?php
    abstract class Produk{
        private $stock = 200;

        abstract public function cekHarga();
        public function cekStok(){
            return $this->stock."\n";
        }
    }

    class Televisi extends Produk {
        public function cekHarga(){
            return 3000000;
        }
    }

    $produk01 = new Televisi();
    echo $produk01->cekHarga();
    echo $produk01->cekStok();