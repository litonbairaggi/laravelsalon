@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                            Gallery Create
                            </div>
                            <div class="card-body">

                            @if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif   
                            <form action="{{URL::to('/backend/gallery/store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="name">Image name:</label>
                                    <input type="text" class="form-control" placeholder="Image name" name="name" id="name">
                                </div>
                                
                                <div class="form-group">
                                    <label for="name">Gallery Image:</label>
                                    <input type="file" class="form-control" name="gallery_img">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
@endsection