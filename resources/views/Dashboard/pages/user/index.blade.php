@extends('Dashboard.layout.master')
@section('title','User')

	@section('content')
    <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
          
<div class="card">
  @include('sweetalert::alert')

  <a href="{{ url('/user/create') }}"><button class=" btn btn-primary" tabindex="0" type="button"><span><i
    class="mdi mdi-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block">Add
    User</span></span></button></a>
    <div class="card-body table-responsive">
      {{ $dataTable->table() }}
  </div>
    @endsection
    @push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush

