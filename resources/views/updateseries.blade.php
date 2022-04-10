@extends('voyager::master')


@section('content')

<!doctype html>
<html lang="en">
<head>
    <title>Update series</title>
</head>
<body>
<form method="POST" action="">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Series name</label>
        <input type="text" name="name" class="form-control" id="name">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">submit</button>
    </div>
</form>

</body>
</html>
@endsection
