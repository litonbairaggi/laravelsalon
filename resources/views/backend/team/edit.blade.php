@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                            Team Update
                            </div>
                            <div class="card-body">

                            @if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif   
                            <form action="{{URL::to('/backend/team/update',$team->id)}}" method="post">
                            @csrf
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" value="{{$team->name}}" placeholder="Enter name" name="name" id="name">
                                </div>
                                
                                <div class="form-group">
                                    <label for="desigation">Desigation:</label>
                                    <input type="text" class="form-control" value="{{$team->desigation}}" placeholder="Enter desigation" name="desigation" id="desigation">
                                </div>
                                
                                <div class="form-group">
                                    <label for="facebook">Facebook:</label>
                                    <input type="text" class="form-control" value="{{$team->facebook}}" placeholder="Enter facebook" name="facebook" id="facebook">
                                </div>
                         
                                <button type="submit" class="btn btn-primary">Update</button>
                                </form>

                            </div>
                        </div>
                    </div>
@endsection