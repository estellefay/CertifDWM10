@extends('template') 
@section('content') 

<h1>Insert new Amount</h1>
<div class="update-amount">
        <p>Name : {{ $article->name }}</p>
        <p>Reference : {{ $article->reference }} </p>
        
        <form action="/updateAmountAction" method="post" class="form2">
            @csrf
            <input type="hidden" name="id" value="{{ $article->id }}">          
            <label for="amount" class="test">New amount</label>
            <input type="number" name="amount" id="amount" value="{{ $article->amount }}">
            <input type="submit" value="New Amount" class="btn">
        </form>
</div>



@endsection