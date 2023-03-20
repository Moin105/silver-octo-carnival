@include('layouts.sidebar')
<html>
<head>

</head>
<body>

    <div class="container">
        @include('layouts.app')



        <div class="card mt-5" style="width: 50rem; margin-left:10%">
            <div class="card-body">
                <div class="row">
                    <h5 class="card-title align-left col-4">Edit User Data</h5>
                    <a href="{{url('/user')}}" class="btn col-4" style="background-color:#A1E6E0;color:#ffff"> All Users</a>
                </div>
              <form action="{{url('/update_user')}}" method="post">
                @csrf
                @method('PUT')
                <label for="first_name">First Name</label>
                <input type="hidden" name="id" value="{{$Users->id}}">
                <input type="text" name="first_name" value="{{$Users->first_name}}" class="form-control">
                <label for="sur_name">Sur Name</label>
                <input type="text" name="sur_name" value="{{$Users->sur_name}}" class="form-control">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{$Users->email}}" class="form-control">
                <label for="password">Password</label>
                <input type="password" name="password" value="{{$Users->password}}" class="form-control">
                <label for="company">Comapany</label>
                <input type="text" name="company" value="{{$Users->company}}" class="form-control">
                <input type="submit" name="" class="btn mt-2" style="background-color:#A1E6E0;color:#ffff">
                    </form>
            </div>
          </div>




</body>
</html>
