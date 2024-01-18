This is a basic layout package containing a basic layout and some simple forms.

## Installation

Install using:

> composer require philipsorensen/basiclayout

Run the following command:

> php artisan vendor:publish --tag=layout-assets

This moves files into the ressources folders. 

Use the basic layout in your view files with like this: 

```
@extends('layout.app')
@section('content')
hello
@endsection
```