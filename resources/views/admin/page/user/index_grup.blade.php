@extends('admin.layout.app')
@section('content')
<div class="table-responsive">
<table id="user" class="table table-striped table-bordered nowrap" style="width:100%">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>PIC</th>
            <th>Nama</th>
            <th>Nama Perusahaan</th>
            <th>Alamat Korenspondensi</th>
            <th>Kategori Perusahaan</th>
            <th>Jabatan</th>
            <th>Nomor Perusahaan</th>
            <th>Judul Perusahaan</th>
            <th style="width: 120px;" class="text-center"><i class="fa fa-flash">Aksi</i></th>
        </tr>
        </tr>
    </thead>
    <tbody>
        @forelse ($data as $item)
        <tr>
            <td>{{ $item->users->name }}</td>
            <td>{{ $item->users->email }}</td>
            <td>{{ $item->user_id_pic }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->company_name }}</td>
            <td>{{ $item->alamat_korespondensi }}</td>
            <td>{{ $item->category }}</td>
            <td>{{ $item->jobdesk }}</td>
            <td>{{ $item->phone_company }}</td>
            <td>{{ $item->business_title }}</td>
            <td>Hapus</td>
        </tr>
        @empty
                <tr>
                  <td colspan="6" class="text-center p-5">
                    Data tidak tersedia
                  </td>
                </tr>
        @endforelse
    </tbody>
</table>
</div>
</div>

@endsection
