@extends('template') 
@section('content') 

<h1>stok</h1>
<div class="global-articles-stock">
    <table>
        <tr>
            <th>Nom</th>
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
                        <input type="submit" value="Update Amount">
                    </form>
                </td>
            </tr>
         @endforeach
</table>
</div>
@endsection