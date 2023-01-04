@extends('layouts.app')
@section('content')

<body>
    <div class="container">
        <div class="col-sm-12 mt-5 text-center">
            <h2 class="fw-bold text-green">Reservation Form</h2>
            <div class="custom-separator my-3 mb-5 mx-auto bg-brown"></div>
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
        <form action="{{ route('ganti', $reservasi->id) }}" method="POST" enctype="multipart/form-data"
            class="w-75 d-block mx-auto">

            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Name pemesan</strong></p>
                        <input type="text" name="nama_pemesan" id="" class="form-control" placeholder="Nama pemesan"
                            value="{{$reservasi->nama_pemesan}}">
                    </div>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>No. handphone</strong></p>
                        <input type="number" name="telp" id="" class="form-control" placeholder="No. handphone"
                            value="{{$reservasi->telp}}">
                    </div>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>alamat</strong></p>
                        <textarea name="alamat_pemesan" id="" cols="30" rows="10" class="form-control"
                            placeholder="alamat">{{$reservasi->nama_pemesan}}"</textarea>
                    </div>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Tanggal reservasi</strong></p>
                        <input type="date" name="tanggal" id="tanggal" class="form-control">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="status_id"><strong>Status pembayaran</strong></label>
                        <select class="form-control" name="pembayaran_id" id="pembayaran_id">
                            @foreach ($pembayaran as $data)
                            <option value="{{$data->id}}" onkeyup="sum();">{{ $data->nama_pembayaran }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="status_id"><strong>Status pesanan</strong></label>
                        <select class="form-control" name="status_id" id="status_id">
                            @foreach ($status as $statuses)
                            <option value="{{$statuses->id}}" onkeyup="sum();">{{ $statuses->nama_status }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 my-sm-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('home') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
        </form>
    </div>
</body>
@endsection
