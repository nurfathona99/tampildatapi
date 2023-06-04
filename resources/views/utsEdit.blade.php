@extends('app')
@section('content')

<div class="container mt-3">

    <form action="{{ route('uts.update', $additional_costs->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="">Id</label>
            <input type="text" class="form-control" name="id" value="{{ $additional_costs->id }}">
        </div>
        <div class="form-group">
            <label for="">Nama Pengeluaran</label>
            <input type="text" class="form-control" name="nama_pengeluaran" value="{{ $additional_costs->nama_pengeluaran }}">
        </div>
        <div class="form-group">
            <label for="">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" value="{{ $additional_costs->keterangan }}">
        </div>
        <div class="form-group">
            <label for="">Biaya</label>
            <input type="text" class="form-control" name="biaya" value="{{ $additional_costs->biaya }}">
        </div>
        <div class="form-group">
            <label for="">Tanggal Transaksi</label>
            <input type="text" class="form-control" name="tanggal_transaksi" value="{{ $additional_costs->tanggal_transaksi }}">
        </div>
        <div class="form-group">
            <label for="">Nama Konsumen</label>
            <input type="text" class="form-control" name="nama_konsumen" value="{{ $additional_costs->nama_konsumen }}">
        </div>
        <div class="form-group">
            <label for="">Email Konsumen</label>
            <input type="text" class="form-control" name="email_konsumen" value="{{ $additional_costs->email_konsumen }}">
        </div>
        <div class="card-harder">
            <input type="submit" value="Simpan" class="btn btn-primary float-right">
        </div>
    </form>


</div>

@endsection
