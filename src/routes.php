<?php

use Opqclick\Calculator\CalculatorController;

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});

Route::get('/calculator/add/{a}/{b}', [CalculatorController::class, 'add']);

Route::get('/calculator/subtract/{a}/{b}', [CalculatorController::class, 'subtract']);
