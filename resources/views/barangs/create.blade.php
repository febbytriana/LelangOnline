@extends('layouts.app')

@section('content')
<div class="card uper">
  <div class="card-header">
    Form Tambah Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif
      <form method="post" action="{{ route('barangs.store') }}">
        @csrf
          <div class="form-group"> 
              <label>Nama Barang</label>
              <input type="text" class="form-control" name="nama_barang" onkeypress="return huruf(event)" required="" />
          </div>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text">Rp.</div>
            </div>
          <input type="text" class="form-control currency" data-separator="." name="harga_awal" onkeypress="return angka(event)" required="" > 
         </div>
          <div class="form-group">
              <label>Deskripsi Barang</label>
              <input type="text" class="form-control" name="deskripsi_barang"  onkeypress="return huruf(event)" required="" />
          </div>
          <div class="form-group">
              <label>Tanggal</label>
              <input type="date" class="form-control" name="tanggal" required="" /> 
          </div>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
  </div>
</div>

@endsection