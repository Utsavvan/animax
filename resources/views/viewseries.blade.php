@extends('voyager::master')


@section('content')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-play"></i> Series
        </h1>
        <a href="/admin/addseries" class="btn btn-success btn-add-new">
            <i class="voyager-plus"></i> <span>Add series</span>
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
        @foreach ($series as $seriess)
            <tr>
                <td>{{ $seriess->id }}</td>
                <td>{{ $seriess->name }}</td>
                <td><a href="/admin/viewseason/{{ $seriess->name }}" class="btn btn-warning btn-add-new">
                        <i class="voyager-eye"></i> <span>View Seasons</span>
                    </a>
                    <a href="/admin/addseason/{{ $seriess->name }}" class="btn btn-success btn-add-new">
                        <i class="voyager-plus"></i> <span>Add Season</span>
                    </a>
                    <a href="/admin/updateseries/{{ $seriess->id }}" class="btn btn-success btn-add-new">
                        <i class="voyager-edit"></i> <span>Update</span>
                    </a>
                    <a href="/admin/delete/{{ $seriess->id }}" class="btn btn-danger btn-add-new">
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
