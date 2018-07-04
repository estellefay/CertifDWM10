@extends('template') 
@section('content') 

<h1>Mode of deliveries</h1>

<ul>
    @foreach($deliveries as $delivery)
        <li>{{ $delivery->name}}
                <form action="/deleteOneDelivery" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $delivery->id }}">
                    <input type="submit" value="Delete">
                </form>
        </li>
    @endforeach
</ul>

<form action="/insertDelivery" method="post">
    @csrf
    <input type="submit" value="Insert new mode of Delivery">
</form>
@endsection