@extends('template') 
@section('content') 

<h1>Insert Mode of deliveries</h1>


<form action="/insertDeliveryAction" method="post" class="form-insert">
    @csrf
    <label for="name">Mode of Delivery</label>
    <input type="text" name="name" id="name">

    <input type="submit" value="Insert" class="btn">
</form>
@endsection
