@extends('template') 
@section('content') 
    <h1>Welcome in the page show</h1>
    <div class="global-articles">
            @foreach ($articles as $article)
            <ul class="articles">
                <li>Name of article : {{ $article->name }}</li>
                <li>Reference of article : {{ $article->reference }}</li>
                <li>Description of article : {{ $article->description }}</li>
                <li>Price of article : {{ $article->price}}</li>
                <li>Amount of article : {{ $article->amount}}</li>
                <li>Type :{{ $article->type->name }} </li>
                <li>
                    <ul>
                            <p>Delivery</p>
                            @foreach ($article->deliveries as $delivery)
                                 <li>{{ $delivery->name }}</li>
                            @endforeach

                    </ul>
                </li>
                <li><img src="{{ $article->image }}" alt="" srcset=""></li>
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
            </ul> 
        @endforeach
    </div>

@endsection