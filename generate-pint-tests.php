<?php
/**
 * Regenerates pint-tests.json from pint.json.
 *
 * Pint's `extend` option only supports one level: since consuming projects
 * extend pint-tests.json, it cannot itself extend pint.json and must contain
 * the full rule set. Run this script after editing pint.json:
 *
 *     php generate-pint-tests.php
 */

declare(strict_types=1);

// Rules that differ for tests (each entry fully replaces the base rule).
$overrides = [
    'modifier_keywords' => [
        'elements' => ['property', 'const'],
    ],
];

$config = json_decode(file_get_contents(__DIR__ . '/pint.json'), true, flags: JSON_THROW_ON_ERROR);

$config['in'] = ['tests'];
foreach ($overrides as $rule => $value) {
    $config['rules'][$rule] = $value;
}

file_put_contents(
    __DIR__ . '/pint-tests.json',
    json_encode($config, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR) . "\n",
);

echo "pint-tests.json regenerated\n";
