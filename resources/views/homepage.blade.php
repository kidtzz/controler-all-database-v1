<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<body>
    @extends('layouts.app')
</body>

</html>




<!-- 
step by step noted
------------------
model
-----
php artisan make:model Product
class Product extends Model
{
protected $fillable = ['name', 'price'];
}

controller
php artisan make:controller TrackController --resource

route
Route::get('/', fn() => redirect()->route('products.index'));
Route::resource('products', ProductController::class);

view
resources/views/layout.blade.php
resources/views/products/index.blade.php
resources/views/products/create.blade.php
resources/views/products/edit.blade.php

@extends('layout') -->