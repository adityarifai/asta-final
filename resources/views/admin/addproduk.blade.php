@extends('admin.layout/app')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Add Product</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page">Administrator</li>
                            <li class="breadcrumb-item" aria-current="page">Produk</li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Produk</li>
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
            <div class="col-sm-12">
                <div class="card card-body">
                    <h4 class="card-title">Tambah Produk</h4>
                    <h5 class="card-subtitle"> Form Tambah Produk</h5>
                    <form action="{{route('produk.save')}}" method="POST" role="form" class="form-horizontal m-t-30" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama Produk :<span class="help"> *</span></label>
                            <input name="produk" type="text" class="form-control" placeholder="...">
                        </div>
                        <div class="form-group">
                            <label>
                                Jenis :<br><small class="form-control-feedback">Misal. "Aplikasi/Bidang/Bahasa Pemrograman/Framework/Layanan/Acara"</small>
                            </label>
                            <input name="teknologi" type="text" class="form-control" placeholder="...">
                        </div>
                        <div class="form-group">
                            <label>
                                Detail :<br><small class="form-control-feedback">Misal. "Deskripsi/Catatan"</small>
                            </label>
                            <textarea class="form-control" rows="5" name="detail" placeholder="..."></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tanggal Terlaksana</label>
                            <input name="tanggal" type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>
                                File Gambar :<br><small class="form-control-feedback">Max Ukuran : 2 MB<br>Tipe File : JPEG, JPG, PNG, SVG</small>
                            </label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="picture" type="file" class="form-file-input" id="inputGroupFile01">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="card-body">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                <a href="{{route('produk.all')}}" type="button" class="btn btn-dark">Back</a>
                            </div>
                        </div>
                    </form>
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