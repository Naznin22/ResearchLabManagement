<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Pixel Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styleAdmin.css') }}" />
    
    <!-- color CSS -->
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    
    <div id="wrapper">
            <!-- Navigation -->
        <nav class="navbar navbar-header " role="navigation">
                <div class="container=fluid">
                    {{-- <div class="navbar-header"> --}}
                        {{-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                            <span class="sr-only">Toggle</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button> --}}
                        <a class="navbar-brand"  style="color:#dadada" href="/mainhome">Research Lab Management</a>
                    {{-- </div> --}}
                    <div class="collapse navbar-collapse" id="navbar-collapse-main">
                        <ul class="nav navbar-nav navbar-right">
                               

                                @if (Route::has('login'))
                                @guest
                                <li class="nav-item" >
                                    <a class="nav-link"   style="color:#dadada" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"   style="color:#dadada" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre   style="color:#dadada">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
        
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item"   style="color:#dadada" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
        
                                        <form id="logout-form"  action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                                
                            @endif
                            
                        </ul>
                    </div>
                </div>
            </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                        <li style="padding: 10px 0 0;">
                                <a href="adminPanelUser" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
                            </li>
                            
                            <li>
                                <a href="indexApply" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i><span class="hide-menu">Applications</span></a>
                            </li>
                            <li>
                                <a href="resource" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i><span class="hide-menu">Resources</span></a>
                            </li>
                            <li>
                                <a href="create" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i><span class="hide-menu">Select</span></a>
                            </li>
                            <li>
                                <a href="/selecteds" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Selecteds</span></a>
                            </li>
                </ul>
                <div class="center p-20">
                    {{-- <span class="hide-menu"><a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger btn-block btn-rounded waves-effect waves-light">Upgrade to Pro</a></span> --}}
                </div>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Resources Table</h4> </div>
                    {{-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a> --}}
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Resources</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Resources</h3>
                            <p class="text-muted">Add class <code>.table</code></p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Resource Name</th>
                                            <th>Total Quantity</th>
                                            <th>Available</th>
                                            <th>Booked</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach($resource as $resource)
                                       <tr>
                                           <th>{{$resource->id}}</th>
                                           <th>{{$resource->resource_name}}</th>
                                           <th>{{$resource->total_quantity}}</th>
                                           <th>{{$resource->available}}</th>
                                           <th>{{$resource->booked}}</th>
                                       </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            
            <div class="white-box">
            <div class="container-fluid">
            
                    
                            <div class="container">
                                </div>
                                <h2>Add Resource</h2>
                                </div>
                                
                                            {!! Form::open(['action' => 'resourceController@store', 'method' ]) !!}
                            
                                            <div class = "form-group">
                                                    {{Form::label('id','Id')}}
                                                    {{Form::text('id','',['class' => 'form-control', 'placeholder' => 'Id'] )}}
                                                </div>
                            
                                            <div class = "form-group">
                                                    {{Form::label('name','Name')}}
                                                    {{Form::text('name','',['class' => 'form-control', 'placeholder' => 'Name'] )}}
                                                </div>
                                                <div class = "form-group">
                                                    {{Form::label('quantity','Quantity')}}
                                                    {{Form::text('quantity','',['class' => 'form-control', 'placeholder' => 'Quantity'] )}}
                                                </div>
                            
                                                <div class = "form-group">
                                                        {{Form::label('available','Available')}}
                                                        {{Form::text('available','',['class' => 'form-control', 'placeholder' => 'Available'] )}}
                                                    </div>
                            
                                                    
                            
                                                    <div class = "form-group">
                                                            
                                                            {{Form::label('booked','Booked')}}
                                                            {{Form::textarea('booked','',['class' => 'form-control', 'placeholder' => 'Booked'] )}}
                                                    </div>
                                                    
    
                                                    <div class = "form-group">
                                                    {{Form::submit('Add',['class' => 'btn'])}}
                                                    </div>
                                                
                                            {!! Form::close() !!}
                                            
                                 </div>
                           
                
            </div>
            </div>
    
            <footer class="footer text-center"> 2017 &copy; Pixel Admin brought to you by wrappixel.com </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
</body>

</html>
