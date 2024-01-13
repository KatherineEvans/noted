<?php
 
require __DIR__ . '/vendor/autoload.php';
 
return function () {
    dump(artisan('migrate'));
    return artisan('migrate');
};