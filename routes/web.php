<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Scraps\ScrapList::class);
Route::get('/presigned-url', App\Livewire\Aws\PresignedUrl::class);
Route::get('/s3', App\Livewire\Aws\S3IamRoleTest::class);
Route::get('/ses', App\Livewire\Aws\SesTest::class);
