<?php

use PHPUnit\Framework\TestCase;

include('inc/autoloader.inc.php');

class DogTest extends TestCase
{

    public function testMakeSound()
    {
        $shibaInu = new Dog('shiba-inu', true, true);
        $this->assertEquals('woof-woof', $shibaInu->getSound());

        $plushLabrador = new Dog('plush-labrador', false, false);
        $this->assertEquals('squick-squick', $plushLabrador->getSound());
    }

    public function testGetBreed()
    {
        $mops = new Dog('mops', true, false);
        $shibaInu = new Dog('shiba-inu', true, true);

        $this->assertEquals('mops', $mops->getBreed());
        $this->assertEquals('shiba-inu', $shibaInu->getBreed());
    }

    public function testHunt()
    {
        $shibaInu = new Dog('shiba-inu', true, true);
        $this->assertEquals('On a hunt', $shibaInu->hunt());
    }
}
