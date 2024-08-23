<?php

include "Validator.php";

$errors = ['name' => '','amount' => '', 'decimal' => ''];
$error = "";

function validateInput($prod,$number,$price,$val_error){
    $doesValidate = true;
    if(!Validator::string($prod,1,25)){
        $val_error['name'] = "Deze produktnaam is niet toegestaan.";
    }

    if(!Validator::integer($number)){
        $val_error['amount'] = "Geef een aantal boven 0 op.";
    }

    if(!Validator::decimal($price)){
        $val_error['decimal'] = "Geeft een valide prijs op.";
    }

    return $val_error;


}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $config = require('config.php');
    $db = new Database($config);
    
    $product = htmlspecialchars($_POST["name"]);
    $amount = (integer)$_POST["number"];
    $price = (float)$_POST["price"];

    $errors = validateInput($product,$amount,$price,$errors);
    

    if(strlen($errors['name']) == 0 && strlen($errors['amount']) == 0 && strlen($errors['decimal']) == 0){

        $statement = "INSERT INTO groceries(`product`, `amount`, `price`) VALUES (:product, :amount, :price) ";
    
        $values =    [ ':product' => $product, 
            ':amount' => $amount, 
            ':price' => $price
        ];
                if ($db -> insertInto($statement,
                    $values)){
                    header('Location: /');
                }else{
            $error = "Toevoegen nieuwe boodschap is mislukt";
            require "views/create.view.php";
        } 
    }else{
        require "views/create.view.php";
    }



}else{
    require "views/create.view.php";
}

