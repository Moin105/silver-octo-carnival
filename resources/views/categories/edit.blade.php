@include('layouts.sidebar')
<html>
<head>

</head>
<body>

    <div class="container">
        @include('layouts.app')




        <div class="card mt-5" style="width: 50rem; margin-left:10%">
            <div class="card-body">
              <h5 class="card-title">Edit Current Category</h5>
              <form action="{{url('/update_category')}}" method="post">
                @csrf
                @method('PUT')
                <label for="">Name</label>
                <input type="hidden" name="id" value="{{$category->id}}">
                <input type="text" name="name" value="{{$category->name}}" class="form-control">
                <input type="submit" name="" class="btn mt-2" id="" style="background-color:#A1E6E0;color:#ffff">
                    </form>
            </div>
          </div>




</body>
</html>
