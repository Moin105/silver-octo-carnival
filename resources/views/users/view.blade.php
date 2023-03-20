
@include('layouts.sidebar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title></title>
</head>
<body>
    <div class="container">
        @include('layouts.app')

        @if(session('message'))
            <div class="alert alert-{{ session('alert-type') }} alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif


        <h2 style=" margin-top:25px;font-size: 30px;display:flex;justify-content:center;font-weight:bold;color:#6c757d">
            All User
        </h2>

        <a href="{{url('/new_user')}}" class="btn" style="margin-inline-start: 79%;margin-top:30px;margin-bottom:20px;background-color:#A1E6E0;color:#ffff"> Add New User</a>

        <div class="card" style=" width:90%;margin-left:5%">

            <div class="card-body">
        <table class="table">
            <thead style="background-color:#848489;color:#EBEBEB">
            <tr style="justify-content: stretch">
                <th>Id</th>
                <th>First Name</th>
                <th>Sur Name</th>
                <th>Email</th>
                <th>Company</th>
                <th style="display: flex;justify-content:space-evenly;">Action</th>
            </tr>
        </thead>
        <?php
        $i = 1;
        ?>
        @foreach ($Users as $User)

            <tr>



                <td>{{$i++}}</td>
                <td>{{$User->first_name}}</td>
                <td>{{$User->sur_name}}</td>
                <td>{{$User->email}}</td>
                <td>{{$User->company}}</td>
                <td style="display: flex;justify-content:space-evenly;">
                    <form action="{{url('delete_user/'.$User->id)}}" method="post">
                    <a class="btn" style="background-color: #A1E6E0;color:#ffff" href="{{url('edit_user/'.$User->id)}} ">Edit</a>
                    @csrf
                    @method('DELETE')

                    <input type="submit"  class="btn btn-danger" style="background:red;" value="Delete" >
                </form>
                </td>
            </tr>
            @endforeach

        </table>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    {{-- <script>
        setTimeout(function(){
            window.location.href = "{{route('/user')}}";
        }, 5000);
    </script> --}}


</body>
</html>
