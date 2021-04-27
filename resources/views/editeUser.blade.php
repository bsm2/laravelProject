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
        <h1 >Edit Student</h1>
        <br>
        <form method="post" action="{{url('updateUser')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$user_data['id']}}">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" value="{{$user_data['name']}}" class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" name="email" value="{{$user_data['email']}}" class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Age</label>
                <input  name="age" value="{{$user_data['age']}}" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="Enter age">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">phone</label>
                <input  name="phone" value="{{$user_data['phone']}}" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="Enter phone">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">National ID</label>
                <input  name="nationalid" value="{{$user_data['nationalid']}}" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="Enter id">
            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">Adress</label>
                <input type="text" name="address" value="{{$user_data['address']}}" class="form-control" id="exampleInputPassword1" placeholder="address">
            </div>
            
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="form-label">About me</label>
                <textarea class="form-control" name="aboutme" value="{{$user_data['aboutme']}}" id="exampleFormControlTextarea1" rows="3">{{$user_data['aboutme']}}</textarea>
            </div>

            <button type="submit"  class="btn btn-primary">Edit</button>

        </form>
    </div>

</body>