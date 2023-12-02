@extends('Dashboard.layout.master')
@section('title', 'student-edit')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">

                        </div>
                        <div class="card-body ">
                            <form action="{{ route('student.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="mb-5">
                                            <label class="text-dark font-weight-medium">Name</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text mdi mdi-account" id="mdi-account"></span>
                                                </div>
                                                <input type="text" class="form-control" name="name"
                                                    value="{{ $student->name }}">
                                                  
                                            </div>
                                            @error('name')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="mb-5">
                                            <label class="text-dark font-weight-medium">Age</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text mdi mdi-numeric" id="mdi-account"></span>
                                                </div>
                                                <input type="text" class="form-control" name="age"
                                                    value="{{ $student->age }}">
                                                  
                                            </div>  @error('age')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="mb-5">
                                            <label class="text-dark font-weight-medium">Residence location</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text mdi mdi-map-marker" id="mdi-account"></span>
                                                </div>
                                                <input type="text" class="form-control" name="residenceLocation"
                                                    value="{{ $student->residenceLocation }}">
                                                    
                                            </div>@error('residenceLocation')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Edit Student</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
