@extends('admin.layout.app')
@section('content')
<div class="table-responsive">
<table id="user" class="table table-striped table-bordered nowrap" style="width:100%">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Nama Perusahaan</th>
            <th>Email Perusahaan</th>
            <th>Alamat Perusahaan</th>
            <th>Kategori Perusahaan</th>
            <th>Jabatan</th>
            <th>Nomor Perusahaan</th>
            <th style="width: 120px;" class="text-center"><i class="fa fa-flash">Aksi</i></th>
        </tr>
    </thead>
    <tbody>
        @forelse ($data as $item)
        <tr>
            <td>{{ $item->users->name }}</td>
            <td>{{ $item->users->email }}</td>
            <td>{{ $item->company_name }}</td>
            <td>{{ $item->company_email }}</td>
            <td>{{ $item->company_address }}</td>
            <td>{{ $item->category }}</td>
            <td>{{ $item->jobdesk }}</td>
            <td>{{ $item->company_phone }}</td>
            <td class="text-center">
                <a href="{{ url ('admin/user/personal',$item->users->id) }}" data-toggle="tooltip" title="Edit User" class="btn btn-effect-ripple btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                <a href="{{ url('admin/rekening/hapus', $item->id) }}" data-toggle="tooltip" title="Delete User" class="btn btn-effect-ripple btn-sm btn-danger"><i class="fa fa-trash"></i></a>
            </td>
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
