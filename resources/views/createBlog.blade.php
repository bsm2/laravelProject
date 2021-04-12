<!DOCTYPE html>
<html lang="en">
{{-- task --}}
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h1 >Register</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <br>
        <form method="post" action="{{url('')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="">
            <div class="form-group">
                <label for="exampleInputEmail1">title</label>
                <input type="text" name="title" value="{{old('title')}}" class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="form-label">content</label>
                <textarea class="form-control" name="content" value="{{old('content')}}" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button type="submit"  class="btn btn-primary">Submit</button>

        </form>
    </div>

</body>

</html>