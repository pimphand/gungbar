@extends('admin.layout.app')
@section('content')

<table id="general-table" class="table table-striped table-bordered table-vcenter">
    <thead>
        <tr>
            <th style="width: 80px;" class="text-center"><label class="csscheckbox csscheckbox-primary"><input type="checkbox"><span></span></label></th>
            <th>No</th>
            <th>Nama Bank</th>
            <th>Bank Cabang</th>
            <th>Atas Nama</th>
            <th style="width: 320px;">No Rekening</th>
            <th style="width: 120px;" class="text-center"><i class="fa fa-flash">Aksi</i></th>
        </tr>
    </thead>
    <tbody>
        @forelse ($rekening as $item)
        <tr>
            <td class="text-center"><label class="csscheckbox csscheckbox-primary"><input type="checkbox"><span></span></label></td>
            <td><strong>1</strong></td>
            <td>{{ $item->bank_name }}</td>
            <td>{{ $item->bank_branch }}</td>
            <td>{{ $item->bank_account_name }}</td>
            <td>{{ $item->bank_account_number }}</td>
            <td class="text-center">
                <a href="{{ url ('admin/rekening',$item->id) }}" data-toggle="tooltip" title="Edit User" class="btn btn-effect-ripple btn-sm btn-success"><i class="fa fa-pencil"></i></a>
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

<!-- END Table Styles Block -->
@endsection
