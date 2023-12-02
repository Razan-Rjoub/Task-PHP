@extends('Dashboard.layout.master')
@section('title', 'user-edit')

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
                            <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="mb-5">
                                            <select class="form-select" id="role" aria-label="Default select example"
                                                name="role">
                                                <option @if ($user->role == 0) selected @endif value="0">
                                                    User </option>
                                                <option @if ($user->role == 1) selected @endif value="1">
                                                    Admin </option>

                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary">Edit User</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
