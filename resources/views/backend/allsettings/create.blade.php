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
                            <input type="hidden" name="setting_id" @if(!empty($settingProfile->id)) value="{{$settingProfile->id}}" @endif>

                                <div class="form-group">
                                    <label for="name">Copmany name:</label>
                                    <input type="text" class="form-control" placeholder="Copmany name" name="name" id="name" @if(!empty($settingProfile->name)) value="{{$settingProfile->name}}" @endif>
                                </div>

                                <div class="form-group">
                                    <label for="address">Copmany address:</label>
                                    <input type="text" class="form-control" placeholder="Copmany address" name="address" id="address" @if(!empty($settingProfile->address)) value="{{$settingProfile->address}}" @endif>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" placeholder="Enter email" name="email" id="email" @if(!empty($settingProfile->email)) value="{{$settingProfile->email}}" @endif>
                                </div>

                                <div class="form-group">
                                    <label for="number">Phone:</label>
                                    <input type="phone" class="form-control" placeholder="Enter phone" name="phone" id="phone" @if(!empty($settingProfile->id)) value="{{$settingProfile->phone}}" @endif>
                                </div>
                                
                                <div class="form-group">
                                    <label for="facebook">Facebook:</label>
                                    <input type="text" class="form-control" placeholder="Enter facebook" name="facebook" id="facebook"  @if(!empty($settingProfile->id)) value="{{$settingProfile->facebook}}" @endif>
                                </div>
                                
                                <div class="form-group">
                                    <label for="linkedin">Linkedin:</label>
                                    <input type="text" class="form-control" placeholder="Enter linkedin" name="linkedin" id="linkedin" @if(!empty($settingProfile->id)) value="{{$settingProfile->linkedin}}" @endif>
                                </div>
                                
                                <div class="form-group">
                                    <label for="twitter">Twitter:</label>
                                    <input type="text" class="form-control" placeholder="Enter twitter" name="twitter" id="twitter" @if(!empty($settingProfile->id)) value="{{$settingProfile->twitter}}" @endif>
                                </div>

                                <div class="form-group">
                                    <label for="instagram">Instagram:</label>
                                    <input type="text" class="form-control" placeholder="Enter instagram" name="instagram" id="instagram" @if(!empty($settingProfile->id)) value="{{$settingProfile->instagram}}" @endif>
                                </div>

                                <div class="form-group">
                                    <label for="instagram">Logo:</label>
                                    <input type="file" class="form-control" required  name="logo">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
@endsection