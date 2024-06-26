@extends('layout.app')

@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Create')

@section('content')
  <div class="container">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Buat kategori baru</h3>
      </div>

      <form action="../kategori" method="post">
        <div class="card-body">
          <div class="form-group">
            <label for="kodeKategori">Kode Kategori</label>
            <input 
              type="text" 
              class="form-control @error('kodeKategori') is-invalid @enderror" 
              id="kodeKategori" 
              name="kodeKategori" 
              placeholder="Masukkan Kode Kategori"
            >

            @error('kodeKategori')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

          </div>
          <div class="form-group">
            <label for="namaKategori">Nama Kategori</label>
            <input 
              type="text" 
              class="form-control @error('namaKategori') is-invalid @enderror""  
              id="namaKategori" 
              name="namaKategori" 
              placeholder="Masukkan Nama Kategori"
            >

            @error('namaKategori')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
@endsection