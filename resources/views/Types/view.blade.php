
@include('layouts.sidebar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <div class="container">
        @include('layouts.app')
        <h2 style=" margin-top:25px;font-size: 30px;display:flex;justify-content:center;font-weight:bold;color:#6c757d">
            SOPs Types
        </h2>


        <a href="{{url('add_type')}}" class="btn" style="margin-inline-start: 82%;margin-top:30px;margin-bottom:20px; background-color:#A1E6E0;color:#ffff">Add New Type</a>
        <div class="card" style=" width:90%;margin-left:5%">
            <div class="card-body">
        <table class="table">
            <thead  style="background-color:#848489;color:#EBEBEB">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Detail</th>
                <th style="display: flex;justify-content:space-evenly;">Action</th>
            </tr>
        </thead>
        <?php $i= 1; ?>
        @foreach ( $types as $type)
            <tr >



                <td>{{$i++}}</td>
                <td>{{$type->title}}</td>
                <td>{{$type->detail}} </td>
                <td style="display: flex;justify-content:space-evenly;">
                    {{-- <a class="btn" style="background-color: #A1E6E0;color:#ffff" href="{{url('edit_type/'.$type->id)}}">Edit</a>
                    <a class="btn btn-danger" href="{{}}">Delete</a> --}}

                    <form action="{{url('delete_type/'.$type->id)}}" method="post">
                        <a class="btn" style="background-color: #A1E6E0;color:#ffff" href="{{url('edit_type/'.$type->id)}} ">Edit</a>
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


</body>
</html>
