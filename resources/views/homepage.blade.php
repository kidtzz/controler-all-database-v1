<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container p-4">
    <h5 class="mb-4">APP TESTING DB</h5>
    @yield('content')

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
-->