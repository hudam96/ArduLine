@extends('layouts.app')
@section('title')
    Arduline-shopping cart
    @endsection
@section('content')
<div class="container">
    @if(\Illuminate\Support\Facades\Session::has('card'))
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($products as $product)
                                <li class="list-group-item">
                                <strong>{{$product['item']['name']}}</strong>
                                <span class="badge badge-success">{{$product['price']}}$</span>
                                </li>
                            @endforeach
                                <a class="btn btn-primary" href="/checkout" role="button">checkout</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col"><h1>total price:{{$totalprice}}$</h1></div>
    @else()
        <div class="col-6 mt-5"> <div class="card"> <div class="card-body"><h3> we will receive you order so soon , maybe when the  company founder ,
                        the developer and the boss know how to handle this issue, thank you for your time </h3></div></div></div>

    @endif

        </div>

</div>

<div class="container-fluid footer">

    <h5 class="pt-2">all the copyrights are reserved to ArduLine <i class="far fa-copyright"></i></h5>
</div>
@endsection

@section('script')

    @endsection