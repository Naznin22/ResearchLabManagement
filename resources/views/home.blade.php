@extends('layouts.app03')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-success" role="alert">
                        <p> You are logged in as a User! </p>
                    </div>
                   
                </div>
                
            </div>
        </div>
    </div>
</div>
<h3>
        {{-- <form action="/mainhome">
            <input type="submit" value="Home" />
        </form> --}}
    </h3>
@endsection
