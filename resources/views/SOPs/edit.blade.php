@include('layouts.sidebar')
<html>
<head>

</head>
<body>

    <div class="container">

        <div class="card" style="margin: 50px 200px;">
            <div class="card-body">
                <div class="row">
              <h5 class="card-title align-left col-4">Edit SOP</h5>
              <a href="{{url('/sop')}}" class="btn  col-4" style="background-color:#A1E6E0;color:#ffff" > All SOPs</a>
            </div>
              <form action="{{url('/update_sop')}}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$sop->id}}">
                <label for="title">Title</label>
                <input type="text" name="title" value="{{$sop->title}}" class="form-control">
                <label for="detail">Detail</label>
                <input type="text" name="description" value="{{$sop->description}}" class="form-control">
                <input type="submit" name="" class="btn mt-2" style="background-color:#A1E6E0;color:#ffff">

                    </form>
            </div>
          </div>



</body>
</html>
