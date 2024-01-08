@extends('layouts.app')

@section('content')
<h2> Edit Data Pelanggan </h2>
    <form action="{{ url('pelanggan/' .$row->pel_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf 
       
        <div class="mb-3">
            <label for="">No</label>
            <input type="number" name="pel_no" id="" class="form-control" value="{{$row->pel_no}}">
        </div>

        <div class="mb-3">
            <label for="">Nama Golongan</label>
            <input type="number" name="pel_id_gol" id="" class="form-control" value="{{$row->pel_id_gol}}">
        </div>

        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" name="pel_nama" id="" class="form-control" value="{{$row->pel_nama}}">
        </div>

        <div class="mb-3">
            <label for="">Alamat</label>
            <textarea name="pel_alamat" id="" cols="30" rows="10" class="form-control">{{$row->pel_alamat}}</textarea>
        </div>

        <div class="mb-3">
            <label for="">No HP</label>
            <input type="number" name="pel_hp" id="" class="form-control" value="{{$row->pel_hp}}">
        </div>

        <div class="mb-3">
            <label for="">KTP</label>
            <input type="number" name="pel_ktp" id="" class="form-control" value="{{$row->pel_ktp}}">
        </div>

        <div class="mb-3">
            <label for="">SERI</label>
            <input type="number" name="pel_seri" id="" class="form-control" value="{{$row->pel_seri}}">
        </div>

        <div class="mb-3">
            <label for="">Meteran</label>
            <input type="number" name="pel_meteran" id="" class="form-control" value="{{$row->pel_meteran}}">
        </div>

        <div class="mb-3">
            <label for="">Aktif</label>
            <select  name="pel_aktif" class="form-control" value="{{$row->pel_aktif}}">
                        <option value="Y">Aktif</option>
                        <option value="N">Nonaktif</option>
             </select><br>
        </div>

        <div class="mb-3">
            <label for="">User Nama</label>
            <input type="number" name="pel_id_user" id="" class="form-control" value="{{$row->pel_id_user}}">
        </div>

        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-success">
        </div>
    </form>
@endsection