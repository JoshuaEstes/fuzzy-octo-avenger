<?php

require_once __DIR__ . '/../vendor/autoload.php';

printf("PHP_INT_SIZE: %s bytes\n", PHP_INT_SIZE);
printf("PHP_INT_MAX:  %s\n\n", PHP_INT_MAX);

$stopwatch    = new \Symfony\Component\Stopwatch\Stopwatch();
$context      = '\Bitpay\PrecisionMath\NativeStrategy';

$benchmarkTestFactory = array(
    array(__DIR__ . '/data/compare.php',  'compare'),
    array(__DIR__ . '/data/divide.php',   'divide'),
    array(__DIR__ . '/data/modulus.php',  'modulus'),
    array(__DIR__ . '/data/inverse.php',  'inverse'),
    array(__DIR__ . '/data/multiply.php', 'multiply'),
    array(__DIR__ . '/data/add.php',      'add'),
    array(__DIR__ . '/data/subtract.php', 'subtract'),
);

foreach ($benchmarkTestFactory as $factory) {
    printf("Parsing '%s'\n", $factory[0]);
    $data = require_once $factory[0];
    $method = $factory[1];
    $stopwatch->start($method, 'native');
    foreach ($data as $datum) {
        $result = $context::$method($datum[0], $datum[1]);
        if ($result != $datum[2]) {
            //printf("ERROR: %s %s %s != %s\n", $datum[0], $method, $datum[1], $datum[2]);
            //printf("\tResult: %s\n", $result);
        }
        $stopwatch->lap($method);
    }
    $eventName  = $method . 'Event';
    $$eventName = $stopwatch->stop($method);
}

$totals = array(
    'periods'  => 0,
    'duration' => 0,
);

foreach ($benchmarkTestFactory as $factory) {
    $eventName = $factory[1] . 'Event';
    $totals['periods']  += $periods  = count($$eventName->getPeriods());
    $totals['duration'] += $duration = $$eventName->getDuration();
    printf("%s Benchmarks:\n", ucfirst($factory[1]));
    printf("\tPeriods:  %s\n", $periods);
    printf("\tDuration: %s msec\n\n", $duration);
}

printf("Totals:\n");
printf("\tPeriods: %s\n", $totals['periods']);
printf("\tDuration: %s msec\n\n", $totals['duration']);
