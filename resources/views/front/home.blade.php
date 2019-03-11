@extends('layouts.app')
@section('title')



    welcome to ArduLine
@endsection
@section('content')
    <div class="container-fluid con1">
        <div class="row justify-content-center ">
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

    <div class="container-fluid mt-5 bg-white">
        <div class="row justify-content-center">

            <div class="col-6 col-lg-4   col-auto" text-align="center">
                <img src="{{asset('images/cart.svg')}}" height="400px" width="400px">
            </div>
            <div class="col-6 col-lg-6  pr-5 center ">


                    <h5 class="awesome">ArduLine is a startup that started in the garage of d3stodio company,
                        and will help you to start  up your electronical project</h5>



                </div>

            </div>
        </div>





    <div class="container-fluid con2">
        <div class="row justify-content-end">
            <div class="col">
            <div id="map">

            </div>
            </div>
        </div>
    </div>

    <div class="container-fluid footer">

 <h5 class="pt-2">all the copyrights are reserved to ArduLine <i class="far fa-copyright"></i></h5>
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

@endsection
@section('map')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfv9wpah2kETpIww92WgsnScfkw_jA--4&callback=initMap"
            async defer></script>

    @endsection



