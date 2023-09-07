<?php
class Dog
{
    private $breed;
    private $canMakeSound;
    private $canHunt;

    public function __construct($breed, $sound, $canHunt)
    {
        $this->breed = $breed;
        $this->canMakeSound = $sound;
        $this->canHunt = $canHunt;
    }

    public function getBreed()
    {
        return $this->breed;
    }

    public function getSound()
    {
        return ($this->canMakeSound) ? 'woof-woof' : 'squick-squick';
    }

    public  function hunt()
    {
        return ($this->canHunt) ? 'On a hunt' : 'Cant hunt';
    }
}
