<?php
use PHPUnit\Framework\TestCase;

class TestGuerrera extends TestCase{

    private $op;

    public function setUp():void{
        $this->op = new Guerrera();
    }

    public function testHerida(){
        $this->assertEquals(20,$this->op->herida(30,10));
    }

    public function testPocion(){
        $this->assertEquals(20,$this->op->pocion(10,10));
    }

    public function testPocionMuerta(){
        $this->assertEquals(10,$this->op->pocion(0,10));
    }

    public function testMuerte(){
        $this->assertEquals(-5,$this->op->herida(5,10));
    }

}


}
