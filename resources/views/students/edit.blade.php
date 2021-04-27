<!DOCTYPE html>
<html lang="en">
{{-- task --}}
<head>
    <title>{{$title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h1 >Edit Student</h1>
        <br>
        <form method="post" action="{{url('student/'.$data->id)}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="put" name="_method">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" value="{{$data['name']}}" class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" name="email" value="{{$data['email']}}" class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter email">
            </div>

            <button type="submit"  class="btn btn-primary">Edit</button>

        </form>
    </div>

</body>