@extends('layouts.master')

@section('content')

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success text-light" id="myWeb">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/images/download.png" alt="Logo" width="40" height="40" class="me-2 rounded-circle">
                <strong>TimWebTixID</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </form>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/lainnya">Lainnya</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

<div class="container">

<h1 class="mt-5">Selamat Datang Di Form Pemesanan!</h1>

<h2 class="mt-5">List Nama Pendaftar : </h2><br>
<table class="table table-success table-striped mt-5">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIK</th>
        <th>NO HP</th>
        <th>Jenis Kelamin</th>
        <th>Jenis Tiket</th>
        <th>Band</th>
        <th>Alamat</th>
        <th>Keterangan</th>
    </tr>
    @foreach($pembeli as $p)
    <tr>
        <td>{{$p->id}}</td>
        <td>{{$p->nama}}</td>
        <td>{{$p->nik}}</td>
        <td>{{$p->no_hp}}</td>
        <td>{{$p->jenis_kelamin}}</td>
        <td>{{$p->jenis_tiket}}</td>
        <td>{{$p->band}}</td>
        <td>{{$p->alamat}}</td>
        <td>
            <a class="btn btn-primary" href="/pembeli/{{$p->id}}/edit">Edit</a>
                <form action="/pembeli/{{$p->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger mt-2" type="submit" value="Delete">
                </form>
            </td>
    </tr>
    @endforeach
</table>

<a class="btn btn-primary mb-2 mt-2" href="/pembeli/create">Daftar Sekarang!</a>

        </div>
@endsection
