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
    {{-- <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->--}}
     <link href="css/styleAdmin.css" rel="stylesheet">  
    <!-- color CSS -->
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    

  
        <style>
            /* The side navigation menu */
            .sidebar2 {
                  margin: 0;
                  padding: 0;
                  width: 200px;
                  background-color: #f1f1f1;
                  position: fixed;
                  height: 100%;
                  overflow: auto;
                }
                
                /* Sidebar links */
                .sidebar2 a {
                  display: block;
                  color: black;
                  padding: 16px;
                  text-decoration: none;
                }
                
                /* Active/current link */
                .sidebar2 a.active {
                  background-color: #4CAF50;
                  color: white;
                }
                
                /* Links on mouse-over */
                .sidebar2 a:hover:not(.active) {
                  background-color: #555;
                  color: white;
                }
                
                /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
                div.content {
                  margin-left: 200px;
                  padding: 1px 16px;
                  height: 1000px;
                }
                
                /* On screens that are less than 700px wide, make the sidebar into a topbar */
                @media screen and (max-width: 700px) {
                  .sidebar2 {
                    width: 100%;
                    height: auto;
                    position: relative;
                  }
                  .sidebar2 a {float: left;}
                  div.content {margin-left: 0;}
                }
                
                /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
                @media screen and (max-width: 400px) {
                  .sidebar2 a {
                    text-align: center;
                    float: none;
                  }
                }
            </style>

</head>

<body>

        <div class="container">
                <nav class="navbar navbar-header " role="navigation">
                        <div class="container=fluid">
                            {{-- <div class="navbar-header"> --}}
                                {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                                    <span class="sr-only">Toggle</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button> --}}
                                
                                <a class="navbar-brand"  style="color:#dadada" href="/">Research Lab Management</a>
                             </div> 
                            <div class="collapse navbar-collapse" id="navbar-collapse-main">
                                <ul class="nav navbar-nav navbar-right">
                                    
                                     @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" style="color:#dadada" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>
                
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                        
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </nav>
                <!-- Left navbar-header -->
                
                <!-- Left navbar-header end -->
                <!-- The sidebar -->
<div class="sidebar2">
        <a href="/mainhome">Dashboard</a>
        <a href="indexApply">Applications</a>
        <a class="active"  href="profilesadmin">Profiles</a>
        <a href="#about">About</a>
      </div>




        
<div class="container">
        <div class="row" id="profiles">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Profiles</h3>
                        
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Date of birth</th>
                                        <th>Phone number</th>
                                        <th>Website</th>
                                        <th>Address</th>
                                        <th>Education</th>
                                        <th>Profession</th>
                                        <th>Personal Experience</th>
                                        <th>Profile Photo</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($profiles as $profile)
                                        <tr>
                                                <th>{{$profile->id}}</th>
                                                <th>{{$profile->user->name}}</th>
                                                <th>{{$profile->date_of_birth}}</th>
                                                <th>{{$profile->phone_number}}</th>
                                                <th>{{$profile->website}}</th>
                                                <th>{{$profile->address}}</th>
                                                {{-- <th>{{$profile->education}}</th> --}}
                                                <th>@foreach ($profile->educations as $education)
                                                    {{$education->education}}<br><br>
                                                @endforeach
                                            </th>
                                                

                                                <th>{{$profile->profession}}</th>
                                                <th>{{$profile->personal_experience}}</th>
                                                <th><embed width="200px" height="250px" src="/storage/file/{{$profile->file}}"> </th>
                                                <th> <a href="/profilesadmin/{{$profile->id}}/edit/" class="btn btn-success">Edit</a> </th>
                                            
                                                <th>
                                                        {!! Form::open(['action' => ['profilesController@destroy',$profile->id] , 'method'=>'POST', 'class'=> 'pull-right' ]) !!}
                                                            {{Form::hidden('_method', 'DELETE')}}
                                                        {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                
                                                        {!! Form::close() !!}
                                                </th>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        </div>

</div>

<div class="row">
        <div class="col-sm-12">
            <div class="white-box">                        
                <div class = "container">
                <a id="add"> <h3>Add Profiles</h3></a>
                </div>
                <div class = "container">
    
                {{-- {!! Form::open(['url' => '/addprofile', 'enctype' => 'multipart/form-data']) !!} --}}
                {!! Form::open(['action' => 'profilesController@store', 'method'=>'POST','enctype' => 'multipart/form-data' ]) !!}
                <div class = "form-group" class="col-sm-1">
                    {{Form::label('id','Id')}}
                    {{Form::text('id','',['class' => 'form-control', 'placeholder' => 'Id'] )}}
                </div>
    
                
    
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
    
</body>
</html>