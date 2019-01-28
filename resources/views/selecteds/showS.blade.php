@extends('layouts.app02')

@section('content')

<header>
         <div class="container">
                    <div id="branding">
                       <a href="/mainhome"> <h1>Research Lab Management</h1></a>
                    </div>
                    <nav>
                     <ul>
                         <li> <a href="index">Researches</a> </li>
                         <li> <a href="Workshops.html">Workshops</a> </li>
                         <li> <a href="Newsportal.html">News</a> </li>
                         <li> <a href="indexApply">Applications</a> </li>
                         <li class="current pulse animated"> <a href="Create">Select</a> </li>
                         <li> <a href="indexS">Selecteds</a> </li>
                     </ul>
                    </nav>	
                </div>
 </header>
 <section id="showcaseResearches">
		<div class = "container">
                <a id="projects"> <h3>Selecteds</h3></a>
                </div>

               
        </section>

        <section id="blank">
			<div class="container">
				
			</div>
                </section>
        
      
       

		
                {{-- <section id = "All">
                                
                </section> --}}
        
      
@endsection 


