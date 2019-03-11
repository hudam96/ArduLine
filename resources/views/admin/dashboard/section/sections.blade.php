@extends('admin.layouts.master')
@include('admin.layouts.navbar')
@section('content')
    <div class="row justify-content-center">
        <div class="col-10 m-5">
            <div class="card bg-dark text-light">
                <div class="card-header">
                    <div class="row justify-content-between">
                        <div class="col"><h5>sections</h5></div>

                        <div class="col"><a class="btn btn-sm btn-primary float-right " href="/admin/dashboard/section/create"> add new  <i class="fas fa-plus"></i></a></div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table text-light">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th> section name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($sections as $section)
                                <tr>
                                    <td>{{$section->id}}</td>
                                    <td>{{$section->name}}</td>
                                    <td>
                                        <div class="btn-group" role="group" >
                                            <a class="btn btn-warning rounded-circle" href="/admin/dashboard/section/{{$section->id}}/edit"><i class="fas fa-pencil-alt"></i></a>
                                        </div>
                                    </td>
                                    <td>
                                            <form action="/admin/dashboard/section/{{$section->id}}" method="post">
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