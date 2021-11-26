<?php

use App\Http\Controllers\SalesServer;
use App\Http\Controllers\SellerServer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('seller')->group(function () {
    Route::post('/create', [SellerServer::class, 'store']);
    Route::get('/', [SellerServer::class, 'index']);
    Route::get('/show/{id}', [SellerServer::class, 'show']);
});

Route::prefix('sale')->group(function () {

    Route::post('/create', [SalesServer::class, 'store']);
    Route::get('/show/{id}', [SalesServer::class, 'show']);
});

