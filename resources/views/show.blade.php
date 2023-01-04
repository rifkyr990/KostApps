@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5 mb-5">
        <h2 class="text-center fw-bold mt-5">Detail Product</h2>
        <div class="custom-separator my-3 mb-5 mx-auto bg-brown"></div>
        <div class="card">
            <div class="row g-0">
                <div class="col-md-6 border-end">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="main_image h-100"> <img src="/image/{{ $kost->foto }}"
                                class="align-items-center w-100"> </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 right-side">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3>{{ $kost->nama_pemilik }}</h3> <span class="heart"><i class='bx bx-heart'></i></span>
                        </div>
                        <div class="mt-2 pr-3">
                            <p><b>Alamat :</b> {{ $kost->alamat }}</p>
                        </div>
                        <div class="mt-2 pr-3">
                            <p><b>Fasilitas :</b> {{ $kost->fasilitas }}</p>
                        </div>
                        <div class="mt-2 pr-3">
                            <p><b>Tipe kamar mandi:</b> {{ $kost->type->nama_type }}</p>
                        </div>
                        <div class="mt-2 pr-3">
                            <p><b>Luas kamar :</b> {{ $kost->luas }}</p>
                        </div>
                        <div class="mt-2 pr-3">
                            <p><b>Total kamar :</b> {{ $kost->total_kamar }}</p>
                        </div>
                        <h3>Rp {{number_format($kost->harga)}}</h3>
                        <div class="ratings d-flex flex-row align-items-center">
                            <div class="d-flex flex-row"> <i class='bx bxs-star'></i> <i class='bx bxs-star'></i> <i
                                    class='bx bxs-star'></i> <i class='bx bxs-star'></i> <i class='bx bx-star'></i>
                            </div> <span>441 reviews</span>
                        </div>

                        <div class="buttons d-flex flex-row mt-5 gap-3">
                            <button class="btn btn-outline-dark" ><a href="{{ route('create', $kost->id) }}" class="text-decoration-none">Reservasi</a></button>
                            <button class="btn btn-dark"><a href="{{url('/product')}}"
                                    class="text-decoration-none text-light">Kembali</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection
