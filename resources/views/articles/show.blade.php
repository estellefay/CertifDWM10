@extends('template') 
@section('content') 
    <h1>Welcome in the page of Articles </h1>
    <div class="global-articles">
            @foreach ($articles as $article)
            <ul class="articles">
                <li class="name">Name : {{ $article->name }}</li>
                <li class="reference">Reference : {{ $article->reference }}</li>
                <div class="reference-image">
                        <li class="description">Description : {{ $article->description }}</li>
                        <li><img src="{{ $article->image }}" alt="" srcset=""></li>
                </div> 
                <div class='price-amout-type'>
                        <li class="price">Price : {{ $article->price}} $</li>
                        <li class="amount">Amount : {{ $article->amount}}</li>
                        <li>Type :{{ $article->type->name }} </li>
                </div>
                <li>                    
                    <ul>
                        <div class="articles-delivery">
                            <p>Delivery : </p>
                            @foreach ($article->deliveries as $delivery)
                                 <li class="delivervy">{{ $delivery->name }}</li>
                            @endforeach
                        </div> 
                    </ul>
                </li>

                <div class="delete-update">
                    <li>
                        <form action="/deleteOne" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $article->id }}">
                            <input type="submit" value="Delete">
                        </form>
                    </li>
                    <li>
                        <form action="/updateOne" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $article->id }}">
                            <input type="submit" value="Update">
                        </form>
                    </li>
                </div>
            </ul> 
        @endforeach
    </div>

@endsection