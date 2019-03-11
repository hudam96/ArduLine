@extends('admin.layouts.master')
@section("content")
   <div class="container-fluid con1 m-0">
    <div class="row justify-content-center ">
        <div class="col-md-5 mt-5 ">
            @include("admin.layouts.errors")
            <div class="card bg-dark text-light">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form action="/admin/login" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" name="username" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" name="password" type="password" class="form-control">
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <button class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection