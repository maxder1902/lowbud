<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">


        <title>LowBud</title>
    </head>
<div class="photo-grid">
    @foreach ($products as $product)
    <div class="grid-element">
        
        <h3>{{ $product->name }}</h3>
        <h2>{{$product->price}}€</h2>
        <img class="shopLogo" src="{{ $product->logo }}" alt="Supermercado">
    </div>
    @endforeach
</div>