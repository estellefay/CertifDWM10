@extends('template') 
@section('content') 

<h1>Mode of deliveries</h1>
<div class="show-deliveries">
        <ul>
                @foreach($deliveries as $delivery)
                    <li>{{ $delivery->name}}    &nbsp;
                            <form action="/deleteOneDelivery" method="post" class="form-deliverie-delete">
                                @csrf
                                <input type="hidden" name="id" value="{{ $delivery->id }}">
                                <input type="submit" value="Delete">
                            </form>
                    </li>
                @endforeach
            </ul>
            <form action="/insertDelivery" method="post" class="form-insert-deliveries">
                @csrf
                <input type="submit" value="Insert new mode of Delivery" class="btn">
            </form>
            

</div>

@endsection