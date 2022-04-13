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

<link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<html lang="en">
<body>
<div class="table-responsive">
    <table id="dataTable" class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Banner</th>
            <th scope="col">Poster</th>
            <th scope="col">Quality</th>
            <th scope="col">Rating</th>
            <th scope="col">Release_date</th>
            <th scope="col">Language</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Trailer</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($series as $seriess)
            <tr>
                <td>{{ $seriess->id }}</td>
                <td>{{ $seriess->name }}</td>
                <td><img src={{ asset('storage/image/'. $seriess->banner)}} alt="" width="100"></td>
                <td><img src={{ asset('storage/image/'. $seriess->poster)}} alt="" width="100"></td>
                <td>{{ $seriess->quality }}</td>
                <td>{{ $seriess->rating }}</td>
                <td>{{ $seriess->release_date }}</td>
                <td>{{ $seriess->language }}</td>
                <td>{{ $seriess->description  }}</td>
                <td>{{ $seriess->Category   }}</td>
                <td>{{ $seriess->trailer  }}</td>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#dataTable').DataTable();
    } );
</script>

</html>

@endsection
