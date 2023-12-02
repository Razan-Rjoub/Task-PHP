@extends('Dashboard.layout.master')
@section('title', 'Home')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row gy-4">
                <div class="col-xl-12 col-lg-12">
                    <div class="row gy-4">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-info rounded-circle shadow">
                                            <i class="mdi mdi-account mdi-24px"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-body pt-0">
                                    <h6 class="mb-2">User</h6>
                                    <div class="d-flex flex-wrap mb-2 pb-1 align-items-center gap-2">
                                        <h4 class="mb-0">{{ $user }}</h4>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-success rounded-circle shadow">
                                            <i class="mdi mdi-account-school mdi-24px"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-body pt-0">
                                    <h6 class="mb-2">Student</h6>
                                    <div class="d-flex flex-wrap mb-2 pb-1 align-items-center gap-2">
                                        <h4 class="mb-0">{{ $student }}</h4>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    </div>
    <!-- / Layout wrapper -->







@endsection
