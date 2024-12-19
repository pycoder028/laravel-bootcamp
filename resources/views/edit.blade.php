@extends('master')

@section('title')
    Laravel Project | Edit
@endsection

@php
    $page = 'edit';
@endphp

@section('content')
<div class="container mt-3">
    <form action="{{ route('update', $student->id) }}" method="POST">
        @csrf

        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" name="name" value="{{ $student->name }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Registration ID</label>
            <input type="text" class="form-control" name="registration_id" value="{{ $student->registration_id }}">
          </div>
          <div class="mb-3">
            <label class="form-label">Department Name</label>
            <input type="text" class="form-control" name="department_name" value="{{ $student->department_name }}">
          </div>
          <div class="mb-3">
            <label class="form-label">Info</label>
            <textarea type="text" class="form-control" name="info" rows="5">{!! $student->info !!}</textarea>
          </div>

        <button type="submit" class="btn btn-success">Submit</button>
      </form>
</div>
@endsection