@extends('backend.master')
@section('content')

<div class="container-fluid">                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                            Blog Create
                            </div>
                            <div class="card-body">

                            @if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif   
                            <form action="{{URL::to('/backend/blog/store')}}" method="post">
                            @csrf
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter name" name="name" id="name">
                                </div>
                                
                                <div class="form-group">
                                    <label for="desigation">Desigation:</label>
                                    <input type="text" class="form-control" placeholder="Enter desigation" name="desigation" id="desigation">
                                </div>
                                       
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
@endsection