@extends('layouts.app')
@section('title','Show Employee')
@section('css')
@endsection
@section('content')
    <div class="container mt-5">
        <a href="{{ route('addEmployee') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Create Employee</a>
        <div class="card">
            <h5 class="card-header text-center">Show Employee</h5>
            <div class="card-body">
                <div class="form-group">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name ?? '' }}" disabled>
                </div>
                <div class="form-group">
                    <label for="lname" class="control-label">Gender</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender[]" id="male" value="male" {{ $employee->gender == 'male' ? 'checked' : ''}} disabled>
                        <label class="form-check-label" for="male">
                        Male
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender[]" id="female" value="female" {{ $employee->gender == 'female' ? 'checked' : ''}} disabled>
                        <label class="form-check-label" for="female">
                        Female
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="languages" class="control-label">Language</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="php" id="php" name="languages[]" {{ in_array('php', $languages) ? 'checked' : '' }} disabled>
                        <label class="form-check-label" for="php">
                        PHP
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="javascript" id="javascript" name="languages[]" {{ in_array('javascript', $languages) ? 'checked' : '' }} disabled>
                        <label class="form-check-label" for="javascript">
                        Javascript
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="mysql" id="mysql" name="languages[]" {{ in_array('mysql', $languages) ? 'checked' : '' }} disabled>
                        <label class="form-check-label" for="mysql">
                        Mysql
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="control-label">Address</label>
                    <textarea class="form-control" id="address" name="address" disabled>{{ $employee->address ?? '' }}</textarea>
                </div>
            </div>
        </div>


    </div>
@endsection
