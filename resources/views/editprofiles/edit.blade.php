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
    <!-- Bootstrap Core CSS -->
    {{-- <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    {{-- <link href="css/styleAdmin.css" rel="stylesheet"> --}}
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
    {{-- <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div> --}}
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
               

               

       


                <div class="row">
                        <div class="col-sm-12">
                            <div class="white-box">                        
                                <div class = "container">
                                <a id="add"> <h3>Edit Profiles</h3></a>
                                </div>
                                <div class = "container">
    
                                {!! Form::open(['action' => array('profilesController@update', $id),'method'=>'POST', 'enctype' => 'multipart/form-data']) !!}
                                <div class = "form-group" class="col-sm-1">
                                    {{Form::label('id','Id')}}
                                    {{Form::text('id',$profile->id,['class' => 'form-control', 'placeholder' => 'Id'] )}}
                                </div>
                
                
                                <div class = "form-group" class="col-sm-2">
                                        {{Form::label('date_of_birth','Date_of_birth')}}
                                        {{Form::text('date_of_birth',$profile->date_of_birth,['class' => 'form-control', 'placeholder' => 'date_of_birth'] )}}
                                    </div>
                                    <div class = "form-group" class="col-sm-2">
                                            {{Form::label('phone_number','Phone_number')}}
                                            {{Form::text('phone_number',$profile->phone_number,['class' => 'form-control', 'placeholder' => 'phone_number'] )}}
                                        </div>
                    
                            
                                        <div class = "form-group" class="col-sm-2">
                                                {{Form::label('website','Website')}}
                                                {{Form::text('website',$profile->website,['class' => 'form-control', 'placeholder' => 'website'] )}}
                                            </div>
                        
                                        <div class = "form-group" class="col-sm-2">
                                                {{Form::label('address','Address')}}
                                                {{Form::text('address',$profile->address,['class' => 'form-control', 'placeholder' => 'address'] )}}
                                            </div>
                                            <div class = "form-group" class="col-sm-2">
                                                    {{Form::label('education','Education')}}
                                                    {{Form::text('education',$profile->education,['class' => 'form-control', 'placeholder' => 'education'] )}}
                                                </div>
                                                <div class = "form-group" class="col-sm-2">
                                                        {{Form::label('profession','Profession')}}
                                                        {{Form::text('profession',$profile->profession,['class' => 'form-control', 'placeholder' => 'profession'] )}}
                                                    </div>
                                                    <div class = "form-group" class="col-sm-2">
                                                            {{Form::label('personal_experience','Personal_experience')}}
                                                            {{Form::text('personal_experience',$profile->personal_experience,['class' => 'form-control', 'placeholder' => 'personal_experience'] )}}
                                                        </div>
                                                        
                                                           
                                    
                                    
                                                        {{ Form::hidden('_method','PUT') }}
                                        {{Form::submit('Submit',['class' => 'btn'])}}
                                    
                                {!! Form::close() !!}
        
                                </div>
                            </div>
    
       
               
            <!-- /.container-fluid -->
            {{-- <footer class="footer text-center"> 2017 &copy; Pixel Admin brought to you by wrappixel.com </footer> --}}
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
