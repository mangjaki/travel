@extends('layout.main')

@section('title','Rute')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Rute Perjalanan</h4>
            <p class="card-description">List Rute Perjalanan</p>
            <a href="{{ route('rute.create') }}" class="btn btn-primary col-lg-12">Tambah Rute</a>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Asal</th>
                            <th class="text-center">Tujuan</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Estimasi Waktu</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rute as $item)
                        <tr>
                            <td class="text-center">{{ $item['asal'] }}</td>
                            <td class="text-center">{{ $item['tujuan'] }}</td>
                            <td class="text-center">{{ $item['harga'] }}</td>
                            <td class="text-center">{{ $item['estimasi_waktu'] }}</td>
                            <td class="text-center">
                                <a href="{{ route('rute.edit', $item['id']) }}" class="btn btn-sm btn-transparant mdi mdi-pen mdi-24px"></a>
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
