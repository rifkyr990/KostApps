@extends('layouts.app')

@section('content')
<section class="landing">
    <div class="container">
        <div class="text-center d-flex justify-content-center w-100 flex-column " style="height: 500px;">
            <div class="main">
                <h2 class="text-light">Kostku</h2>
                <p class="d-block mx-auto w-50 my-4 text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, repellat consequuntur esse doloribus, facilis nostrum ut delectus commodi harum voluptatum, beatae animi voluptas blanditiis perferendis perspiciatis odit dignissimos debitis a.</p>
                <a href="{{route('allkost') }}" class="btn btn-primary my-3 text-decoration-none">Cari sekarang</a>
            </div>
        </div>
    </div>
</section>
<div class="container my-5">
    <div
        class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 d-flex justify-content-center align-content-center ">
        <div class="col d-flex justify-content-center align-content-center">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('asset/img/uad.png') }}" class="card-img-top w-50 h-100 mx-auto m-3">
                <div class="card-body">
                    <h5 class="card-title">Universitas Ahmad Dahlan</h5>
                    <p class="card-text">Area sekitar Universitas Ahmad Dahlan</p>
                </div>
                <div class="card-body text-center bg-primary">
                    <a href="{{route('uad')}}" class="card-link text-light text-decoration-none">View More</a>
                </div>
            </div>
        </div>

        <div class="col d-flex justify-content-center align-content-center">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('asset/img/umy.png')}}" class="card-img-top w-50 h-100 mx-auto m-3">
                <div class="card-body">
                    <h5 class="card-title">Universitas Muhammadiyah Yogyakarta</h5>
                    <p class="card-text">Area sekitar Universitas Muhammadiyah Yogyakarta</p>
                </div>
                <div class="card-body text-center bg-primary">
                    <a href="{{route('umy')}}" class="card-link text-light text-decoration-none">View More</a>
                </div>
            </div>
        </div>

        <div class="col d-flex justify-content-center align-content-center">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('asset/img/ugm.png') }}" class="card-img-top w-50 h-100 mx-auto m-3">
                <div class="card-body">
                    <h5 class="card-title">Universitas Gadjah Mada</h5>
                    <p class="card-text">Area sekitar Universitas Gadjah Mada</p>
                </div>
                <div class="card-body text-center bg-primary">
                    <a href="{{route('ugm')}}" class="card-link text-light text-decoration-none">View More</a>
                </div>
            </div>
        </div>

        <div class="col d-flex justify-content-center align-content-center">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('asset/img/uty.jpg') }}" class="card-img-top w-50 h-100 mx-auto m-3">
                <div class="card-body">
                    <h5 class="card-title">Universitas Technologi Yogyakarta</h5>
                    <p class="card-text">Area sekitar Universitas Technologi Yogyakarta</p>
                </div>
                <div class="card-body text-center bg-primary">
                    <a href="{{route('uty')}}" class="card-link text-light text-decoration-none">View More</a>
                </div>
            </div>
        </div>

        <div class="col d-flex justify-content-center align-content-center">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('asset/img/alma.png') }}" class="card-img-top w-50 h-100 mx-auto m-3">
                <div class="card-body">
                    <h5 class="card-title">Universitas Alma Atta</h5>
                    <p class="card-text">Area sekitar Alma Atta</p>
                </div>
                <div class="card-body text-center bg-primary">
                    <a href="{{route('uaa')}}" class="card-link text-light text-decoration-none">View More</a>
                </div>
            </div>
        </div>

        <div class="col d-flex justify-content-center align-content-center">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('asset/img/amikom.png') }}" class="card-img-top w-50 h-100 mx-auto m-3">
                <div class="card-body">
                    <h5 class="card-title">Universitas Amikom</h5>
                    <p class="card-text">Area sekitar Amikom</p>
                </div>
                <div class="card-body text-center bg-primary">
                    <a href="{{route('amikom')}}" class="card-link text-light text-decoration-none">View More</a>
                </div>
            </div>
        </div>

        <div class="col d-flex justify-content-center align-content-center">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('asset/img/uii.png') }}" class="card-img-top w-50 h-100 mx-auto m-3">
                <div class="card-body">
                    <h5 class="card-title">Universitas Islam Indonesia</h5>
                    <p class="card-text">Area sekitar Universitas Islam Indonesia</p>
                </div>
                <div class="card-body text-center bg-primary">
                    <a href="{{route('uii')}}" class="card-link text-light text-decoration-none">View More</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
