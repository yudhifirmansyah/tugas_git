@extends('layouts.app')


@section('content')

<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Report Produk</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                    <div class="row mb-2">
                        @if (\Session::has('message'))
                            <div class="alert alert-success">
                                {!! \Session::get('message') !!}
                            </div>
                        @elseif(\Session::has('error'))
                            <div class="alert alert-danger">
                                {!! \Session::get('error') !!}
                            </div>
                        @endif
                    </div>
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                            <thead>
                                <tr class="bg-gradient-primary text-white" align="center">
                                    <th>No</th>
                                    <th>Gambar Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Stok</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($data_produk as $row)
                                <tr>
                                    <td align="center">{{ $no++ }}</td>
                                    <td align="center">
                                        <img class="img-fluid rounded shadow-sm"
                                            src="{{ asset('gambar/gambar_produk/'.$row->gambar_produk) }}"
                                            style="width: 90px; height:90px" alt="Gambar Produk">
                                    </td>
                                    <td>{{ $row->nama_produk }}</td>
                                    <td align="center">{{ $row->stok }}</td>
                                    <td>{{ $row->deskripsi_produk }}</td>
                                    <td align="center">
                                        <a href="{{ url('/edit_produk/'.$row->id) }}" class="btn btn-sm bg-gradient-success">Edit</a>
                                        <a href="{{ url('/hapus_produk/'.$row->id) }}" class="btn btn-sm bg-gradient-danger">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
