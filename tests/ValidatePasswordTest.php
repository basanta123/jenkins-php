<?php
require 'src/ValidatePassword.php';
class ValidatePasswordTest extends \PHPUnit\Framework\TestCase {

    Public function testValidLength() {

        $valPass = new ValidatePassword();

        $this->assertFalse($valPass->validLength('1234'));
    }
}