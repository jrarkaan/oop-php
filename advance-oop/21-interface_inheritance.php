<?php
    interface ProdukEkspor {
        public function cekHargaUSD();
        public function cekNegara();
    }

    interface ProdukMakanan{
        public function cekExpired();
    }

    interface ProdukMakananBeku extends ProdukMakanan {
        public function cekExpired();
        public function cekSuhuMin();
    }

    class Nugget implements ProdukEkspor, ProdukMakananBeku {
        public function cekHargaUSD()
        {
            // TODO: Implement cekHargaUSD() method.
            return 7.5;
        }

        public function cekNegara()
        {
            // TODO: Implement cekNegara() method.
            return ["Indonesia", "USA"];
        }

        public function cekSuhuMin()
        {
            // TODO: Implement cekSuhuMin() method.
            return -14;
        }

        public function cekExpired()
        {
            // TODO: Implement cekExpired() method.
            return "21-04-2021";
        }

    }

    $produk01 = new Nugget();

    echo $produk01->cekHargaUSD();