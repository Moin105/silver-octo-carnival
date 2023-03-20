@include('layouts.sidebar')

<html>
<head>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    @include('layouts.app')

    <div class="card" style="width: 50rem; margin-top:5%;margin-left:10%">
      <div class="card-body">
        <div style="display: flex;justify-content: space-evenly">
          <h5 class="card-title">Add New Category</h5>
          <a href="{{url('/category')}}" class="btn col-4" style="background-color:#A1E6E0;color:#ffff"> All Category</a>
        </div>
        <form action="{{url('/add_categories')}}" method="post">
          @csrf
          <label for="">Name</label>
          <input type="text" name="name" class="form-control">
          <input type="submit" name="" class="btn" id="" style="background-color:#A1E6E0;color:#ffff;margin-top:1%">
        </form>

        <!-- Success alert message -->
        @if(Session::has('success'))
          <div class="alert alert-success mt-3">
            {{ Session::get('success') }}
          </div>
        @endif
      </div>
    </div>
  </div>

  <!-- Include Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
