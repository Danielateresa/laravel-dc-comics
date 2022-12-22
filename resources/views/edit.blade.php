@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Comics Archives</h1>

    <div class="container py-2">
        <h3>Edit Comic</h3>

        <form action="{{route('update',$comic->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="title here"
                    aria-describedby="helpId" value="{{$comic->title}}">

            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control"
                    placeholder="description here" aria-describedby="helpId" value="{{$comic->title}}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" name="thumb" id="thumb" class="form-control" placeholder="image path here"
                    aria-describedby="helpId" value="{{$comic->title}}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control" placeholder="price here"
                    aria-describedby="helpId" value="{{$comic->title}}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series" class="form-control" placeholder="series here"
                    aria-describedby="helpId" value="{{$comic->title}}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="sale date here"
                    aria-describedby="helpId" value="{{$comic->title}}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" class="form-control" placeholder="type here"
                    aria-describedby="helpId" value="{{$comic->title}}">
            </div>
            <button type="submit" class="btn btn-primary my-3">Edit Comic</button>
        </form>
    </div>

</div>
@endsection