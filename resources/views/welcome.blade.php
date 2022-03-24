@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <h1>Name:{{$book->title}}</h1>
                    <h2>Author:{{$book->user->name}}</h2>    
                    <p>
                        {{$book->description}}
                    </p>
                    @can('viewBook', $book)
                        <a href="#" class="btn btn-primary">Editar Livro</a>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
