@extends('template') 
@section('content') 

<h1>Welcon in update</h1>

<form action="/insertOneAction" method="post">
    @csrf
    <label for="name">name</label>
    <input type="text" name="name" id="name" value="{{ $article->name }}">

    <label for="reference">reference</label>
    <input type="text" name="reference" id="reference" value="{{ $article->reference }}">

    <label for="description">description</label>
    <input type="text" name="description" id="description" value="{{ $article->description }}">

    <label for="price">price</label>
    <input type="number" name="price" id="price" value="{{ $article->price }}">

    <label for="amount">amount</label>
    <input type="number" name="amount" id="amount" value="{{ $article->amount }}">

    <label for="type">Type</label>
    <select name="type" id="">
            @foreach ($types as $type)
                @if($article->type_id == $types->id)
                     <option selected value="{{ $type->id }}">{{ $type->name }}</option> 
                @else 
                    <option value="{{ $type->id }}">{{ $type->name }}</option> 
            @endforeach
    </select>

    <label for="deliveries">Moyen de livraison</label>
    <select name="deliveries[]" id="" multiple>
            @foreach ($deliveries as $delivery)

                <option value="{{ $delivery->id }}">{{ $delivery->name }}</option> 
            @endforeach
    </select>

    <label for="image">Link of image</label>
    <input type="text" name="image" id="" value="{{ $article->image }}">

    <input type="submit" value="Insert">

</form>

@endsection