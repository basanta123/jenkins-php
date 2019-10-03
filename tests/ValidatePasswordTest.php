<?php
require 'src/ValidatePassword.php';
class ValidatePasswordTest extends \PHPUnit\Framework\TestCase {

    Public function testValidLength() {

        $valPass = new ValidatePassword();
        
        /* length validation */
        
        $this->assertFalse($valPass->validLength('1234'));
    }
}