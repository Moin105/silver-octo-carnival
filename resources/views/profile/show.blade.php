
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
        <div class="container" style="margin-left: 5%;margin-top:5%;">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-size:30px;margin-left:10%">Profile</h1>
                    <form action="{{ route('profile.update') }}" method="POST" style="padding: 10%;margin-right:10%">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $user->first_name }}">
                        </div>
                        <div class="form-group">
                            <label for="surname">Surname</label>
                            <input type="text" class="form-control" id="surname" name="surname" value="{{ $user->sur_name }}">
                        </div>
                        <div class="form-group">
                            <label for="company">Company</label>
                            <input type="text" class="form-control" id="company" name="company" value="{{ $user->company }}">
                        </div>
                    </form>
                    <a href="{{route('dashboard')}}">
                    <button type="submit" class="btn btn-primary with-3d-shadow" style="margin-left: 10%;margin-top:0;">OKAY</button>
                    </a>
                </div>
            </div>
        </div>

    </div>


</body>
</html>
