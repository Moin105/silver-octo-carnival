@include('layouts.sidebar')
<html>
<head>

</head>
<body>

    <div class="container">


        <div class="card" style="margin: 50px 200px;">
            <div class="card-body">
                <div class="row">
              <h5 class="card-title align-left col-4">Add New User</h5>
              <a href="{{url('/user')}}" class="btn col-4" style="background-color:#A1E6E0;color:#ffff"> All Users</a>
            </div>
              <form action="{{url('/add_user')}}" method="post">

                @csrf
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" class="form-control">
                <label for="sur_name">Sur Name</label>
                <input type="text" name="sur_name" class="form-control">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
                <label for="company">Company</label>
                <input type="text" name="company" class="form-control">
                <input type="submit" name="" class="btn mt-2" id="" style="background-color:#A1E6E0;color:#ffff">

                    </form>
            </div>
          </div>



</body>
</html>
