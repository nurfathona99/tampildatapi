@extends('app')
@section('content')


    <div class="card-harder">
        <h2> Tambah Data</h2>
        <a href="{{ route('uts') }}" class=" btn btn-warning float-end mt-2">Kembali</a>
    </div>


        <!-- /resources/views/post/create.blade.php -->

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-body">

        <!-- Create Post Form -->

        <form action="{{ route('uts.store') }}" method="post">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="">Nama Pengeluaran</label>
                <input type="text" class="form-control" name="nama_pengeluaran">
            </div>
            <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" class="form-control" name="keterangan">
            </div>
            <div class="form-group">
                <label for="">Biaya</label>
                <input type="text" class="form-control" name="biaya">
            </div>
              <div class="form-group">
              <label for="">Tanggal Transaksi</label>
              <input type="text" class="form-control" name="tanggal_transaksi">
            </div>
            <div class="form-group">
                <label for="">Nama Konsumen</label>
                <input type="text" class="form-control" name="nama_konsumen">
            </div>
            <div class="form-group">
                <label for="">Email Konsumen</label>
                <input type="text" class="form-control" name="email_konsumen">
            </div>
            <div class="card-harder">
                <input type="submit" value="Simpan" class="btn btn-primary float-right">
            </div>
            <div class="card-harder">
                <input type="submit" value="Ubah" class="btn btn-warning float-right">
            </div>
        </form>
    </div>
    </div>
@endsection
