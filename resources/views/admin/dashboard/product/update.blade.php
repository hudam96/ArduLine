@extends('admin.layouts.master')
@include('admin.layouts.navbar')
@section('content')
    <div class="container con1">
        <div class="row justify-content-center">
            <div class="col-10 m-5">
                @include('admin.layouts.errors')
                <div class="card">
                    <div class="card-body bg-dark text-light">
                        <form action="/admin/dashboard/product/{{$product->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="name" >product name</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{old('name',$product->name)}}">
                            </div>
                            <div class="form-group">
                                <label for="section_id" value="">section</label>
                                <select name="section_id" id="section_id" class="form-control">
                                    @foreach($sections as $section)
                                        <option value="{{$section->id}}">{{$section->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="price">price</label>
                                <input type="text" class="form-control" name="price" id="price" value="{{old('price',$product->price)}}">
                            </div>
                            <div class="form-group">
                                <label for="discount">discount</label>
                                <input type="text" class="form-control" name="discount" id="discount" value="{{old('discount',$product->discount)}}">
                            </div>
                            <div class="form-group">
                                <label for="image">image</label>
                                <br>
                                <input type="file" class=" bg-dark" name="image" id="image"  value="{{$product->image}}">
                            </div>
                            <div class="row mt-5">
                                <div class="col">
                                    <button class="btn btn-primary" type="submit">submit</button>
                                    <a href="/admin/dashboard/product" class="btn btn-primary">back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection