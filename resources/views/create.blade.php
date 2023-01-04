@extends('layouts.app')

@section('content')

<body>
    <div class="container">
        <div class="col-sm-12 my-5 text-center">
            <h2 class="fw-bold text-green">Input kosan</h2>
        </div>
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
        <form action="{{ route('addkost') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Name pemilik</strong></p>
                        <input type="text" name="nama_pemilik" id="" class="form-control" placeholder="Nama pemilik">
                    </div>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>No. handphone</strong></p>
                        <input type="number" name="telp" id="" class="form-control" placeholder="No. handphone">
                    </div>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>alamat</strong></p>
                        <textarea name="alamat" id="" cols="30" rows="10" class="form-control"
                            placeholder="alamat"></textarea>
                    </div>
                </div>

                <div class="form-group col-sm-6 mt-2">
                    <label for="category_id"><strong>Wilayah Kampus</strong></label>
                    <select class="form-select" name="category_id" id="category_id">
                        <option value="" selected>Pilih area kampus</option>
                        @foreach ($category as $data)
                        <option value="{{$data->id}}" onkeyup="sum();">{{ $data->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Total Kamar</strong></p>
                        <input type="number" name="total_kamar" id="" class="form-control">
                    </div>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Luas kamar</strong></p>
                        <input type="text" name="luas" id="luas" class="form-control">
                    </div>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <p><strong>Gambar Kosan</strong></p>
                    <input type="file" name="foto" id="foto" class="form-control" accept="image/*" multiple>
                </div>
                
                <div class="form-group col-sm-6 mt-2">
                    <label for="type_id"><strong>Tipe kamar mandi</strong></label>
                    <select class="form-select" name="type_id" id="type_id">
                        <option value="" selected>Tipe kamar mandi</option>
                        @foreach ($type as $data)
                        <option value="{{$data->id}}" onkeyup="sum();">{{ $data->nama_type }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Fasilitas</strong></p>
                        <input type="text" name="fasilitas" id="fasilitas" class="form-control">
                    </div>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Harga perbulan</strong></p>
                        <input type="number" name="harga" id="harga" class="form-control">
                    </div>
                </div>

                <div class="col-xs-12 my-sm-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('home')}}" class="btn btn-danger mx-2">Back</a>
                </div>
            </div>
        </form>
    </div>
</body>
@endsection
