@extends('frontend.layout.index')

@section('content')

    <section class="banner_area pb-5">

        <div class="container ">
            <h2 class="wow fadeInUp">
                <b>Data Anggota </b>
            </h2>
            <p class="wow fadeInUp" data-wow-delay="0.3s">
                Daftar data keanggotaan anda
            </p>
            @if (Session::has('success'))
                <div class="alert alert-primary wow fadeInUp" data-wow-delay="0.7s">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                        <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <span>
                        <b> Success - </b> {{ Session::get('success') }}
                    </span>
                </div>
            @endif

            @if (Session::get('warning'))
                <div class="alert alert-warning wow fadeInUp" data-wow-delay="0.7s">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                        <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <span>
                        <b> Warning - </b> {{ Session::get('warning') }}
                    </span>
                </div>
            @endif

            @if (Session::get('error'))
                <div class="alert alert-danger wow fadeInUp" data-wow-delay="0.7s">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                        <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <span>
                        <b> Error - </b> {{ Session::get('error') }}
                    </span>
                </div>
            @endif
            <form class="row mt-5" action="{{ url('member/create-anggota-group') }}" method="post">
                {{ csrf_field() }}
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telephone</label>
                        <input type="text" class="form-control" name="phone" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat Korespondensi</label>
                        <input type="text" class="form-control" name="alamat_korespondensi" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Business Title</label>
                        <input type="text" class="form-control" name="business_title" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <button class="theme_btn" type="submit" style="border-radius:5px;float:right">
                        Simpan
                        <i class=" fa fa-arrow-right" style="padding-left:20px"></i>
                    </button>
                </div>
            </form>
            <div class="row mt-4" id="member-anggota">
                <div class="col-lg-12">
                    @if ($anggota->count() == 0)
                        <div class="alert alert-danger text-center" role="alert">
                            Anda belum mempunyai anggota
                        </div>
                    @endif
                </div>
                @foreach ($anggota as $item)

                    <div class="col-lg-4 p-2">
                        <div class="card ">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->nama }}</h5>
                                <h6 class="card-subtitle mb-4 text-muted">{{ $item->email_pribadi }}</h6>
                                <a class="card-link text-warning " id="edit-anggota" data-id="{{ $item->user_id }}">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <a class="card-link text-danger " id="delete-anggota" data-id="{{ $item->user_id }}"
                                    data-name="{{ $item->nama }}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="delete-anggota-model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Anggota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" role="alert">
                        Hapus anggota <b class="names-delete"></b>
                    </div>
                </div>
                <div class="modal-footer">
                    <a id="delete-link" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash mr-2"></i> Hapus
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="edit-anggota-model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Ubah Anggota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('member/update-anggota') }}" method="post">
                        <input type="hidden" name="user_id">
                        <input type="hidden" name="pic_id" value="{{ auth()->user()->id }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email Pribadi</label>
                            <input type="text" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telephone</label>
                            <input type="text" class="form-control" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat Korespondensi</label>
                            <input type="text" class="form-control" name="alamat_korespondensi" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Business Title</label>
                            <input type="text" class="form-control" name="business_title" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info btn-sm">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('#member-anggota').on('click', '#edit-anggota', function() {
            var user_id = $(this).attr('data-id')

            $('#edit-anggota-model').modal('show')
            $.get("{{ url('member/anggota') }}/" + user_id, function(res) {
                $('input[name=user_id]').val(res[0].id)
                $('input[name=nama]').val(res[0].nama)
                $('input[name=email]').val(res[0].email)
                $('input[name=phone]').val(res[0].phone)
                $('input[name=alamat_korespondensi]').val(res[0].alamat_korespondensi)
                $('input[name=business_title]').val(res[0].business_title)
            });
        });
        $('#member-anggota').on('click', '#delete-anggota', function() {
            var user_id = $(this).attr('data-id')

            $('#delete-anggota-model').modal('show')
            $('#delete-link').attr('href', '{{ url(' / member / delete - anggota ') }}/' + user_id);
            $('.names-delete').html($(this).attr('data-name'))
        });

    </script>
@endsection

@section('addJs')
    <script>
        $(document).ready(function() {
            //Fixing jQuery Click Events for the iPad
            var ua = navigator.userAgent,
                event = (ua.match(/iPad/i)) ? "touchstart" : "click";
            if ($('.table').length > 0) {
                $('.table .header').on(event, function() {
                    $(this).toggleClass("active", "").nextUntil('.header').css('display', function(i, v) {
                        return this.style.display === 'table-row' ? 'none' : 'table-row';
                    });
                });
            }
        })

    </script>
@endsection
