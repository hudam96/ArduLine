@extends('admin.layouts.master')
@include('admin.layouts.navbar')
@section('content')
    <div class="container con1">
        <div class="row justify-content-center">
            <div class="col-10 m-5">
                @include('admin.layouts.errors')
                <div class="card">
                    <div class="card-body bg-dark text-light">
                        <form action="/admin/dashboard/section/{{$section->id}}" method="post">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="name">section name</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{$section->name}}">
                                <div class="row mt-5">
                                    <div class="col">
                                        <button class="btn btn-primary" type="submit">submit</button>
                                        <a href="/admin/dashboard/section" class="btn btn-primary">back</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection