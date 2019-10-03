<?php

class ValidatePassword {

    public $min_length = 2;
    public $max_length = 3;

    public function validLength($password) {

        $passLength = strlen($password);

        return $passLength >=$this->min_length  && $passLength <=$this->max_length
    }
}