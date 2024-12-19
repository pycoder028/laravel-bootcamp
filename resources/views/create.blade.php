@extends('master')

@section('title')
    Laravel Project | Create
@endsection

@php
    $page = 'create';
@endphp

@section('content')
<div class="container mt-3">
    <form action="{{ route('store') }}" method="POST">
        @csrf

        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Registration ID</label>
            <input type="text" class="form-control" name="registration_id">
          </div>
          <div class="mb-3">
            <label class="form-label">Department Name</label>
            <input type="text" class="form-control" name="department_name">
          </div>
          <div class="mb-3">
            <label class="form-label">Info</label>
            <textarea type="text" class="form-control" name="info" rows="5"></textarea>
          </div>

        <button type="submit" class="btn btn-success">Submit</button>
      </form>
</div>
@endsection