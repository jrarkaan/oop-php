<?php
    class ProdukHelper {
        private static $regex = "/^[A-Z]{3}[0-9]{3}$/";

        public function cekValidSKU($sku){
            return preg_match(self::$regex ,$sku);
        }

    }

    if(ProdukHelper::cekValidSKU("AAA545")){
        echo "Merek AAA545 valid";
    }else{
        echo "tidak valid AA545";
    }