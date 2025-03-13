@extends('layout.main')

@section('title','Edit Rute')

@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div class="card col-lg-6">
      <div class="card-body">
        <h4 class="card-title">From Edit Rute</h4>
        <p class="card-description">Edit Rute Perjalanan</p>
        <form method="POST" action= "{{ route('rute.update',$rute['id']) }}" class="forms-sample" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="asal">Asal Perjalanan</label>
                <input type="text" class="form-control" id="asal" name="asal" value="{{old('asal') ? old('asal'): $rute['asal'] }}" placeholder="Asal Perjalanan">
                @error('asal')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="tujuan">Tujuan Perjalanan</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan" value="{{old('tujuan') ? old('tujuan'): $rute['tujuan'] }}" placeholder="Tujuan Perjalanan">
                @error('tujuan')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="{{old('harga') ? old('harga'): $rute['harga'] }}" placeholder="Harga">
                @error('harga')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="estimasi_waktu">Estimasi Waktu</label>
                <input type="text" class="form-control" id="estimasi_waktu" name="estimasi_waktu" value="{{old('estimasi_waktu') ? old('estimasi_waktu'): $rute['estimasi_waktu'] }}" placeholder="Estimasi Waktu">
                @error('estimasi_waktu')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary me-2">Simpan</button>
            <a href="{{ url('rute') }}" class="btn btn-light">Batal</a>
        </form>
      </div>
    </div>
</div>
@endsection
