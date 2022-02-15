<?php

    class Produk{
        private static $totalProduk = 100;

        public static function cekProduk(){
            return "Total produk yang ada ".self::$totalProduk;
        }
    }

    class Blender extends Produk{
        public function cekBlender(){
            return self::cekProduk().", termasuk 3 jenis Blender"."\n";
        }
    }

    class HairDryer extends Produk{
        public function cekHairDryer(){
            return parent::cekProduk().", termasuk 5 jenis Hair Dryer"."\n";
        }
    }

    class Mixer extends Produk{
        public function cekMixer(){
            return Produk::cekProduk().", termasuk 2 jenis Mixer"."\n";
        }
    }

    $produk01 = new Blender();
    echo $produk01->cekBlender();

    $produk02 = new HairDryer();
    echo $produk02->cekHairDryer();

    $produk03 = new Mixer();
    echo $produk03->cekMixer();