@extends('template') 
@section('content') 

    <h1>Welcome in insert</h1>
    <form action="/insertOneAction" method="post">
        @csrf
        <label for="name">name</label>
        <input type="text" name="name" id="name">

        <label for="reference">reference</label>
        <input type="text" name="reference" id="reference">

        <label for="description">description</label>
        <input type="text" name="description" id="description">

        <label for="price">price</label>
        <input type="number" name="price" id="price">

        <label for="amount">amount</label>
        <input type="number" name="amount" id="amount">

        <label for="type">Type</label>
        <select name="type" id="">
                @foreach ($types as $type)
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
        <input type="text" name="image" id="">

        <input type="submit" value="Insert">

    </form>
@endsection