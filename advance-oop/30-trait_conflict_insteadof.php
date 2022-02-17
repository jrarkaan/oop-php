<?php

    trait SmartElectronic {
        public function efesiensi(){
            return "Konsumsi daya 1.1";
        }
    }

    trait LowWatt {
        public function efesiensi(){
            return "Konsumsi daya 0.8";
        }
    }

    class SmartTV {
        use SmartElectronic, LowWatt{
            SmartElectronic::efesiensi insteadof LowWatt;
        }
    }

    $produk01 = new SmartTV();
    echo $produk01->efesiensi();