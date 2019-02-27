<?php
require_once 'vendor/autoload.php';
$factory = new RandomLib\Factory;
$generator = $factory->getGenerator(new SecurityLib\Strength(SecurityLib\Strength::MEDIUM));
$generator = $factory->getMediumStrengthGenerator();
$bytes = $generator->generate(32);

// Generate a whole number between 5 and 15.
$randomInt = $generator->generateInt(5, 15);

$randomString = $generator->generateString(32, 'abcdef');

print_r($randomInt);
?>