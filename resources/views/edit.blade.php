@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-sm-12">
        <h2 class="text-center fw-bold">Update orderan</h2>
    </div>
    <form action="{{ route('update', $kost->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Name pemilik</strong></p>
                        <input type="text" name="nama_pemilik" id="" class="form-control" placeholder="Nama pemilik" value="{{ $kost->nama_pemilik }}">
                    </div>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>No. handphone</strong></p>
                        <input type="number" name="telp" id="" class="form-control" placeholder="No. handphone" value="{{ $kost->telp }}">
                    </div>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>alamat</strong></p>
                        <textarea name="alamat" id="" cols="30" rows="10" class="form-control"
                            placeholder="alamat" >{{ $kost->alamat }}</textarea>
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
                        <input type="number" name="total_kamar" id="" class="form-control"value="{{ $kost->total_kamar }}">
                    </div>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Luas kamar</strong></p>
                        <input type="text" name="luas" id="luas" class="form-control" value="{{ $kost->luas_kamar }}">
                    </div>
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
                        <input type="text" name="fasilitas" id="fasilitas" class="form-control"value="{{ $kost->fasilitas }}">
                    </div>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Harga perbulan</strong></p>
                        <input type="number" name="harga" id="harga" class="form-control" value="{{ $kost->harga }}">
                    </div>
                </div>

                <div class="col-xs-12 my-sm-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('home')}}" class="btn btn-danger mx-2">Back</a>
                </div>
            </div>
    </form>
</div>
@endsection
