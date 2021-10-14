@extends('layouts.layout')

@section('title', 'Все записи')



@section('content')
    <a href="{{route('records.create')}}" class="btn btn-success">Создать пост</a>
    @if(session()->get('success'))
        <div class="alert alert-success mt-3">
            {{ session()->get('success') }}
        </div>
    @endif

    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя автора</th>
            <th scope="col">Название книги</th>
            <th scope="col">Количество книг</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
        <tr>
            <th scope="row">{{$record -> id}}</th>
            <td>{{$record -> authorName}}</td>
            <td>{{$record -> bookName}}</td>
            <td>{{$record -> amountBooks}}</td>
            <td>

                <a href="{{route('records.show', $record)}}" class="btn btn-success ">
                    <i class="fa fa-eye" aria-hidden="true">Viw</i>
                </a>
                <a href="{{route('records.edit', $record)}}" class="btn btn-primary ">
                    <i class="fa fa-eye" aria-hidden="true">Edi</i>
                </a>
                <form method="POST" action="{{route('records.destroy', $record)}}">
                    @csrf
                    @method("DELETE")
                <button type="submit" class="btn btn-danger">
                    <i class="fa fa-trash" aria-hidden="true">Del</i>
                </button>
                </form>
            </td>
        </tr>
    @endforeach
        </tbody>
    </table>
@endsection
