@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Services list
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @if(!empty($servicess))
                                           @foreach($servicess as $services)
                                        <tr>
                                            <td>{{$services->id}}</td>
                                            <td><img src="{{URL::to('uploads',$services->services_img)}}" height="100px" ></td>
                                            <td>{{$services->name}}</td>
                                            <td>{{$services->description}}</td>
                                            <td>
                                                <a href="{{URL::to('/backend/servicess/edit',$services->id)}}" class="btn btn-primary">Edit</a>
                                                <a href="{{URL::to('/backend/servicess/delete',$services->id)}}"  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                            </td>
                                            </tr>
                                            @endforeach
                                        @else
                                          <tr>Services not found</tr>    
                                        @endif    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection