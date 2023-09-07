<?php

include('inc/autoloader.inc.php');

function runApp()
{
    function readConsoleInput()
    {
        echo "Enter a command (e.g., 'mops sound', 'shiba-inu hunt', 'exit' to quit): ";
        return trim(fgets(STDIN));
    }

    while (true) {
        $command = readConsoleInput();

        if ($command === 'exit') {
            break;
        }

        $result = DogInteface::runCommand($command);

        echo $result . PHP_EOL;
    }
}

runApp();
