<?php
    abstract class Produk{
        abstract public function cekHarga();
    }

    abstract class Televisi extends Produk{
        abstract public function cekTipe();
    }

    class TelevisiLED extends Televisi{
        public function cekHarga()
        {
            return "Harga TV LED-nya sebesar Rp.1.000.000";
        }
        public function cekTipe()
        {
            return "TV LED";
        }
    }

    $product01 = new TelevisiLED();
    echo $product01->cekHarga()."\n";
    echo $product01->cekTipe()."\n";