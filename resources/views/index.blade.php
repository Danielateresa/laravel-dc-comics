@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Comics Archives</h1>

    @if(session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        <strong>{{session('message')}}</strong>
    </div>
    @endif
    <!-- alert creazione,modifica,cancellazione record -->

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
                        <a href="{{route('show',$comic->id)}}" class="btn btn-secondary"><i
                                class="fa-regular fa-eye"></i></a>
                        <a href="{{route('edit',$comic->id)}}" class="btn btn-primary my-1"><i
                                class="fa-regular fa-pen-to-square"></i></a>

                        <!-- Modal trigger button -->
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#deleteComic-{{$comic->id}}">
                            <i class="fa-solid fa-trash text-white"></i>
                        </button>

                        <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div class="modal fade" id="deleteComic-{{$comic->id}}" tabindex="-1" data-bs-backdrop="static"
                            data-bs-keyboard="false" role="dialog" aria-labelledby="modalComicId-{{$comic->id}}"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalComicId-{{$comic->id}}">Delete Comic</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Do you really want to delete this element permanently?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No,
                                            close</button>
                                        <form action="{{route('destroy',$comic->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-warning">Yes, delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

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