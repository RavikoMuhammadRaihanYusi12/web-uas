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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
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
    
<h1>Edit Pembeli</h1>

<form action="/pembeli/{{$pembeli->id}}" method="POST">
    @method('put')
    @csrf

    <input class="mt-2" type="text" name="nama" placeholder="Nama" value="{{$pembeli->nama}}"><br>
    <input class="mt-2" type="text" name="nik" placeholder="Nik" value="{{$pembeli->nik}}"><br>
    <input class="mt-2" type="text" name="no_hp" placeholder="no_hp" value="{{$pembeli->no_hp}}"><br>
    <select class="mt-2" name="Jenis Kelamin">
        <option value="">Pilih Jenis kelamin</option>
        <option value="L" @if ($pembeli->jenis_kelamin == 'L') selected @endif> Lakik</option>
        <option value="P" @if ($pembeli->jenis_kelamin == 'P') selected @endif> Perempuan</option>
    </select><br>
    <select class="mt-2" name="jenis_tiket">
        <option value="">Pilih Jenis Tiket</option>
        <option value="VIP" @if ($pembeli->jenis_tiket == 'VIP') selected @endif> VIP (500000)</option>
        <option value="PRO" @if ($pembeli->jenis_tiket == 'PRO') selected @endif> PRO (250000)</option>
        <option value="BASIC" @if ($pembeli->jenis_tiket == 'BASIC') selected @endif> BASIC (100000)</option>
    </select><br>
    <select class="mt-2" name="band">
        <option value="">Pilih Band</option>
        <option value="coldplay" @if ($pembeli->band == 'coldplay') selected @endif > Coldplay</option>
        <option value="alditaher" @if ($pembeli->band == 'alditaher') selected @endif > Aldi Taher</option>
        <option value="kuburanband" @if ($pembeli->band == 'kuburanband') selected @endif > Kuburan Band</option>
    </select><br>
    <textarea class="mt-2" name="alamat" rows="10">{{$pembeli->alamat}}</textarea><br>
    <input class="mt-2 btn btn-success" type="submit" name="submit" value="Edit">
</form>

</div>

@endsection