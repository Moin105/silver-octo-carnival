@include('layouts.sidebar')
<html>
<head>

</head>
<body>

    <div class="container">

        <div class="card" style="margin: 50px 200px;">
            <div class="card-body">
                <div class="row">
              <h5 class="card-title align-left col-4">Edit Type</h5>
              <a href="{{url('/type')}}" class="btn  col-4" style="background-color:#A1E6E0;color:#ffff" > All Types</a>
            </div>
              <form action="{{url('/update_type')}}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$type->id}}">
                <label for="title">Title</label>
                <input type="text" name="title" value="{{$type->title}}" class="form-control">
                <label for="detail">Detail</label>
                <input type="text" name="detail" value="{{$type->detail}}" class="form-control">
                <input type="submit" name="" class="btn mt-2" style="background-color:#A1E6E0;color:#ffff">

                    </form>
            </div>
          </div>



</body>
</html>
