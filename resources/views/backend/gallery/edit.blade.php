@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Gallery Update
                            </div>
                            <div class="card-body">

                            @if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif   
                            <form action="{{URL::to('/backend/gallery/update',$gallery->id)}}" method="post">
                            @csrf
                                <div class="form-group">
                                    <label for="name">Image name:</label>
                                    <input type="text" class="form-control" value="{{$gallery->name}}" placeholder="Blog name" name="name" id="name">
                                </div>  
                                
                                <button type="submit" class="btn btn-primary">Update</button>
                                </form>

                            </div>
                        </div>
                    </div>
@endsection