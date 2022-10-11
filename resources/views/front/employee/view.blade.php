@extends('layouts.app')
@section('title','View Employees')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="container mt-5">
        <a href="{{ route('addEmployee') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Create Employee</a>
        <div class="card">
            <h5 class="card-header text-center">Views Employees</h5>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Languages</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if (!empty($employees) && count($employees) > 0)
                            @foreach ($employees as $key=>$employee)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->gender }}</td>
                                    <td>{{ $employee->languages }}</td>
                                    <td>{{ $employee->address }}</td>
                                    <td><a href="/employee/view/{{ $employee->id }}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                </tr>
                            @endforeach
                        @else
                            <tr><th colspan="6" class="text-center">Recode is empty</th></tr>
                        @endif
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
