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
                            <form action="{{URL::to('/backend/team/create')}}" method="post">
                            @csrf
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter name" name="name" id="name">
                                </div>
                                
                                <div class="form-group">
                                    <label for="desigation">Desigation:</label>
                                    <input type="text" class="form-control" placeholder="Enter desigation" name="desigation" id="desigation">
                                </div>
                                
                                <div class="form-group">
                                    <label for="facebook">Facebook:</label>
                                    <input type="text" class="form-control" placeholder="Enter facebook" name="facebook" id="facebook">
                                </div>
                                
                                <div class="form-group">
                                    <label for="linkedin">Linkedin:</label>
                                    <input type="text" class="form-control" placeholder="Enter linkedin" name="linkedin" id="linkedin">
                                </div>
                                
                                <div class="form-group">
                                    <label for="twitter">Twitter:</label>
                                    <input type="text" class="form-control" placeholder="Enter twitter" name="twitter" id="twitter">
                                </div>

                                <div class="form-group">
                                    <label for="instagram">Instagram:</label>
                                    <input type="text" class="form-control" placeholder="Enter instagram" name="instagram" id="instagram">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Update</button>
                                </form>

                            </div>
                        </div>
                    </div>
@endsection