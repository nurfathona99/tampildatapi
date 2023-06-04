@extends('app')
@section('content')
    <table>

        <a href="{{ route('uts.create') }}" class=" btn btn-info float-end mt-2">Tambah Data</a>
        <table class="table table-bordered mt-5" style="margin-top: -100px;">
            <thead>
                <th>No</th>
                <th>Nama Pengeluaran</th>
                <th>Keterangan</th>
                <th>Biaya</th>
                <th>Tanggal Transaksi</th>
                <th>Nama Konsumen</th>
                <th>Email Konsumen</th>
                <th>Action</th>
            </thead>


            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->nama_pengeluaran }}</td>
                        <td>{{ $d->keterangan }}</td>
                        <td>{{ $d->biaya }}</td>
                        <td>{{ $d->tanggal_transaksi }}</td>
                        <td>{{ $d->nama_konsumen }}</td>
                        <td>{{ $d->email_konsumen }}</td>
                        <td><a href="{{ route('uts.edit', $d->id) }}" class="btn btn-warning"> Edit </a>
                            <form action="{{ route('uts.delete', $d->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <td>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </table>
@endsection
