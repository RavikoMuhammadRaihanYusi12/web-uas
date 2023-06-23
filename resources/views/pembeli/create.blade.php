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
<h1 class="mt-2">Form Pendaftaran Tiket</h1>

<form action="/pembeli/shop" method="POST">
    @csrf
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama Kamu</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" name="nama">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">NIK</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NIK" name="nik">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nomor Handphone/Whatsapp Kamu!</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nomor" name="no_hp">
</div>
<select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>Jenis Kelamin</option>
  <option value="L">Laki-Laki</option>
  <option value="P">Perempuan</option>
</select>
<select class="form-select form-select-sm mt-2" aria-label=".form-select-sm example">
  <option selected>Pilih Jenis Tiket</option>
  <option value="VIP">VIP (500000)</option>
  <option value="PRO">PRO (250000)</option>
  <option value="BASIC">BASIC (100000)</option>
</select>
<select class="form-select form-select-sm mt-2" aria-label=".form-select-sm example">
  <option selected>Band</option>
  <option value="Coldplay">Coldplay</option>
  <option value="Aldi Taher">Aldi Taher</option>
  <option value="Kuburan Band">Kuburan Band</option>
</select>

    <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
  <textarea placeholder="Alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
</div>
    <input class="mt-2 btn btn-success" type="submit" name="submit" value="Pesan dan Simpan">
</form>
</div>

@endsection