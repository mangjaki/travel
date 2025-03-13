@extends('layout.main')

@section('title','Tambah Rute')

@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div class="card col-lg-6">
      <div class="card-body">
        <h4 class="card-title">From Edit Sopir</h4>
        <p class="card-description">Edit Sopir</p>
        <form method="POST" action="{{ route('sopir.update',$sopir['id']) }}" class="forms-sample" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="nama">Nama Sopir</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama') ? old('nama'): $sopir['nama'] }}" placeholder="Masukan Nama Sopir">
                @error('nama')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nomor_hp">Nomor Telepon</label>
                <input type="number" class="form-control" id="nomor_hp" name="nomor_hp" value="{{old('nomor_hp') ? old('nomor_hp'): $sopir['nomor_hp'] }}" placeholder="Masukan Nomor Telepon">
                @error('nomor_hp')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{old('alamat') ? old('alamat'): $sopir['alamat'] }}" placeholder="Masukan Alamat Sopir">
                @error('alamat')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="pengalaman">Pengalaman</label>
                <input type="number" class="form-control" id="pengalaman" name="pengalaman" value="{{old('pengalaman') ? old('pengalaman'): $sopir['pengalaman'] }}" placeholder="Masukan Pengalaman (Tahun)">
                @error('pengalaman')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary me-2">Simpan</button>
            <a href="{{ url('sopir') }}" class="btn btn-light">Batal</a>
        </form>
      </div>
    </div>
</div>
@endsection
