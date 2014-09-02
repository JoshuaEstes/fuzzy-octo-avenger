#!/usr/bin/env php
<?php
/**
 * Generates files used for benchmark testing
 */
require_once __DIR__ . '/../../vendor/autoload.php';

$faker = \Faker\Factory::create();

$factory = array(
    array('compare', 'gmp_cmp'),
    array('divide', 'gmp_div'),
    array('modulus', 'gmp_mod'),
    array('inverse', 'gmp_invert'),
    array('multiply', 'gmp_mul'),
    array('add', 'gmp_add'),
    array('subtract', 'gmp_sub'),
);

foreach ($factory as $make) {
    $lines = array(
        '<?php',
        'return array('
    );
    for ($i = 0; $i < 1000; $i++) {
        $a = $faker->numerify(str_repeat('#', 15));
        $b = $faker->numerify(str_repeat('#', 15));
        $c = gmp_strval($make[1]($a, $b));
        if (substr($a, 0, 1) == 0 || substr($b, 0, 1) == 0) {
            continue;
        }
        $lines[] = sprintf('array("%s", "%s", "%s"),', $a, $b, $c);
    }
    $lines[] = ');';
    file_put_contents(__DIR__ . '/' . $make[0] . '.php', implode("\n", $lines));
}
