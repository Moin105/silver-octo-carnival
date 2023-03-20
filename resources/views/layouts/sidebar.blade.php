<!doctype html>
<html lang="en">
  <head>
  	<title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{url('css/style.css')}}">
  </head>
  <body>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" style="background: #848489">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn">
	          <i class="fa fa-bars" style="font-size: 25px; color:#A1E6E0"></i>
	          {{-- <span class="sr-only">Toggle Menu</span> --}}
	        </button>
        </div>
        <div class="p-4" style="background: #848489">
            <h1><a href="index.html" class="logo">Jessop <span style="color:#A1E6E0">Jessop Admin Panel</span></a></h1>
            <ul class="list-unstyled components mb-5">
                <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="/dashboard"><span class="fa fa-home mr-3" style="color:#A1E6E0"></span> Dashboard</a>
                </li>
                <li class="{{ Request::is('user') ? 'active' : '' }}">
                    <a href="/user"><span class="fa fa-user mr-3" style="color:#A1E6E0"></span > Users</a>
                </li>
                <li class="{{ Request::is('category') ? 'active' : '' }}">
                    <a href="{{ url('/category') }}"><span class="fa fa-briefcase mr-3" style="color:#A1E6E0"></span> Categories</a>
                </li>
                <li class="{{ Request::is('type') ? 'active' : '' }}">
                    <a href="{{ url('/type') }}"><span class="fa fa-sticky-note mr-3" style="color:#A1E6E0"></span> Types </a>
                </li>
                <li class="{{ Request::is('sop') ? 'active' : '' }}">
                    <a href="{{ url('/sop') }}"><span class="fa fa-book mr-3" style="color:#A1E6E0"></span> SOPs </a>
                </li>
            </ul>
        </div>

    	</nav>

        <!-- Page Content  -->
        @section('content')
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Sidebar #05</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
		</div>
@endsection
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/popper.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
  </body>
</html>
