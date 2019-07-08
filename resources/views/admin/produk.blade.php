@extends('admin.layout/app')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Product</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page">Administrator</li>
                            <li class="breadcrumb-item active" aria-current="page">Produk</li>
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
                        <h4 class="card-title">Daftar Produk</h4>
                        <h6 class="card-subtitle">Beberapa <code>produk</code> yang telah dikerjakan.</h6>
                        <div class="table-responsive">
                            <table id="demo-foo-addrow" class="table m-t-30 no-wrap table-hover contact-list" data-page-size="10">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Picture</th>
                                        <th>Product</th>
                                        <th>Detail</th>
                                        <th>Teknologi</th>
                                        <th>Since</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($produks as $prd)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $prd->picture }}</td>
                                        <td>{{ $prd->produk }}</td>
                                        <td>{{ $prd->detail }}</td>
                                        <td>{{ $prd->teknologi }}</td>
                                        <td>{{ $prd->tanggal }}</td>
                                        <td>
                                            <a href="{{route('produk.delete', $prd->id)}}">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="{{route('produk.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Produk</a>
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