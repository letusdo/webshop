<?php
require_once __DIR__ . '/vendor/autoload.php';

$side = isset($argv[1]) ? $argv[1] : null;

if (isset($side) && ctype_digit($side)) {
    Shapes\Square::area($side);
}
else {
    echo "Please provide a valid size!\n";
}