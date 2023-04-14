@extends('dasboard.dasboard')
@section('content')
<p class="card-title">halaman</p> 
<div class="card-tools">
  <form action="{{ route('product.index') }}" class="form-inline" method="GET">
    <input type="search" name="search" class="form-control " placeholder="Search">
    <div class="input-group-append">
      <button type="submit" class="btn btn-default">
        <i class="uil uil-search"></i>
      </button>
    </div>
  </form>
</div>
<div class="pb-3"><a href="{{ route('product.create') }}" class="btn btn-primary">Tambah Product</a></div>
              <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                    <th class="col-1">No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>jumlah</th>
                    <th width="280px">Action</th>
                    </tr>
                    <?php $i = 1; ?>
                    @foreach ($data as $item)
                    <tr>
                    <td>{{ $i }}</td>   
                    <td>{{ $item->Kode_Barang }}</td>
                    <td>{{ $item->Nama_Barang }}</td>
                    <td>{{ $item->Kategori_Barang }}</td>
                    <td>{{ $item->Harga_Barang }}</td>
                    <td>{{ $item->Jumlah_Barang }}</td>
                    <td>
                    <form onsubmit="return confirm('yakin mau hapus data ini?')"  action="{{ route('product.destroy',$item->Kode_Barang) }}" method="POST">
                    <a class="btn btnprimary" href="{{ route('product.edit',$item->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                    </tr>
                    <?php $i++; ?>
                    @endforeach
                    </table>
              </div>
@endsection
