@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Berhasil ! </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <?php
                        $user_id = Auth::user()->id;
                        $role_id = Auth::user()->role_id;


                        $data = DB::table('users')
                            ->leftJoin('katalog_role', 'users.role_id', 'katalog_role.id')
                            ->select('katalog_role.deskripsi as role_user')
                            ->where('users.id', $user_id)
                            ->first();
                    ?>
                    {{ __('Anda berhasil login sebagai ') }} {{ $data->role_user }}


                    <hr>
                    @if($role_id == 1)
                    <!--JIKA ROLE USER PENJUAL-->
                        <div class="row mt-2">
                            <div class="col-6">
                                <div class="card p-2">
                                    <div class="card-header text-white bg-gradient-primary">INPUT PRODUK</div>


                                    <div class="card-body">
                                        <span>Input produk anda di sini</span>
                                    </div>
                                    <a href="{{ url('input_produk') }}" class="btn btn-sm text-white bg-gradient-info">Input</a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card p-2">
                                    <div class="card-header text-white bg-gradient-success">REPORT INPUT PRODUK</div>


                                    <div class="card-body">
                                        <span>Lihat produk anda di sini</span>
                                    </div>
                                    <a href="{{ url('report_produk') }}" class="btn btn-sm text-white bg-gradient-warning">Report</a>
                                </div>
                            </div>
                        </div>
                    @elseif($role_id == 2)
                    <!--MENU UNTUK PEMBELI-->
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
