@extends('template') 
@section('content') 

<h1>Insert new Amount</h1>
<p>Name : {{ $article->name }}</p>
<p>Reference : {{ $article->reference }} </p>

<form action="/updateAmountAction" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $article->id }}">
    
    <label for="amount">amount</label>
    <input type="number" name="amount" id="amount" value="{{ $article->amount }}">
    <input type="submit" value="New Amount">

</form>


@endsection