@extends('backend.master')
@section('content')

<div class="container-fluid">
                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                            Team Create
                            </div>
                            <div class="card-body">
                          
                            <form action="/action_page.php">
                                <div class="form-group">
                                    <label for="email">Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter Namme" id="name">
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Desigation:</label>
                                    <input type="text" class="form-control" placeholder="Enter Desigation" id="Desigation">
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Facebook:</label>
                                    <input type="text" class="form-control" placeholder="Enter facebook" id="facebook">
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter Namme" id="name">
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter Namme" id="name">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
@endsection