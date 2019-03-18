@extends('admin.layouts.master')
@include('admin.layouts.navbar')
@section('content')
    <div class="row justify-content-center">
        <div class="col-10 m-5">
            <div class="card bg-dark text-light">
                <div class="card-header">
                    <div class="row justify-content-between">
                        <div class="col"><h5>products</h5></div>

                        <div class="col"><a class="btn btn-sm btn-primary float-right " href="/admin/dashboard/product/create"> add new  <i class="fas fa-plus"></i></a></div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table text-light">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th> product  name</th>
                            <th>section</th>
                            <th>price</th>
                            <th>discount</th>
                            <th>image</th>
                            <th>edit</th>
                            <th>delete</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->section_id}}</td>
                                <td>{{$product->price}} </td>
                                <td>{{$product->discount}} </td>
                                <td>
                                    <div class="card card-width">
                                    <image width="100px" heigh="100px" src="{{url('images',$product->image)}}"></image>
                                    </div>

                                </td>
                                <td>
                                    <div class="btn-group" role="group" >
                                        <a class="btn btn-warning rounded-circle" href="/admin/dashboard/product/{{$product->id}}/edit"><i class="fas fa-pencil-alt"></i></a>
                                    </div>
                                </td>
                                <td>
                                    <form action="/admin/dashboard/product/{{$product->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger rounded-circle"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection