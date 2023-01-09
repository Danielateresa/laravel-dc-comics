@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Comics Archives</h1>

    <div class="container py-2">
        <h3>Add a new Comic to archives</h3>

        @include('partials.error')

        <form action="{{route('store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="title here" aria-describedby="helpId" value="{{ old('title') }}">
            </div>
            @error('title')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description"
                    class="form-control @error('description') is-invalid @enderror" placeholder="description here"
                    aria-describedby="helpId" value="{{ old('description') }}">
            </div>
            @error('description')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="mb-3">
                <label for="thumb" class="form-label">Image path</label>
                <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror"
                    placeholder="image path here" aria-describedby="helpId" value="{{ old('thumb') }}">
            </div>
            @error('thumb')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror"
                    placeholder="price here" aria-describedby="helpId" step="0.01" value="{{ old('price') }}">
            </div>
            @error('price')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror"
                    placeholder="series here" aria-describedby="helpId" value="{{ old('series') }}">
            </div>
            @error('series')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" name="sale_date" id="sale_date"
                    class="form-control @error('sale_date') is-invalid @enderror" placeholder="sale date here"
                    aria-describedby="helpId" value="{{ old('sale_date') }}">
            </div>
            @error('sale_date')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror"
                    placeholder="type here" aria-describedby="helpId" value="{{ old('type') }}">
            </div>
            <button type="submit" class="btn btn-primary my-3">Add Comic</button>
        </form>
    </div>

</div>
@endsection