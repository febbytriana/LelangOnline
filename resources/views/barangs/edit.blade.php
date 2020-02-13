@extends('layouts.app')
   
@section('content')
<div class="card uper">
  <div class="card-header">
    Form Edit Data
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
  
    <form action="{{ route('barangs.update',$barang->id) }}" method="POST">
        @csrf
        @method('PUT')
   
           <div class="form-group"> 
              <label>Nama Barang</label>
              <input type="text" class="form-control" name="nama_barang" value="{{ $barang->nama_barang }}"/>
          </div>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text">Rp.</div>
            </div>
          <input type="text" class="form-control currency" data-separator="." name="harga_awal" value="@currency($barang->harga_awal)"> 
         </div>
          <div class="form-group">
              <label>Deskripsi Barang</label>
              <input type="text" class="form-control" name="deskripsi_barang" value="{{ $barang->deskripsi_barang }}"/>
          </div>
          <div class="form-group">
              <label>Tanggal</label>
              <input type="date" class="form-control" name="tanggal" value="{{ $barang->tanggal }}"/>
          </div>
            <button type="submit" class="btn btn-primary">Edit Data</button>
        </div>
   
    </form>
  </div>
</div>
@endsection