@extends('layout.blank')
@section('image','assets/img/social_event.jpg')
@section('titre','JURSE 2025')
@section('header-content')
<header class="masthead" style="background-image: url('@yield('image')')" >
    
</header>
@endsection
@section('content')
<div class="container mb-5">
    <div class="text-center">
        <h3>Links To our Social Events</h3>
        <br>
        <div class="row">

            @foreach ($LinkData as $key=>$item)
                
            
            <div class="col-lg-5 text-start mb-5">
                

                <p>
                  <h3> {{ $item->name }}</h3> 
                </p>

                <h4 class="blue-color"> <a class="text-decoration-underline" href="{{ $item->href }}" target="_blank">{{ $item->href }}</a></h4>
            </div>

           
            @endforeach
        </div>
    </div>

</div>
@endsection