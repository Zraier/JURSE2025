@extends('layout.blank')
@section('image','assets/img/keynote.jpg')
@section('titre','JURSE 2025')
@section('header-content')
<header class="masthead" style="background-image: url('@yield('image')')" >
    
</header>
@endsection
@section('content')
<div class="container mb-5">
    <div class="text-center">
        <h3>Keynote Speakers</h3>
        <br>
        <div class="row">

            @foreach ($SpeakerData as $key=>$item)
                
            
            <div class="col-lg-5 text-start mb-5">
                <h4 class="blue-color">{{ $item->firstname }} {{ $item->lastname }}</h4>

                <p>
                    {{ $item->description }}
                </p>

                website: <a class="text-decoration-underline" href="{{ $item->website }}" target="_blank">{{ $item->website }}</a>
            </div>

            <div class="col-lg-2 py-5 px-4 mb-5">
                
            </div>
            @if ($nextitem = $SpeakerData->get($key + 1))
            <div class="col-lg-5 text-start mb-8">
                <h4 class="blue-color">{{ $nextitem->firstname }} {{ $nextitem->lastname }}</h4>

                <p>
                    {{ $nextitem->description }}
                </p>

                website: <a class="text-decoration-underline" href="{{ $nextitem->website }}" target="_blank">{{ $nextitem->website }}</a>
            </div>
            @endif
            @endforeach
        </div>
    </div>

</div>
@endsection