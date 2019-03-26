@extends('layouts.app')
@section('title')
    Arduline-store
 @endsection
@section('body')
    <style>
        body{
            background-color: #F2F3F7 !important;
        }
    </style>
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
                        <a href="/sections/{{$section->id}}" class="list-group-item list-group-item-action a-color  list-padding">
                            {{$section->name}}
                        </a>

                    @endforeach
                </div>
            </div>

                    <div class="col-12 col-lg-9 mt-4">
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


        <div class="row mr-5 mt-5 mb-5">
            @foreach($products as $product)
                <div class="col-12 col-lg-3 mt-5">
                    <a  class="c-pointer" >
                        <div class="card card-shadow">
                            <div class="overflow-hidden">
                                <img class="card-img-top max-height zoom" src="{{url('images',$product->image)}}" alt="card image">

                            </div>

                            <div class="card-body">



                                    <div class="row justify-content-between">
                                        <div class="col-12"><h4 class="card-title">{{$product->name}}</h4></div>
                                        <div class="col-12"><p class="card-text price-style">{{$product->price}}$<span class="ml-2"><strike>@if($product->discount){{$product->discount}}$ @endif</strike></span> </p></div>


                                    </div>
                                <div class="row mt-3 justify-content-center">
                                <div class="col col-auto"> @if (auth()->check())
                                        <a class="btn btn-style " href="/cart/{{$product->id}}" role="button">Add to Cart<i class="fas fa-cart-arrow-down"></i></a>
                                    @else
                                        <a class="btn btn-style " data-toggle="tooltip" data-placement="bottom" title="you have to login first " role="button"> Add to Cart<i class="fas fa-cart-arrow-down"></i></a>
                                    @endif</div></div>
                                </div>
                                </div>


                    </a>
                </div>

            @endforeach
        </div>


    </div>











 @endsection

@section('script')

    @endsection