@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Comics Archives</h1>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr class="table_primary">
                    <th scope="row">id</th>
                    <th scope="col">title</th>
                    <th scope="col">image</th>
                    <th scope="col">description</th>
                    <th scope="col">price</th>
                    <th scope="col">series</th>
                    <th scope="col">sale date</th>
                    <th scope="col">type</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($comics as $comic)
                <tr class="table_primary">
                    <td scope="row">{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    <td><img src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->price}} €</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a href="{{route('show',$comic->id)}}"><i class="fa-regular fa-eye px-1"></i></a>
                        <a href=""><i class="fa-regular fa-pen-to-square px-1"></i></a>
                        <a href=""><i class="fa-solid fa-trash px-1"></i></a>
                    </td>
                </tr>
                @empty
                <tr class="">
                    <td scope="row">No comics to show yet</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection