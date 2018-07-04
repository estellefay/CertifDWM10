@extends('template') 
@section('content') 
<h1>Welcome in the page show</h1>
@foreach ($articles as $article)
    <ul>
        <li>Name of article : {{ $article->name }}</li>
        <li>Reference of article : {{ $article->reference }}</li>
        <li>Description of article : {{ $article->description }}</li>
        <li>Price of article : {{ $article->price}}</li>
        <li>Amount of article : {{ $article->amount}}</li>
        <li>Type :{{ $article->type->name }} </li>
        <ul>
            <p>Delivery</p>

        </ul>
    </ul>
    
@endforeach

@endsection