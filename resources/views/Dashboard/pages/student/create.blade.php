@extends('Dashboard.layout.master')
@section('title', 'student-create')

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
                            <form action="{{ url('/student') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="Name">Name</label>
                                    <input type="text" class="form-control" id="Name" placeholder="Name*"
                                        name='name' />
                                    @error('name')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="email">Age</label>
                                    <input type="text" class="form-control" id="age" placeholder="Age*"
                                        name="age" />
                                    @error('age')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="residenceLocation">Residence location</label>
                                    <input type="text" class="form-control" id="residenceLocation"
                                        placeholder="residenceLocation*" name="residenceLocation" />
                                    @error('residenceLocation')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Add Student</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
