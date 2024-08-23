<?php

class Validator {

    public static function string($value, $min=1, $max=INF){

        trim($value);

        return (strlen($value) >= $min && strlen($value) <= $max);
    }

    public static function integer($value, $min = 0){

        return (is_int($value) && $value > $min);

    }

    public static function decimal($value, $min = 1, $max = 2){
        sscanf($value, '%d.%d', $whole, $fraction);
    
        return filter_var($value,FILTER_VALIDATE_FLOAT) && (strlen((string)$fraction) >= $min && strlen((string)$fraction) <= $max );
    }
}