<?php

use PHPUnit\Framework\TestCase;


class CarTest extends TestCase {
    public function testCarStartsEngine() {
        // Create a mock of the IEngine interface
        $engineMock = $this->createMock(IEngine::class);

        // Expect the start method to be called once
        $engineMock->expects($this->once())
                   ->method('start');

        // Create a Car object with the mock engine
        $car = new Car($engineMock);

        // Call the startEngine method
        $car->startEngine();
    }
}

class V4EngineTest extends TestCase {
    public function testV4EngineStart() {
        $this->expectOutputString('V4 Engine started!');
        $engine = new V4Engine();
        $engine->start();
    }
}

class V6EngineTest extends TestCase {
    public function testV6EngineStart() {
        $this->expectOutputString('V6 Engine started!');
        $engine = new V6Engine();
        $engine->start();
    }
}

class V8EngineTest extends TestCase {
    public function testV8EngineStart() {
        $this->expectOutputString('V8 Engine started!');
        $engine = new V8Engine();
        $engine->start();
    }
}