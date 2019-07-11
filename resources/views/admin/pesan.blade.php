@extends('admin.layout/app')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Messages & Suggestions</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page">Administrator</li>
                            <li class="breadcrumb-item active" aria-current="page">Pesan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Saran</h4>
                        <h6 class="card-subtitle">Beberapa <code>pesan dan saran</code> dari pengunjung.</h6>
                        <div class="table-responsive">
                            <table id="demo-foo-addrow" class="table m-t-30 no-wrap table-hover contact-list" data-page-size="10">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Type</th>
                                        <th>Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pesans as $psn)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            <a><img src="{{asset('regna\astafile\users.jpg')}}" alt="user" width="20" class="rounded-circle" /> {{ $psn->pengirim }}</a>
                                        </td>
                                        <td>{{ $psn->email }}</td>
                                        <td>{{ $psn->judul }}</td>
                                        <td>{{ $psn->pesan }}</td>
                                        <td><span class="label label-danger">Email</span> </td>
                                        <td>{{ $psn->created_at }}</td>
                                        <td>
                                            
                                            <a href="{{route('pesan.delete', $psn->id)}}">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        All Rights Reserved by Asta Multimedia Tama. Designed and Developed by
        <a href="#">Anamorphic Syiar Media</a>.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
@endsection