@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @include('admin.sidebar')
        <div class="col-md-9">
        
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Selamat datang di Sistem Informasi Manajemen Surat PT Pupuk Semen Baturaja<br>
                    Silahkan memilih menu yang tersedia di sidebar
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
