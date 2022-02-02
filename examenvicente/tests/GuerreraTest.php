<?php
use PHPUnit\Framework\TestCase;

class TestGuerra extends TestCase {

    private $warrior;

    public function setUp():void{
        $this->warrior =  new Guerrera("Astrid",10,"viva");
    }

    public function testHerida(){
        $this->assertEquals("muerta",$this->warrior->suspension(0));
    }

    public function testPocion(){
        $this->assertEquals(82,$this->warrior->pesoTotal(70,12));
    }

 
}
