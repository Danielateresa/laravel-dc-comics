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
                    <td><img class="thumb" src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->price}} €</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a href="{{route('show',$comic->id)}}"><button type="submit" class="btn btn-prymary"><i
                                    class="fa-regular fa-eye px-1"></i></button></a>
                        <a href="{{route('edit',$comic->id)}}"><button type="submit" class="btn btn-prymary"><i
                                    class="fa-regular fa-pen-to-square px-1"></i></button></a>
                        <form action="{{route('destroy',$comic->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-warning"><i
                                    class="fa-solid fa-trash px-1"></i></button>
                        </form>

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