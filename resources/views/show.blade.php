@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Comics Archives</h1>

    <div class="container py-2">
        <h3>Comic info</h3>

        <div class="card">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">

            <div class="card-body">
                <h3>Title: {{$comic->title}}</h3>

                <h3>Description: {{$comic->description}}</h3>
                <h3>Price: {{$comic->price}} €</h3>
                <h3>Series: {{$comic->series}}</h3>
                <h3>Sale date: {{$comic->sale_date}}</h3>
                <h3>Type: {{$comic->type}}</h3>
            </div>
        </div>

    </div>

</div>
@endsection