@extends('layouts.app')
<h1 class="text-center">
    Treni
</h1>
<div class="container d-flex justify-content-center align-items-center">
    <ul>
        @foreach ($trains as $item)
            <li>{{ $item->agency }}</li>
        @endforeach
    </ul>
</div>
