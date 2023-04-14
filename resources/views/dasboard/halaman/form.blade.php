@extends('dasboard.dasboard')
@section('content')
    <div class="pb-3">
        <a href="{{ route('product.index') }}" class="btn btn-secondary"> Back
        </a>
    </div>
    <form action="{{ route('product.store') }}"method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="kode" class="form-label">Kode Barang</label>
            <input type="text"
            class="form-control @error('kode') is-invalid @enderror" value="{{ old ('kode') }}" name="kode" id="kode">
              @error('kode')
              <span class="invalid-feedback" >
              <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text"
            class="form-control @error('nama') is-invalid @enderror" value="{{ old ('nama') }}" name="nama" id="nama">
              @error('nama')
              <span class="invalid-feedback" >
              <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
          <div class="mb-3">
            <label for="kategori" class="form-label">Kategori Barang</label>
            <input type="text"
            class="form-control @error('kategori') is-invalid @enderror" value="{{ old ('kategori') }}" name="kategori" id="kategori">
              @error('kategori')
              <span class="invalid-feedback" >
              <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga Barang</label>
            <input type="text"
            class="form-control @error('harga') is-invalid @enderror" value="{{ old ('harga') }}" name="harga" id="harga">
              @error('harga')
              <span class="invalid-feedback" >
              <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
          <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Barang</label>
            <input type="text"
            class="form-control @error('jumlah') is-invalid @enderror" value="{{ old ('jumlah') }}" name="jumlah" id="jumlah">
              @error('jumlah')
              <span class="invalid-feedback" >
              <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
        <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
          
    </form>
    
@endsection