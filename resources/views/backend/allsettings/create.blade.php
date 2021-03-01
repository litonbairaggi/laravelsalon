@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                            All Settings
                            </div>
                            <div class="card-body">

                            @if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif   
                            <form action="{{URL::to('/backend/allsettings/store')}}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <input type="hidden" name="setting_id" value="{{$settingProfile->id}}">

                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" placeholder="Enter email" name="email" id="email" value="{{$settingProfile->email}}">
                                </div>
                                
                                <div class="form-group">
                                    <label for="facebook">Facebook:</label>
                                    <input type="text" class="form-control" placeholder="Enter facebook" name="facebook" id="facebook" value="{{$settingProfile->facebook}}">
                                </div>
                                
                                <div class="form-group">
                                    <label for="linkedin">Linkedin:</label>
                                    <input type="text" class="form-control" placeholder="Enter linkedin" name="linkedin" id="linkedin" value="{{$settingProfile->linkedin}}">
                                </div>
                                
                                <div class="form-group">
                                    <label for="twitter">Twitter:</label>
                                    <input type="text" class="form-control" placeholder="Enter twitter" name="twitter" id="twitter" value="{{$settingProfile->twitter}}">
                                </div>

                                <div class="form-group">
                                    <label for="instagram">Instagram:</label>
                                    <input type="text" class="form-control" placeholder="Enter instagram" name="instagram" id="instagram" value="{{$settingProfile->instagram}}">
                                </div>

                                <div class="form-group">
                                    <label for="instagram">Logo:</label>
                                    <input type="file" class="form-control"  name="logo">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
@endsection