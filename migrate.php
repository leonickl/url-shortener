<?php

require __DIR__.'/vendor/autoload.php';

$db = \PXP\Core\Lib\DB::init();

$db->create('urls', [
    'long' => 'text not null',
    'short' => 'text not null',
]);
