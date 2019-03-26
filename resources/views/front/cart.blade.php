@extends('layouts.app')
@section('title')
    Arduline-shopping cart
    @endsection
@section('content')
<div class="container">
    @if(\Illuminate\Support\Facades\Session::has('card'))
        <div class="row justify-content-center mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th> Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product )
                        <tr>
                            <td><img src="{{url('images',$product['image'])}}" width="100px" height="100px" class="mr-5">
                                <strong>{{$product['item']['name']}}</strong>
                            </td>
                            <td><strong >{{$product['pricetotal']}}</strong></td>
                            <td><strong>{{$product['price']}}$</strong></td>

                        </tr>
                     @endforeach
                </tbody>

            </table>





            <div class="col"><h1>total price:{{$totalprice}}$</h1></div>
            <a class="btn btn-primary btn-sm" href="/checkout" role="button">checkout</a>

    @else()
        <div class="col-6 mt-5"> <div class="card"> <div class="card-body"><h3> Oops! there's nothing in your Cart </h3></div></div></div>

    @endif

        </div>

</div>


@endsection

@section('script')

    @endsection