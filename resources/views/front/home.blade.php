@extends('layouts.app')
@section('title')



     ArduLine
@endsection
@section('content')
    <div class="container-fluid con1 ">
        <div class="row justify-content-center  ">
            <div class="col-11 col-brand">
                <div id="circle">

                    <div id="one" class="huda">B</div>
                    <div id="two"class="huda">U</div>
                    <div id="three"class="huda">I</div>
                    <div id="one"class="huda">L</div>
                    <div id="two"class="huda">D</div>
                    <div id="three"></div>
                    <div id="one"></div>
                    <div id="two"></div>
                    <div id="three"></div>





                    <div id="two"class="huda">Y</div>
                    <div id="three"class="huda">O</div>
                    <div id="one"class="huda">U</div>
                    <div id="two"class="huda">R</div>
                    <div id="three"></div>
                    <div id="one"></div>
                    <div id="two"></div>
                    <div id="three"></div>
                    <div id="one"></div>




                    <div id="three"class="huda">P</div>
                    <div id="one"class="huda">R</div>
                    <div id="two"class="huda">O</div>
                    <div id="three"class="huda">J</div>
                    <div id="one"class="huda">E</div>
                    <div id="two"class="huda">C</div>
                    <div id="three"class="huda">T</div>
                    <div id="one"></div>
                    <div id="two"></div>


                    <div id="one"class="huda">N</div>
                    <div id="two"class="huda">O</div>
                    <div id="three"class="huda">W</div>
                    <div id="one"></div>
                    <div id="two"></div>
                    <div id="three"></div>
                    <div id="one"></div>
                    <div id="two"></div>
                    <div id="three"></div>


                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 bg-white mb-5">
        <div class="row  justify-content-between ml-5 mr-5">
            <div class="col-12 col-lg-3   col-auto mb-5 mt-5" align="center">
                <img src="{{asset('images/online.svg')}}" height="300px" width="300px">
                <h3 class="awesome a"> Make Your plan </h3>
            </div>
            <div class="col-12 col-lg-3    col-auto mt-5" align="center">
                <img src="{{asset('images/cart.svg')}}" height="300px" width="300px">
                <h3 class="awesome a"> Buy From ArduLine</h3>
            </div>
            <div class="col-12 col-lg-3  col-auto mt-5" align="center">
                <img src="{{asset('images/process.svg')}}" height="300px" width="300px">
                <h3 class="awesome a"> Start up Your Project </h3>
            </div>
        </div>

        </div>





    <div class="container-fluid con2 mt-5">
        <div class="row justify-content-end">
            <div class="col">
            <div id="map">

            </div>
            </div>
        </div>
    </div>







@endsection
@section('script')

    function initMap(){
    var option ={
    zoom:14,
    center:{lat:33.313608,lng:44.438548}
    }
    var map = new google.maps.Map(document.getElementById('map'), option);

    var marker = new google.maps.Marker({
    position:{
    lat:33.313608,lng:44.438548},
    map:map
    })
    }


    $(window).scroll(function() {

    if ($(this).scrollTop()>0)
    {
    $('.a').fadeIn();
    }
    else
    {
    $('.a').fadeOut();
    }
    });


@endsection
@section('map')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfv9wpah2kETpIww92WgsnScfkw_jA--4&callback=initMap"
            async defer></script>

    @endsection



