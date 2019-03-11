@extends('admin.layouts.master')
@include('admin.layouts.navbar')
@section('content')









    <div class="row justify-content-center">
        <div class="col-10 m-5">
            <div class="card bg-dark text-light">
                <div class="card-header" >
                    <h1 class=" text-center">
                        welcome admin {{auth()->user()->name}}
                    </h1>
                </div>
            </div>
        </div>
    </div>
@endsection