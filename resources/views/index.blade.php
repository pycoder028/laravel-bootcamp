@extends('master')

@section('title')
    Laravel Project | Home
@endsection

@php
    $page = 'home';
@endphp

@section('content')

@if (Session::has('msg'))
    <p class="alert alert-success">{{ Session::get('msg') }}</p>
@endif

<div class="container mt-3">
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">SL</th>
            <th scope="col">Registration ID</th>
            <th scope="col">Name</th>
            <th scope="col">Department</th>
            <th scope="col">Info</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($students as $key=> $student)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $student->registration_id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->department_name }}</td>
            <td>{{ $student->info }}</td>
            <td>
                <a href="{{ route('edit', $student->id) }}" class="btn btn-success btn-sm">Edit</a>
                <a href="{{ route('delete', $student->id) }}" onclick="return confirm('Are you want delete this?')" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
          @endforeach
    
        </tbody>
      </table>
</div>
@endsection