@extends('voyager::master')


@section('content')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-play"></i> Episodes Of Season {{$sename}}
        </h1>
        <a href="/admin/addepisode/{{ $sname }}/{{$sename}}" class="btn btn-success btn-add-new">
            <i class="voyager-plus"></i> <span>Add episode</span>
        </a>
        <a href="{{ url()->previous() }}" class="btn btn-dark btn-add-new">
            <i class="voyager-double-left"></i> <span>Back</span>
        </a>
    </div>
@stop

<!doctype html>
<html lang="en">
<body>
<div class="table-responsive">
    <table id="dataTable" class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($episode as $episodes)
            <tr>
                <td>{{ $episodes->id }}</td>
                <td>Episode {{ $episodes->name }}</td>
                {{--            <td><a class="btn btn-primary" href="/admin/episode/delete/{{ $episodes->id }}" role="button">Delete</a></td>--}}
                <td>
                    <a href="/admin/updateepisode/{{ $episodes->id }}" class="btn btn-success btn-add-new">
                        <i class="voyager-edit"></i> <span>Update</span>
                    </a>
                    <a href="/admin/episode/delete/{{ $episodes->id }}" class="btn btn-danger btn-add-new">
                        <i class="voyager-trash"></i> <span>Delete</span>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>

@endsection
