@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Team list
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Facebook</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Facebook</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @if(!empty($teams))
                                           @foreach($teams as $team)
                                        <tr>
                                            <td>{{$team->id}}</td>
                                            <td><img src="{{ URL::to('uploads',$team->team_img)}}" height="100px"></td>
                                            <td>{{$team->name}}</td>
                                            <td>{{$team->desigation}}</td>
                                            <td>{{$team->facebook}}</td>
                                            <td>
                                                <a href="{{URL::to('/backend/team/edit',$team->id)}}" class="btn btn-primary">Edit</a>
                                                <a href="{{URL::to('/backend/team/delete',$team->id)}}"  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                            </td>
                                            </tr>
                                            @endforeach
                                        @else
                                          <tr>Team not found</tr>    
                                        @endif    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection