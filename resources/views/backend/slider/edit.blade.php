@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                            Slider Update
                            </div>
                            <div class="card-body">

                            @if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif   
                            <form action="{{URL::to('/backend/slider/update',$slider->id)}}" method="post">
                            @csrf
                                <div class="form-group">
                                    <label for="name">Slider name:</label>
                                    <input type="text" class="form-control" value="{{$slider->name}}" placeholder="Slider name" name="name" id="name">
                                </div>
                                
                                <div class="form-group">
                                    <label for="description">Description:</label><br>
                                        <textarea rows="4" cols="50" class="form-control" name="description" id="description" placeholder="Description text hare...">{{$slider->description}}</textarea>
                                </div>    
                                
                                <button type="submit" class="btn btn-primary">Update</button>
                                </form>

                            </div>
                        </div>
                    </div>
@endsection