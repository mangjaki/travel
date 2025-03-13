@extends('layout.main')

@section('title','Tambah Rute')

@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div class="card col-lg-6">
      <div class="card-body">
        <h4 class="card-title">From Tambah Kendaraan</h4>
        <p class="card-description">Tambah Kendaraan</p>
        <form method="POST" action="{{ route('kendaraan.store') }}" class="forms-sample" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="plat">Plat Kendaraan</label>
                <input type="text" class="form-control" id="plat" name="plat" value="{{ old('plat') }}" placeholder="Masukan Plat Kendaraan">
                @error('plat')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="merk_mobil">Merk Kendaraan</label>
                <input type="text" class="form-control" id="merk_mobil" name="merk_mobil" value="{{ old('merk_mobil') }}" placeholder="Masukan Merk Kendaraan">
                @error('merk_mobil')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="warna">Warna Kendaraan</label>
                <input type="text" class="form-control" id="warna" name="warna" value="{{ old('warna') }}" placeholder="Masukan Warna Kendaraan">
                @error('warna')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="kapasitas">Kapasitas Kendaraan</label>
                <input type="number" class="form-control" id="kapasitas" name="kapasitas" value="{{ old('kapasitas') }}" placeholder="Masukan Kapasitas Kendaraan">
                @error('kapasitas')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="bahan_bakar">Bahan Bakar</label>
                <input type="text" class="form-control" id="bahan_bakar" name="bahan_bakar" value="{{ old('bahan_bakar') }}" placeholder="Masukan Bahan Bakar Kendaraan">
                @error('bahan_bakar')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="Pilih Status" readonly>Pilih Status</option>
                    <option value="Ready">Ready</option>
                    <option value="Kosong">Kosong</option>
                </select>
                @error('bahan_bakar')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary me-2">Simpan</button>
            <a href="{{ url('kendaraan') }}" class="btn btn-light">Batal</a>
        </form>
      </div>
    </div>
</div>
@endsection
