@extends('admin.layout.app')
@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
        <!-- Form Validation Block -->
        <div class="block">
            <!-- Form Validation Title -->
            <div class="block-title">
                <h2>Tambah Rekening</h2>
            </div>
            <!-- END Form Validation Title -->

            <!-- Form Validation Form -->
            <form id="form-validation" action="{{ route('rekening.store') }}" method="post" class="form-horizontal form-bordered">
                @csrf
                <div class="form-group">
                    <label class="col-md-3 control-label" for="bank_name">Nama Bank <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="bank_name" name="bank_name" class="form-control" placeholder="Masukan Nama Bank">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="bank_branch">Bank Cabang <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="bank_branch" name="bank_branch" class="form-control" placeholder="Masukan Bank Cabang">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="bank_account_name">Atas Nama<span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="bank_account_name" name="bank_account_name" class="form-control" placeholder="Masukan Nomor Rekening">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="bank_account_number">Nomor Rekening <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="bank_account_number" name="bank_account_number" class="form-control" placeholder="Masukan Nomor Rekening">
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-8 col-md-offset-3">
                        <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
                        <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                    </div>
                </div>
            </form>

@endsection
