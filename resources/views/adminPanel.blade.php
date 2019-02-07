<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Pixel Admin - Responsive Admin Dashboard Template built with Twitter Bootstrap</title>
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/styleAdmin.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
</head>

<body>
    <!-- Preloader -->
    {{-- <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div> --}}
    <div id="wrapper">
        <!-- Navigation -->

        
        <nav class="navbar navbar-header " role="navigation">
                <div class="container=fluid">
                    {{-- <div class="navbar-header"> --}}
                        {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                            <span class="sr-only">Toggle</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button> --}}
                        <a class="navbar-brand"  style="color:#dadada" href="/mainhome">Research Lab Management</a>
                     </div> 
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
                        <a href="#" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
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
                    {{-- <li>
                        <a href="404.html" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i><span class="hide-menu">Error 404</span></a>
                    </li> --}}
                </ul>
                <div class="center p-20">
                    <span class="hide-menu"><a  target="_blank" class="btn btn-danger btn-block btn-rounded waves-effect waves-light">Dashboard</a></span>
                </div>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                    <h5 class="text-muted vb">Total Users</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-danger">{{$countUser}}</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{$countUser}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$countUser}}%"> <span class="sr-only">{{$countUser}} Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                    <h5 class="text-muted vb">PROJECTS</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-megna">{{$count}} </h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                    <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="{{$count}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$count}}%"> <span class="sr-only">{{$count}}(success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                                    <h5 class="text-muted vb">Number of Selected</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-primary">{{$selected}}</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="{{$selected}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$selected}}%"> <span class="sr-only">{{$selected}}% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!--row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            {{-- <h3 class="box-title">Sales Difference</h3> --}}
                            {{-- <ul class="list-inline text-right">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #dadada;"></i>Site A View</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #aec9cb;"></i>Site B View</h5>
                                </li>
                            </ul> --}}
                            <div id="morris-area-chart2" style="height: 200px;"></div>
                        </div>
                    </div>
                </div>
                <!--row -->
                <div id="page-wrapper">
                        <div class="container-fluid">
                            <div class="row bg-title">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                    <h4 class="page-title">Users Table</h4> </div>
                                {{-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a> --}}
                                    <ol class="breadcrumb">
                                        <li><a href="#">Dashboard</a></li>
                                        <li class="active">Users</li>
                                    </ol>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /row -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="white-box">
                                        <h3 class="box-title">Users</h3>
                                        {{-- <p class="text-muted">Add class <code>.table</code></p> --}}
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>id</th>
                                                        <th>name</th>
                                                        <th>email</th>
                                                        <th>admin</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        @foreach($users as $user)
                                                        <tr>
                                                            <th>{{$user->id}}</th>
                                                            <th>{{$user->name}}</th>
                                                            <th>{{$user->email}}</th>
                                                            <th>{{$user->admin}}</th>
                                                            
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
                <!-- /.row -->
                <!-- row -->

                 <!-- /row -->
                 <div class="row">
                        <div class="col-sm-12">
                            <div class="white-box">
                                <h3 class="box-title">Researches</h3>
                                {{-- <p class="text-muted">Add class <code>.table</code></p> --}}
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                {{-- <th>sl.</th> --}}
                                                <th>id</th>
                                                <th>name</th>
                                                <th>description</th>
                                                <th>Members</th>
                                                <th>budget</th>
                                                <th>completion</th>
                                                <th>public</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @if(count($projects) > 0)
                                                @foreach($projects as $project)
                                                
                                                <tr>
                                                {{-- <th>{{$project->SL_NO}}</th> --}}
                                                    <th>{{$project->Project_ID}}</th>
                                                    <th>{{$project->Project_Title}}</th>
                                                    <th>{{$project->Project_details}}</th>
                                                    <th>@foreach ($project->members as $member)
                                                    {{$member->project_members}}
                                                        @endforeach
                                                    </th>
                                                    <th>{{$project->Budget}}</th>
                                                    <th>{{$project->Completion}}</th>
                                                    <th>{{$project->public}}</th>
                                                <th> <a href="/projects/{{$project->Project_ID}}/edit" class="btn btn-success">Edit</a> </th>
                                                    
                                                </tr>
                                               
                                                @endforeach
                                                @else 
                                                        <p>No projects found!</p>
                                                @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
        <!-- /.row -->
        <!-- row -->

        <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                <a id="projects"> <h3>Enter Research Project</h3></a>
                
                
                        <div class = "container">
                        <a id="add"> <h3>Add Project</h3></a>
                        </div>
                        <div class = "container">
                        {!! Form::open(['action' => 'ProjectsController_admin@store', 'method' ]) !!}
                        <div class = "form-group" class="col-sm-1">
                            {{Form::label('id','Id')}}
                            {{Form::text('id','',['class' => 'form-control', 'placeholder' => 'Id'] )}}
                        </div>
        
                        <div class = "form-group" class="col-sm-2">
                                {{Form::label('title','Title')}}
                                {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title'] )}}
                            </div>
        
                        <div class = "form-group" class="col-sm-2">
                                {{Form::label('details','Details')}}
                                {{Form::text('details','',['class' => 'form-control', 'placeholder' => 'Details'] )}}
                            </div>
                            
                            <div class = "form-group" class="col-sm-2">
                                {{Form::label('completion','Completion')}}
                                {{Form::text('completion','',['class' => 'form-control', 'placeholder' => 'Completion'] )}}
                            </div>
        
                            <div class = "form-group">
                                    {{Form::label('budget','Budget')}}
                                    {{Form::text('budget','',['class' => 'form-control', 'placeholder' => 'Budget'] )}}
                                </div>

                            <div class = "form-group" class="col-sm-2">
                                {{Form::label('public','Public')}}
                                {{Form::text('public','',['class' => 'form-control', 'placeholder' => 'Public'] )}}
                            </div>
        
                                {{Form::submit('Submit',['class' => 'btn'])}}
                            
                        {!! Form::close() !!}

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="white-box">                        
                                <div class = "container">
                                <a id="add"> <h3>Why Choose US</h3></a>
                                </div>
                                <div class = "container">

                                {!! Form::open(['url' => '/whychoose']) !!}
                                {{-- <div class = "form-group" class="col-sm-1">
                                    {{Form::label('id','Id')}}
                                    {{Form::text('id','',['class' => 'form-control', 'placeholder' => 'Id'] )}}
                                </div> --}}
                
                                <div class = "form-group" class="col-sm-2">
                                        {{Form::label('title','Title')}}
                                        {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title'] )}}
                                    </div>
                
                                <div class = "form-group" class="col-sm-2">
                                        {{Form::label('description','Description')}}
                                        {{Form::text('description','',['class' => 'form-control', 'placeholder' => 'Description'] )}}
                                    </div>
                                    
                                   
                
                                        {{Form::submit('Submit',['class' => 'btn'])}}
                                    
                                {!! Form::close() !!}
        
                                </div>
                            </div>


            <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">                        
                            <div class = "container">
                            <a id="add"> <h3>Add Profiles</h3></a>
                            </div>
                            <div class = "container">

                            {!! Form::open(['url' => '/addprofile', 'enctype' => 'multipart/form-data']) !!}
                            <div class = "form-group" class="col-sm-1">
                                {{Form::label('id','Id')}}
                                {{Form::text('id','',['class' => 'form-control', 'placeholder' => 'Id'] )}}
                            </div>
            
                            {{-- <div class = "form-group" class="col-sm-2">
                                    {{Form::label('name','Name')}}
                                    {{Form::text('name','',['class' => 'form-control', 'placeholder' => 'name'] )}}
                                </div> --}}
            
                            <div class = "form-group" class="col-sm-2">
                                    {{Form::label('date_of_birth','Date_of_birth')}}
                                    {{Form::text('date_of_birth','',['class' => 'form-control', 'placeholder' => 'date_of_birth'] )}}
                                </div>
                                <div class = "form-group" class="col-sm-2">
                                        {{Form::label('phone_number','Phone_number')}}
                                        {{Form::text('phone_number','',['class' => 'form-control', 'placeholder' => 'phone_number'] )}}
                                    </div>
                
                        
                                    <div class = "form-group" class="col-sm-2">
                                            {{Form::label('website','Website')}}
                                            {{Form::text('website','',['class' => 'form-control', 'placeholder' => 'website'] )}}
                                        </div>
                    
                                    <div class = "form-group" class="col-sm-2">
                                            {{Form::label('address','Address')}}
                                            {{Form::text('address','',['class' => 'form-control', 'placeholder' => 'address'] )}}
                                        </div>
                                        <div class = "form-group" class="col-sm-2">
                                                {{Form::label('education','Education')}}
                                                {{Form::text('education','',['class' => 'form-control', 'placeholder' => 'education'] )}}
                                            </div>
                                            <div class = "form-group" class="col-sm-2">
                                                    {{Form::label('profession','Profession')}}
                                                    {{Form::text('profession','',['class' => 'form-control', 'placeholder' => 'profession'] )}}
                                                </div>
                                                <div class = "form-group" class="col-sm-2">
                                                        {{Form::label('personal_experience','Personal_experience')}}
                                                        {{Form::text('personal_experience','',['class' => 'form-control', 'placeholder' => 'personal_experience'] )}}
                                                    </div>
                                                    <div class="form-group">
                                                            {{ Form:: file('file')}}
                                                            </div>
                                
                                
            
                                    {{Form::submit('Submit',['class' => 'btn'])}}
                                
                            {!! Form::close() !!}
    
                            </div>
                        </div>

{{-- <div class="row">
        <div class="white-box">
            <h3>Add Members</h3>
                        <div class="container">
                        {!! Form::open(['action' => 'membersController@store', 'method' ]) !!}

                        <div class = "form-group" class="col-sm-1">
                            {{Form::label('id','Id')}}
                            {{Form::text('id','',['class' => 'form-control', 'placeholder' => 'Id'] )}}
                        </div>
                        <div class = "form-group" class="col-sm-2">
                            {{Form::label('members','Members')}}
                            {{Form::text('members','',['class' => 'form-control', 'placeholder' => 'Members'] )}}
                        </div>

                        {{Form::submit('Submit',['class' => 'btn'])}}
                            
                        {!! Form::close() !!}
                        </div>
        </div>
</div> --}}
                 
    
       
            
        </div> 
            <!-- /.container-fluid -->
            {{-- <footer class="footer text-center"> 2017 &copy; Pixel Admin brought to you by wrappixel.com </footer> --}}
        
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
    <!--Counter js -->
    <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="../plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="../plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            heading: 'Welcome to Pixel admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
    </script>
</body>

</html>
