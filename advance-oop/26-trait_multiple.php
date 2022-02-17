<?php
    trait SmartElectronic {
        public function cekOS(){
            return "Android 9.0 (Pie)";
        }
    }

    trait LowWatt {
        public function efisiensi(){
            return "Konsumsi data 0.8";
        }
    }

    class SmartTV {
        use SmartElectronic, LowWatt;
        public function cekInfo(){
            return "Smart TV ".$this->cekOS()." - ".$this->efisiensi();
        }
    }

    $produk01 = new SmartTV;
    echo $produk01->cekInfo();