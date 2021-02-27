@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Gallery list
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>ImageName</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>ImageName</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @if(!empty($gallerys))
                                           @foreach($gallerys as $gallery)
                                        <tr>
                                            <td>{{$gallery->id}}</td>
                                            <td><img src="{{URL::to('uploads',$gallery->gallery_img)}}" height="100px"></td>
                                            <td>{{$gallery->name}}</td>
                                            <td>
                                                <a href="{{URL::to('/backend/gallery/edit',$gallery->id)}}" class="btn btn-primary">Edit</a>
                                                <a href="{{URL::to('/backend/gallery/delete',$gallery->id)}}"  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                            </td>
                                            </tr>
                                            @endforeach
                                        @else
                                          <tr>Blog not found</tr>    
                                        @endif    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection