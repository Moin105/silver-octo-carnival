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
            SOPs
        </h2>
        {{-- <h4 style=" margin-top:25px;font-size: 20px;display:flex;justify-content:center;font-weight:bold;color:#6c757d">
            SOPs Added By User: {{'  '.$sopsCount }}
        </h4> --}}

        <a href="{{url('/add_sop')}}" class="btn" style="margin-inline-start: 82%;margin-top:30px;margin-bottom:20px; background-color:#A1E6E0;color:#ffff">Add New SOP</a>
        <div class="card" style=" width:90%;margin-left:5%">
            <div class="card-body">
        <table class="table">
            <thead  style="background-color:#848489;color:#EBEBEB">
            <tr>
                <th>ID</th>
                <th>SOP Title</th>
                <th>username</th>
                <th>SOP Description</th>
                <td>SOP's Total Steps</td>
                <th style="display: flex;justify-content:space-evenly;">Action</th>
            </tr>
        </thead>
        <?php $i= 1; ?>
        @foreach ( $sops as $sop)
            <tr >
            </thead>
            <tbody>
                        <td>{{ $i++}}</td>
                        <td>{{ $sop->title }}</td>
                        <td>{{ $sop->user->first_name.' '.$sop->user->sur_name }}</td>
                        <td>{{ $sop->description }}</td>
                        <td>{{ $sop->steps_count }}</td>
                        <td style="display: flex;justify-content:space-evenly;">
                                {{-- <a class="btn" style="background-color: #A1E6E0;color:#ffff" href="{{url('edit_type/'.$type->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{}}">Delete</a> --}}

                            <form action="{{url('delete_sop/'.$sop->id)}}" method="post">
                                <a class="btn" style="background-color: #A1E6E0;color:#ffff" href="{{url('edit_sop/'.$sop->id)}} ">Edit</a>
                                @csrf
                                @method('DELETE')

                                <input type="submit"  class="btn btn-danger" style="background:red;" value="Delete" >
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>

</body>
</html>
