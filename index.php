<?php

include 'bootstrap.php';


use Util\RotasUtil;
use Validator\RequestValidator;

try {
    $RequestValidator = new RequestValidator(RotasUtil::getRotas());
    $retorno = $RequestValidator->processarRequest();

}catch (Exception $exception) {
    echo $exception-> getMessage();
}
var_dump($retorno);