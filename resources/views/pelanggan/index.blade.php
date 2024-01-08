@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5"> Data Pelanggan </h2>
<a href="{{ url('pelanggan/create') }}" class="btn btn-primary mb-3">Tambah Data</a>
<table class="table table-bordered">
    <tr class="text-center">
    <tr>
                  <th>NO</th>
                  <th>NAMA GOLONGAN</th>
                  <th>NAMA PELANGGAN</th>
                  <th>ALAMAT</th>
                  <th>NO HP</th>
                  <th>KTP</th>
                  <th>SERI</th>
                  <th>METERAN</th>
                  <th>AKTIF</th>
                  <th>USER NAMA</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
            </tr>
    </tr>
    @foreach ($rows as $row)
    <tr class="text-center">
        <td>{{ $row->pel_id}}</td>
        <td>{{ $row->pel_id_gol }}</td>
        <td>{{ $row->pel_nama }}</td>
        <td>{{ $row->pel_alamat }}</td>
        <td>{{ $row->pel_hp }}</td>
        <td>{{ $row->pel_ktp }}</td>
        <td>{{ $row->pel_seri }}</td>
        <td>{{ $row->pel_meteran }}</td>
        <td>{{ $row->pel_aktif }}</td>
        <td>{{ $row->pel_id_user}}</td>
        <td><a href="{{ url('pelanggan/edit/' .$row->pel_id )}}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('pelanggan/' .$row->pel_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf 
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
    </tr>
    @endforeach
</table>
@endsection