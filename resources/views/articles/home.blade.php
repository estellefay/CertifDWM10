@extends('template') 
@section('content') 

<h1>Welcome in the MarketMusic</h1>
<div class="button-js">
        <button data-action="click" id"click" type="button" class="btn">Click me for many informations</button>
</div>
<div class="hidden" id="info">
            <div class="global-hidden">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arit leoLorem ipsum dolor sit amet, consectetur adipiscing elit. Arit leoLorem ipsum dolor sit amet, consectetur adipiscing elit. Arit leoLorem ipsum dolor sit amet, consectetur adipiscing elit. Arit leo</p>
            <img src="/img/music.jpg" alt="" class="music">
    </div>
            <div class="button-js">
                    <button data-action="click-display" id"click" type="button" class="btn">Click me for diplay informations</button>
            </div>
</div>
@endsection