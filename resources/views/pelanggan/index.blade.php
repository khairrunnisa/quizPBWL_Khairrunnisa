@extends('layouts.app')
@section('content')
    <h2>Data Pelanggan
        <a class="btn btn-success btn-sm float-end" href="{{ url('pelanggan/create') }}">Tambah Pelanggan</a>
    </h2>
    <table class="table table-hover table-bordered ">

        <tr class="table-primary">
            <th id="">ID Pelanggan</th>
            <th id="">Nama Golongan Pelanggan</th>
            <th id="">Nomor Pelanggan</th>
            <th id="">Nama Pelanggan</th>
            <th id="">Alamat Pelanggan</th>
            <th id="">No Hp Pelanggan</th>
            <th id="">Ktp Pelanggan</th>
            <th id="">No Seri Pelanggan</th>
            <th id="">No Meteran Pelanggan</th>
            <th id="">Status Pelanggan</th>
            <th id="">ID User Pelanggan</th>
            <th id="">EDIT</th>
            <th id="">DELETE</th>
        </tr>
        @foreach ($rows as $row)
            <tr class="table-light">
                <td>{{ $row->pel_id }}</td>
                <td>{{ $row->golongan->gol_nama }}</td>
                <td>{{ $row->pel_no }}</td>
                <td>{{ $row->pel_nama }}</td>
                <td>{{ $row->pel_alamat }}</td>
                <td>{{ $row->pel_hp }}</td>
                <td>{{ $row->pel_ktp }}</td>
                <td>{{ $row->pel_seri }}</td>
                <td>{{ $row->pel_meteran }}</td>
                <td>{{ $row->pel_aktif }}</td>
                <td>{{ $row->user->name }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ url('pelanggan/' . $row->pel_id . '/edit') }}">Edit</a>
                </td>
                <td>
                    <form class=" btn-sm float-none" action="{{ url('pelanggan/' . $row->pel_id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger justify-content-center">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
