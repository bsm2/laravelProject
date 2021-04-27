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
        <header>
            <h1>{{ trans('site.users') }}</h1>
    
                <p> <a href="{{url('lang/ar')}}">ع</a></p>
                <p> <a href="{{url('lang/en')}}">E</a> </p>
        </header>
        <h1 >Users</h1>
        <br>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">age</th>
                    <th scope="col">phone</th>
                    <th scope="col">national ID</th>
                    <th scope="col">email</th>
                    <th scope="col">address</th>
                    <th scope="col">aboutme</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users_data as $data)
                    <tr>
                        <th scope="row">{{$data->id}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->age}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->nationalid}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->address}}</td>
                        <td>{{$data->aboutme}}</td>
                        <td>
                            <a href='{{url('deleteuser/'.$data->id)}}' class="btn btn-danger">Delete</a>
                            <a href='{{url('editeuser/'.$data->id)}}' class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    
    

</body>

</html>