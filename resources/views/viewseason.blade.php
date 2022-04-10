@extends('voyager::master')


@section('content')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-play"></i> Seasons Of {{$seriesname}}
        </h1>
        <a href="/admin/addseason/{{ $name }}" class="btn btn-success btn-add-new">
            <i class="voyager-plus"></i> <span>Add season</span>
        </a>
        <a href="{{ route('view.series')}}" class="btn btn-dark btn-add-new">
            <i class="voyager-double-left"></i> <span>Back</span>
        </a>
    </div>
@stop
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
    @foreach ($season as $seasonss)
        <tr>
            <td>{{ $seasonss->id }}</td>
            <td>Season {{ $seasonss->name }}</td>
            <td><a href="/admin/viewepisode/{{$seriesname}}/season-{{ $seasonss->name }}" class="btn btn-warning btn-add-new">
                    <i class="voyager-eye"></i> <span>View episodes</span>
                </a>
                <a href="/admin/addepisode/{{$seriesname}}/{{ $seasonss->name }}" class="btn btn-success btn-add-new">
                    <i class="voyager-plus"></i> <span>Add episodes</span>
                </a>
                <a href="/admin/updateseason/{{ $seasonss->id }}" class="btn btn-success btn-add-new">
                    <i class="voyager-edit"></i> <span>Update</span>
                </a>
                <a href="/admin/season/delete/{{ $seasonss->id }}" class="btn btn-danger btn-add-new">
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
