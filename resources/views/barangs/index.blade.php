@extends('layouts.app')
 
@section('content')
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br/>
  @endif
  <a href="{{ route('barangs.create')}}" class="btn btn-primary" style="float: right;">Tambah</a></td><br><br>
  <div class="table-responsive">
    <table class="table table-hover text-center ">
      <thead>
          <tr>
            <td>No.</td>
            <td>Nama Barang</td>
            <td>Harga Awal</td>
            <td>Deskripsi Barang</td>
            <td>Tanggal</td>
            <td colspan="2">Kelola Data</td>
          </tr>
      </thead>
      <tbody>
          @foreach($barangs as $key => $barang)
          <tr>
              <td>{{ $key+1 }}</td>
              <td>{{ $barang->nama_barang }}</td>     
              <td>@currency($barang->harga_awal)</td>
              <td>{{ $barang->deskripsi_barang }}</td>
              <td>{{ date('d-m-Y', strtotime($barang->tanggal)) }}</td>
              <td>
                <a href="{{ route('barangs.edit', $barang->id)}}" class="btn btn-warning">Edit</a>
              </td>
              <td>
                  <form action="{{ route('barangs.destroy', $barang->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Hapus</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection