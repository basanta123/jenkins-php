<?php
require 'src/ValidatePassword.php';
class ValidatePasswordTest extends \PHPUnit\Framework\TestCase {

    Public function testValidLength() {

        $valPass = new ValidatePassword();
        
        /* length validation */
        /* Test*/
        $this->assertFalse($valPass->validLength('1234'));
    }
}