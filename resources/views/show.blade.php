@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Comics Archives</h1>

    <div class="container py-2">
        <h3>Comic info</h3>
        <div class="d-flex">
            <div class="col-4">
                <img class="w-100" src="{{$comic->thumb}}" alt="{{$comic->title}}">
            </div>
            <div class="col-8 info ms-5">
                <h3>Title: <span>{{$comic->title}}</span> </h3>

                <h3>Description: <span>{{$comic->description}}</span> </h3>
                <h3>Price: <span>{{$comic->price}} €</span> </h3>
                <h3>Series: <span>{{$comic->series}}</span> </h3>
                <h3>Sale date: <span>{{$comic->sale_date}}</span> </h3>
                <h3>Type: <span>{{$comic->type}}</span> </h3>
            </div>

        </div>

    </div>
</div>

</div>
@endsection