<?php

use soham\Inspire\Controllers;
use Illuminate\Support\Facades\Route;
use soham\Inspire\Controllers\InspirationController;

Route::get('inspire', InspirationController::class);