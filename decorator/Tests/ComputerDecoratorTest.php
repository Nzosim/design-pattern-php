<?php

namespace Test;

use PHPUnit\Framework\TestCase;

use App\Laptop;
use App\GPU;
use App\OLEDScreen;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();
        
        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptop = new Laptop();
        $laptopWithGPU = new GPU($laptop);
        
        $this->assertSame(850, $laptopWithGPU->getPrice());
        $this->assertSame("A laptop computer, GPU", $laptopWithGPU->getDescription());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop = new Laptop();
        $laptopWithOLEDScreen = new OLEDScreen($laptop);
        
        $this->assertSame(700, $laptopWithOLEDScreen->getPrice());
        $this->assertSame("A laptop computer, OLED Screen", $laptopWithOLEDScreen->getDescription());
    }

    public function testOledGPU() {
        $laptop = new Laptop();
        $laptopWithGPU = new GPU($laptop);
        $laptopWithOLEDScreen = new OLEDScreen($laptopWithGPU);
        
        $this->assertSame(1150, $laptopWithOLEDScreen->getPrice());
        $this->assertSame("A laptop computer, GPU, OLED Screen", $laptopWithOLEDScreen->getDescription());
    }
}