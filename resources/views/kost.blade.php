@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>

<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Gagal</strong>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @else

    @endif
    <h2 class="text-center mt-5 fw-bold">All Kosan</h2>
    <div class="custom-separator my-3 mb-5 mx-auto bg-brown"></div>
    <div class="container">
        <div
            class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 d-flex justify-content-center align-content-center ">
            @foreach ($kosts as $data)
            <div class="col d-flex justify-content-center align-content-center">
                <div class="card" style="width: 18rem;" data-aos="zoom-out" data-aos-delay="300">
                    <img src="image/{{ $data->foto }}" class="card-img-top mx-auto pt-2 w-100 h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->nama_pemilik }}</h5>
                        <p class="card-text">{{ $data->fasilitas }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Rp {{number_format($data->harga)}}</b></li>
                    </ul>
                    <div class="card-body text-center ">
                        <a href="{{ route('show', $data->id) }}" class="card-link text-decoration-none text-brown">View
                            detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>
@endsection
