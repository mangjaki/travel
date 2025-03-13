@extends('layout.main')

@section('title','Kendaraan')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Kendaraan</h4>
            <p class="card-description">List Kendaraan</p>
            <a href="{{ route('kendaraan.create') }}" class="btn btn-primary col-lg-12">Tambah Kendaraan</a>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Plat Nomor</th>
                            <th class="text-center">Merk Kendaraan</th>
                            <th class="text-center">Warna</th>
                            <th class="text-center">Kapasitas</th>
                            <th class="text-center">Bahan Bakar</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kendaraan as $item)
                        <tr>
                            <td class="text-center">{{ $item['plat'] }}</td>
                            <td class="text-center">{{ $item['merk_mobil'] }}</td>
                            <td class="text-center">{{ $item['warna'] }}</td>
                            <td class="text-center">{{ $item['kapasitas'] }} Orang</td>
                            <td class="text-center">{{ $item['bahan_bakar'] }}</td>
                            <td class="text-center">{{ $item['status'] }}</td>
                            <td class="text-center">
                                <a href="{{ route('kendaraan.edit', $item['id']) }}" class="btn btn-sm btn-transparant mdi mdi-pen mdi-24px"></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('success'))
  <script>
    Swal.fire({
    title: "Good job!",
    text: '{{ session('success')}}',
    icon: "success"
    });
  </script>
@endif
<!-- confirm dialog -->
<script type="text/javascript">

  $('.show_confirm').click(function(event) {
       let form =  $(this).closest("form");
       let name = $(this).data("name");
       event.preventDefault();
       Swal.fire({
         title: " Yakin nak di hapus? ",
         text: "Dak biso balek lagi buyan data kau!",
         icon: "warning",
         showCancelButton: true,
         confirmButtonColor: "#3085d6",
         cancelButtonColor: "#d33",
         confirmButtonText: "iyo, Serah aku!"
       })
       .then((willDelete) => {
         if (willDelete.isConfirmed) {
           form.submit();
         }
       });
   });

</script>
@endsection
