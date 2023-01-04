@extends('layouts.app')
@section('content')

<div class="container mt-5">
@if (Auth::user()->role_as == '1')
<h2 class="text-center fw-bold">Admin Dashboard</h2>
    <div class="custom-separator my-3 mb-5 mx-auto bg-brown"></div>

    <li class="my-4"><a href="" class="text-decoration-none fs-5 fw-bold text-dark">Manage Kost</a></li>
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <td scope="col">No</td>
                <td scope="col">Nama</td>
                <td scope="col" width="150">alamat</td>
                <td scope="col" width="400">Design totebag</td>
                <td scope="col">Jenis Material</td>
                <td scope="col" width="150">size</td>
                <td scope="col" width="300">Status pembayaran</td>
                <td scope="col" width="300">Status pesanan</td>
                <td scope="col">Total bayar</td>
                <td scope="col" width="300">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($kosts as $data)
            <tr class="text-center">
                <td>{{$loop->iteration}}</td>
                <td>{{$data->nama_pemilik}}</td>
                <td>{{$data->telp}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->category->nama_kategori}}</td>
                <td>{{$data->total_kamar}}</td>
                <td>{{$data->fasilitas}}</td>
                <td>{{$data->type->nama_type}}</td>
                <td>{{$data->luas}}</td>
                <td><img src="image/{{ $data->foto }}" class="img-fluid rounded-start w-50"></td>
                <td>{{number_format($data->harga)}}</td>
                <td>
                    <form action="{{ route('destroy', $data->id) }}" method="post">
                        <a href="{{ route('show', $data->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('edit', $data->id) }}" class="btn btn-primary">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <li class="my-4"><a href="" class="text-decoration-none fs-5 fw-bold text-dark">Manage Reservation</a></li>
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <td scope="col">No</td>
                <td scope="col">ID kost</td>
                <td scope="col" width="150">Nama Pemesan</td>
                <td scope="col" width="400">Telp</td>
                <td scope="col">Alamat</td>
                <td scope="col" width="150">Tanggal</td>
                <td scope="col" width="300">Status pembayaran</td>
                <td scope="col" width="300">Status pesanan</td>
                <td scope="col">Total bayar</td>
                <td scope="col" width="300">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservasi as $order)
            <tr class="text-center">
                <td>{{$loop->iteration}}</td>
                <td>{{$order->kost_id}}</td>
                <td>{{$order->nama_pemesan}}</td>
                <td>{{$order->telp}}</td>
                <td>{{$order->alamat_pemesan}}</td>
                <td>{{$order->tanggal}}</td>
                <td>{{$order->pembayaran->nama_pembayaran}}</td>
                <td>{{$order->status->nama_status}}</td>
                <td>{{number_format($order->total_cost)}}</td>
                <td>
                    <form action="{{ route('hapus', $order->id) }}" method="post">
                        <a href="{{ route('ganti', $order->id) }}" class="btn btn-primary">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <li class="my-4"><a href="" class="text-decoration-none fs-5 fw-bold text-dark">Konfirmasi pembayaran</a></li>
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <td scope="col">No</td>
                <td scope="col">ID pesanan</td>
                <td scope="col" width="150">Nama pengirim</td>
                <td scope="col" width="400">Bukti pembayaran</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($confirm as $pesan)
            <tr class="text-center">
                <td>{{$loop->iteration}}</td>
                <td>{{$pesan->id_pesanan}}</td>
                <td>{{$pesan->nama_pengirim}}</td>
                <td><img src="konfir/{{ $pesan->foto }}" class="img-fluid rounded-start w-25"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@else
<div class="container position-fixed">
        <div class="text-center d-flex justify-content-center w-100 flex-column vh-100">
            <div class="row main mx-auto py-5 px-4" style="width: 500px;">
            <img src="{{ asset('asset/img/not-found.svg') }}" class="img-fluid animated" alt="gambar">
                <h2 class="fw-bold mt-3">Error not found</h2>
                <p class="text-muted">Silahkan kembali ke halaman utama</p>
                <button class="btn btn-primary d-block mx-auto" style="width: 200px;"><a href="{{ url('/home') }}" class="text-light text-decoration-none">Back to Home</a></button>
            </div>
        </div>
</div>
@endif
    
</div>
@endsection