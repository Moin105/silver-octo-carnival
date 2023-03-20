@include('layouts.sidebar')
<html>
<head>

    <style>
        .card-container {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          gap: 20px;
          /* background-color: #007bff; */
          margin-top: 5%;
        }

        .card {
          background-color: white;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          border-radius: 10px;
          width: 300px;
          transition: transform 0.2s ease-out;
        }

        .card:hover {
             transform: translateY(-10px);
             box-shadow: 15px 5px 15px rgba(0, 0, 0, 0.2);
        }

        .card-header {
          background-color: #A1E6E0;
          color: white;
          padding: 20px;
          border-top-left-radius: 10px;
          border-top-right-radius: 10px;
        }

        .card-header h3{
            color: #fff;
            font-weight: bold;
        }

        .card-body {
          padding: 20px;
        }

        .custom-btn {
        display: inline-block;
        border: 2px solid #A1E6E0; /* indigo border */
        background-color: #fff; /* white background */
        color: #A1E6E0; /* indigo text color */
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.2s, color 0.2s;
    }

    .custom-btn:hover {
        background-color: #A1E6E0; /* indigo background */
        color: #fff; /* white text color */
    }

    .divBtn{
        display: flex;
        justify-content: flex-start;
        margin-left: 5%;
        margin-bottom: 5%;
    }

    </style>

</head>
<body>

    <div class="container">
        @include('layouts.app')

        <div class="card-container">

            <!-- First card -->
            <div class="card">
              <div class="card-header">
                <h3>SOPs TYPES</h3>
              </div>
              <div class="card-body">
                <p>View all the SOPs types and add new ones, or delete the ones that you don't want. </p>
            </div>
            <div class="divBtn">
                <a href="{{ url('/type') }}" class="custom-btn">Go to Types</a>

            </div>
            </div>

            <!-- Second card -->
            <div class="card">
              <div class="card-header">
                <h3>SOPs Categories</h3>
              </div>
              <div class="card-body">
                <p>View all the SOPs categories and add new ones, or delete the ones that you don't want.</p>
            </div>
            <div class="divBtn">
                <a href="{{ url('/category') }}" class="custom-btn">Go to Categories</a>
            </div>
            </div>

            <!-- Third card -->
            <div class="card">
              <div class="card-header">
                <h3>All Users</h3>
              </div>
              <div class="card-body">
                <p>View All User's Data.</p>
            </div>
            <div class="divBtn">
                <a href="{{ url('/user') }}" class="custom-btn">Go to Users</a>
            </div>
            </div>

            {{-- Fourth Card --}}
            <div class="card">
                <div class="card-header">
                  <h3>All SOPs</h3>
                </div>
                <div class="card-body">
                  <p>View All SOPs Added By the Authorised Users.</p>
              </div>
              <div class="divBtn">
                  <a href="{{ url('/sop') }}" class="custom-btn">Go to SOPs</a>
              </div>
              </div>

          </div>





</body>
</html>





