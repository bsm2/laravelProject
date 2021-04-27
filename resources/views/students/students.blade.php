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
            <h1>Students || <a href="{{url('student/create')}}">add</a></h1>
    
                <p> {{ 'Welcome   ('.auth()->guard('student')->user()->name.')' }} </p>
                <p> <a class="btn btn-danger" href="{{url('Logout')}}">Logout</a> </p>
        </header>
        
        <br>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <th scope="row">{{$student->id}}</th>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        <td>
                            <a data-toggle="modal" data-target="#modal_single_del_{{$student->id}}"  class='btn btn-danger m-r-1em'>Delete</a>
                            <a href='{{url('student/'.$student->id.'/edit')}}' class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                    {{-- model --}}
                    <div class="modal" id="modal_single_del_{{$student->id}}" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">delete confirmation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                    
                                <div class="modal-body">
                                    <p> {{ 'Confirm to delete user  : '. $student->name }}</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="{{url('student/'.$student->id)}}" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="delete">
                                        <div class="not-empty-record">
                                            <button type="submit" class="btn btn-primary">Delete</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </tbody>
        </table>
    