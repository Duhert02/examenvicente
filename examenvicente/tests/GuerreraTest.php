<?php
use PHPUnit\Framework\TestCase;

class TestGuerrera extends TestCase{

    private $op;

    public function setUp():void{
        $this->op = new Guerrera("Astrid" , 30, "viva");
    }

 


}