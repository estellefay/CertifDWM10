@extends('template') 
@section('content') 

<h1>Insert Mode of deliveries</h1>


<form action="/insertDeliveryAction" method="post">
    @csrf
    <label for="name">Monde of Delivery</label>
    <input type="text" name="name" id="name">

    <input type="submit" value="Insert">
</form>
@endsection
