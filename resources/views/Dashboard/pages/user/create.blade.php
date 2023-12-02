@extends('Dashboard.layout.master')
@section('title', 'user-create')

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
                            <form action="{{ url('/user') }}" method="POST" enctype="multipart/form-data">
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
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email*"
                                        name="email" />
                                    @error('email')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="password">password</label>
                                    <input type="password" class="form-control" id="password" placeholder="password*"
                                        name="password" />
                                    @error('password')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="role">Role</label>
                                    <select class="form-select" id="role" aria-label="Default select example"
                                        name="role">
                                        <option value="1">Admin </option>
                                        <option value="0" selected>User </option>
                                    </select>
                                    @error('role')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Add User</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
