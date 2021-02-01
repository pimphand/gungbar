@extends('admin.layout.app')

@section('content')
<div class="row">
    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
        <!-- Form Validation Block -->
        <div class="block">
            <!-- Form Validation Title -->
            <div class="block-title">
                <h2>Tambah Discount</h2>
            </div>
            <!-- END Form Validation Title -->
            <!-- Form Validation Form -->
            <form id="form-validation" action="{{ route('price.store') }}" method="post" class="form-horizontal form-bordered">
                @csrf
                <div class="form-group">
                    <label class="col-md-3 control-label" for="nama_member">Nama Member <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="nama_member" name="nama_member" class="form-control" placeholder="Masukan Nama Member">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="price">Harga<span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="number" id="price" name="price" class="form-control" placeholder="Masukan Harga Member">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="discount">discount<span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="number" id="discount" name="discount" class="form-control" placeholder="Masukan discount">
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-8 col-md-offset-3">
                        <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
                        <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
