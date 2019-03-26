@extends('layouts.app')
@section('title')

Arduline-{{$section->name}}
    @endsection
@section('content')
@section('body')
    <style>
        body{
            background-color: #F2F3F7 !important;
        }
    </style>
@endsection

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

        <div class="col-12 col-lg-9">

            <div class="row ">
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

        </div>
    </div>

@endsection
@section('script')


@endsection