<?php
class DogInteface
{
    public static function runCommand($command)
    {
        $parts  = explode(' ', $command);

        if (count($parts) !== 2) {
            return 'Invalid command';
        }

        $breed = strtolower($parts[0]);
        $action = strtolower($parts[1]);

        switch ($breed) {
            case 'shiba-inu';
                $dog = new Dog('Shiba Inu', true, true);
                break;
            case 'mops':
                $dog = new Dog('Mops', true, false);
                break;
            case 'taxa':
                $dog = new Dog('Taxa', true, true);
                break;
            case 'plush-labrador':
                $dog = new Dog('Plush Labrador', false, false);
                break;
            case 'rubber-taxa':
                $dog = new Dog('Rubber Taxa', false, false);
                break;
            default:
                return "Unknown breed.";
        }

        if ($action === 'sound') {
            return $dog->getSound();
        } elseif ($action === 'hunt') {
            return $dog->hunt();
        } else {
            return "Unknown action. Use 'sound' or 'hunt'.";
        }
    }
}
