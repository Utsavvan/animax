@extends('voyager::master')


@section('content')

<!doctype html>
<html lang="en">
<head>
    <title>Update series</title>
</head>
<body>
<form method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Series name</label>
        <input type="text" value="{{$series->name}}" name="name" class="form-control" id="name">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Banner</label>
        <input type="file" name="banner" class="form-control" id="banner">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Poster</label>
        <input type="file" name="poster" class="form-control" id="poster">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Quality</label>
        <input type="text" value="{{$series->quality}}" name="quality" class="form-control" id="quality">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Rating</label>
        <input type="text" value="{{$series->rating}}" name="rating" class="form-control" id="rating">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Release date</label>
        <input type="date" value="{{$series->release_date}}" name="release" class="form-control" id="release">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Language</label>
        <input type="text" value="{{$series->language}}" name="language" class="form-control" id="language">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Description</label>
        <input type="text" value="{{$series->description}}" name="description" class="form-control" id="description">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Category</label>
        <input type="text" value="{{$series->Category}}" name="category" class="form-control" id="category">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Trailer</label>
        <input type="text" value="{{$series->trailer}}" name="trailer" class="form-control" id="trailer">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">submit</button>
    </div>
</form>

</body>
</html>
@endsection
