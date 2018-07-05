@extends('template') 
@section('content') 

<h1>Inventory management</h1>
<div class="global-articles-stock">
    <table>
        <tr>
            <th>Name</th>
            <th>Référence</th>
            <th>Amount</th>
        </tr>

        @foreach ($articles as $article)
            <tr>
                <td>{{ $article->name }}</td>
                <td>{{ $article->reference }}</td>
                <td>{{ $article->amount}}</td>
                <td>                
                    <form action="/updateAmount" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $article->id }}">
                        <input type="submit" value="Update Amount" class="btn">
                    </form>
                </td>
            </tr>
         @endforeach
    </table>
</div>
@endsection