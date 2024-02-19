@extends('layout.blank')
@section('image','assets/img/home-bg.jpg')
@section('titre','JURSE 2025')
@section('header-content')
<header class="masthead" style="background-image: url('@yield('image')')">
<div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <div class="site-heading">
                <h2>JOINT URBAN REMOTE SENSING EVENT</h2>
                <span class="subheading">Ramada Plaza Hotel, Tunisia</span>
                <span>   05 - 07 May 2025</span>
            </div>
        </div>
    </div>
</div>
</header>
@endsection

@section('content')
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-10">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <button type="button" class="btn btn-primary" href="" style="width: 500px" >IEEE JURSE 2025 PROCEEDINGS </button>
                            
                        <button type="button" class="btn btn-warning" href="" style="width: 500px"  >IEEE J-STARS CALL FOR PAPERS </button>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        The Joint <a href="" ><b style="text-decoration: underline" > Urban Remote Sensing Event (JURSE)</b></a> is a forum of excellence where researchers, practitioners and students present, share, and discuss their latest findings and results. A very dynamic version of the JURSE organized by the Remote Sensing Lab of FORTH in Heraklion, Greece in May 2023.

                        This event is committed to introduce innovative methodologies and technological resources recently employed to investigate the manifold aspects of the urban environment through orbital and airborne remote sensing data.
                        
                        Emerging topics like new methods for urban land cover and land use classification with detailed discrimination of urban targets, 3D modeling of urban buildings, forecast and impact assessment of natural and man-made hazards in urban areas, urban social studies, urban ecology, urban climatology, as well as data fusion, algorithms and techniques for Earth Observation data interpretation were approached.
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                       <img src="assets\img\jurse-group-photo.png" width="1000px">
                    </div>
                    <!-- Divider-->
                    <hr class="my-8" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        
                            <h2 class="post-title" style="text-align: center">Meet the organizers
                        <br>
                        <a href="">
                            <img src="assets/img/rslab.png" alt="">
                        </a>
                        <a href="">
                            <img src="assets/img/forth.png" width="400px" alt="">
                        </a>
                    </h2>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                    
                </div>
            </div>
        </div>      
@endsection