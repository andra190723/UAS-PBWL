@extends('layouts.app')
@section('content')
<h2> Tambah Data Pelanggan </h2>
    <form action="{{ url('pelanggan') }}" method="post">
        @csrf 

        <div class="mb-3">
            <label for="">No</label>
            <input type="number" name="pel_no" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">Nama Golongan</label>
            <input type="number" name="pel_id_gol" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" name="pel_nama" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">Alamat</label>
            <textarea name="pel_alamat" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="">No HP</label>
            <input type="number" name="pel_hp" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">KTP</label>
            <input type="number" name="pel_ktp" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">SERI</label>
            <input type="number" name="pel_seri" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">Meteran</label>
            <input type="number" name="pel_meteran" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">Aktif</label>
            <select  name="pel_aktif" class="form-control">
                        <option value="Y">Aktif</option>
                        <option value="N">Nonaktif</option>
             </select><br>
        </div>

        <div class="mb-3">
            <label for="">User Nama</label>
            <input type="number" name="pel_id_user" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-success">
        </div>
    </form>
@endsection