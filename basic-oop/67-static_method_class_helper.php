<?php
    class ProdukHelper {
        private $regex = "/^[A-Z]{3}[0-9]{3}$/";

        public function __construct(){
            $this->regex = $this->regex;
        }

        public function cekValidSKU($sku){
            return preg_match("/^[A-Z]{3}[0-9]{3}$/" ,$sku);
        }

    }

    if(ProdukHelper::cekValidSKU("AAA545")){
        echo "Merek AAA545 valid";
    }else{
        echo "tidak valid AA545";
    }