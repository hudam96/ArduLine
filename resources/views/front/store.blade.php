@extends('layouts.app')
@section('title')
    Arduline-store
 @endsection
@section('content')
    <div class="container-fluid store-con">
        <div class="row">
            <div class="col-12 col-lg-3 section-col mt-4">
                <div class="list-group sections-list">
                    <div class="list-group-item list-top ">
                        sections
                    </div>
                    @foreach($sections as $section)
                        <a href="/sections/{{$section->id}}" class="list-group-item list-group-item-action a-color ">
                            {{$section->name}}
                        </a>

                    @endforeach
                </div>
            </div>
            <div class="col-12 col-lg-9 mt-4">
                <div class="row">
                    <div class="col-11">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('images/arduino2.png')}}" class="d-block w-100" alt="..." height="353px">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('images/huawei.jpg')}}" class="d-block w-100" alt="..." height="353px">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('images/arduino.png')}}" class="d-block w-100" alt="..." height="353px">
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="row justify-content-center">
                        @foreach($products as $product)
                        <div class="col-5 mt-5">
                            <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                <div class="mainflip">
                                    <div class="frontside">
                                        <div class="card" style="width:20rem;">
                                            <img class="card-img-top img- fluid" src="{{url('images',$product->image)}}" alt="card image">
                                            <div class="card-body">
                                                <h4 class="card-title">{{$product->name}}</h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="backside">
                                        <div class="card" style="width:20rem;">
                                            <div class="card-body">
                                                <h4 class="card-title">{{$product->name}}</h4>
                                                <p class="card-text">{{$product->price}}$</p>
                                                @if (auth()->check())
                                                    <a class="btn btn-style " href="/cart/{{$product->id}}" role="button"><i class="fas fa-cart-arrow-down"></i></a>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
            </div>
            </div>
        </div>
    </div>


<br>
    <br><br><br>
    <br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>







    <div class="container-fluid footer">

        <h5 class="pt-2">all the copyrights are reserved to ArduLine <i class="far fa-copyright"></i></h5>
    </div>
 @endsection

@section('script')

    @endsection