@extends('layouts.app')

@section('content')
    <h2>Data Golongan
        <a class="btn btn-success btn-sm float-end" href="{{ url('golongan/create') }}">Tambah Data Golongan</a>
    </h2>
    <table class="table  table-hover table-bordered">

        <tr class="table-primary">
            <th id="">ID</th>
            <th id="">Kode Golongan</th>
            <th id="">NAMA Golongan</th>
            <th id="">EDIT</th>
            <th id="">DELETE</th>
        </tr>
        @foreach ($rows as $row)
            <tr class="table-light">
                <td>{{ $row->gol_id }}</td>
                <td>{{ $row->gol_kode }}</td>
                <td>{{ $row->gol_nama }}</td>
                <td>
                    <a class="btn btn-success" href="{{ url('golongan/' . $row->gol_id . '/edit') }}">Edit</a>
                </td>
                <td>
                    <form class=" btn-sm float-none" action="{{ url('golongan/' . $row->gol_id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger justify-content-center">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
