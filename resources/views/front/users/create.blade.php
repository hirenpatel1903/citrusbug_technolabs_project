@extends('layouts.app')
@section('title','Add Users')
@section('css')
@endsection
@section('content')
    <div class="container mt-5">
        <div class="card">
            <h5 class="card-header text-center">Create User Form</h5>
            <div class="card-body">
                <form class="col-md-offset-3 col-md-12" action="{{ route('storeUser') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="lname" class="control-label">Gender</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender[]" id="male" value="male" checked>
                            <label class="form-check-label" for="male">
                            Male
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender[]" id="female" value="female">
                            <label class="form-check-label" for="female">
                            Female
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="languages" class="control-label">Language</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="php" id="php" name="languages[]">
                            <label class="form-check-label" for="php">
                            PHP
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="javascript" id="javascript" name="languages[]">
                            <label class="form-check-label" for="javascript">
                            Javascript
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="mysql" id="mysql" name="languages[]">
                            <label class="form-check-label" for="mysql">
                            Mysql
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="control-label">Address</label>
                        <textarea class="form-control" id="address" name="address" placeholder="Enter address"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </form>
            </div>
        </div>


    </div>
@endsection
