<?php

declare(strict_types=1);

use App\Controllers\HomeController;
use App\Controllers\InvoiceController;
use App\Controllers\ProjectController;
use Slim\App;

return function (App $app){
    $app->get('/', [HomeController::class, 'index']);
    $app->get('/invoices', [InvoiceController::class, 'index']);
    $app->get('/descendants', [ProjectController::class, 'index']);
    $app->get('/save', [ProjectController::class, 'save']);
};