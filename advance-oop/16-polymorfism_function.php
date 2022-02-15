<?php
    abstract class Produk{
        abstract public function cekMerek();
    }

    class Televisi extends Produk{
        public function cekMerek()
        {
            // TODO: Implement cekMerek() method.
            return "Samsung";
        }
    }

    class MesinCuci extends Produk{
        public function cekMerek()
        {
            // TODO: Implement cekMerek() method.
            return "Sharp";
        }
    }

    class LemariEs extends Produk{
        public function cekMerek()
        {
            // TODO: Implement cekMerek() method.
            return "Apa ajadah";
        }
    }

    function tampilkanMerek($objectProduct){
        return $objectProduct->cekMerek();
    }

    $product01 = new Televisi();
    $product02 = new MesinCuci();
    $product03 = new LemariEs();

    echo tampilkanMerek($product01);
    echo tampilkanMerek($product02);
    echo tampilkanMerek($product03);

    // terakhir belajar oop pada e-book adlaah halaman 109;