@extends('layouts.appNew')

@section('content')
<div id="home" class="form-style" style="background:url(images/grey.png) no-repeat center center fixed">
        
        <div class="landing-text">
                        <div class="containerResearches">
                        <form action="{{route('projects.index')}}"  method="get">
                                <input type="text" class="form-control" name="s" class="form-inline" placeholder="Search Project by Name"
                                value=" {{isset($s) ? $s : '' }} ">
                                <button type="submit" class ="btn btn-success">Search</button>
                         </form>
                                        <ul>
                                                        <li><a href="#projects"> >> Our Researches  </a></li>
                                                        <li><a href="#add"> >> Add new project  </a></li>
                                        </ul>
                                       
                     
        
</div>
</div>
</div>

 

 <style>
                .applicants {
                       width: 25%;
                       float: left;
                       padding: 15px;
                       border: 1px solid red;
                }
               </style>
 {{-- <section id="showcaseResearches">
		<div class="containerResearches">
			<form>
				<input type="text" placeholder="Search Project by Name">
				<button type="submit" class ="button_1">Search</button>
			</form>
			<ul>
				<li><a href="#projects"> >> Our Researches  </a></li>
				<li><a href="#invention_magazines"> >> Publications  </a></li>
				<li><a href="Researches.html"> >> People  </a></li>
			</ul>
		</div>
	</section>--}}

		<section id="blank">
			<div class="container">
				
			</div>
                </section> 
                <section id = "All">
                                <div class = "container">
                                <a id="projects"> <h3>Projects </h3></a>
                                </div>
                </section>
        <div id="row">
                <div class="container">
        @if(count($projects) > 0)
                @foreach($projects as $project)
                        
                                <div class="card">
                                        <div class="container">                   
                        <h2><a href="/projects/{{$project->Project_ID}}">  {{$project->Project_Title}}</a></h2>
                        </div>
                        </div>
                        
                        
                 @endforeach
        @else 
                <p>No projects found!</p>
        @endif
         {{ $projects->appends([ 's' => $s ])->links() }}
        </div>
        </div>
        
@endsection 


