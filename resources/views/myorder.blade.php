@extends('layouts.app')

@section('content')

<div class="container">
    <h2 class="text-center fw-bold mt-5">Reservasi Saya</h2>
    <div class="custom-separator mx-auto my-3 mb-4 bg-brown"></div>


    <div class="row">
        @foreach ($reservasi as $data)
        <div class="col-sm-4">
            <div class="bg-light shadow-sm pt-4 px-4 my-5">
                <ul style="list-style: none; padding:0;">
                    <li><b>ID Kost :</b> {{$data->kost_id}}</li>
                    <li><b>Nama :</b> {{$data->nama_pemesan}}</li>
                    <li><b>Alamat :</b> {{ $data->alamat_pemesan }}</li>
                    <li><b>Telp :</b> {{ $data->telp }}</li>
                    <li><b>Tanggal reservasi :</b> {{$data->tanggal}}</li>
                    <li><b>Status Orderan :</b> {{ $data->status->nama_status }}</li>
                    <li><b>Status pembayaran :</b> {{$data->pembayaran->nama_pembayaran}}</li>
                    <li><b>Total harga :</b> Rp.
                        {{number_format($data->kost->harga)}}</li>

                    <div class="d-flex justify-content-end mt-3 pb-3">
                        <a href="" class="btn btn-danger mx-2" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">Complaint</a>
                        <a href="" class="btn btn-primary">Selesai</a>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <p>Alasan</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Berubah pikiran
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Ingin merubah tanggal reservasi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Ingin merubah kamar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Dan lain lain
                                        </label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('remove', $data->id) }}" method="post">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>

                                        @csrf

                                        <button type="submit" data-bs-dismiss="modal"
                                            class="btn btn-primary">Yes</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
