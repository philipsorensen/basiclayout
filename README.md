This is a basic layout package. 

## Installation

> composer require philipsorensen/basiclayout

Add the following to config/app.php under 'providers':

> PhilipSorensen\BasicLayout\Providers\BasicLayoutProvider::class,

Run

> php artisan vendor:publish --tag=layout-assets

This moves files into the public and ressources folders. 

Use the basic layout in your view files with like this: 

```
@extends('layout.app')
@section('content')
hello
@endsection
```