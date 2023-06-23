<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="stylehome.css" />
<link rel="icon" href="/images/download.png" type="image/x-icon"/>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeamWebTixID</title>
</head>

<body class="bg-dark">
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
                <form class="d-flex ms-auto my-4 my-lg-0" role="search" id="mySearch">
                    <input class="form-control me-2" type="search" placeholder="Cari Disini..." aria-label="Search">
                    <button class="btn btn-light" type="submit"><i
                            class="fa-solid fa-magnifying-glass fa-bounce"></i></button>
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

    <div class="container align-items-center text-center text-light mt-5">
        <h1>Welcome To TimWebTIXID!</h1>
        <h2 class="h2">Disini , kalian bisa memesan tiket konser dari band" yang lagi Hype! , tunggu apa lagi? , Pesan Sekarang!</h2>
    </div>

    <!-- Carousel Start -->
    <div class="container mt-5">
        <div id="carouselExampleCaptions" class="carousel slide mt-2">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/alditaher.jpg" class="d-block img-fluid" alt="Gambar1" width="100%">
                    <div class="carousel-caption d-none d-md-block text-light">
                        <h5>Konser Megah Aldi Taher</h5>
                        <p>Gaada duit buat nonton konser coldplay? tenang, masih ada aldi taher yang akan menghibur
                            kalian!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/images/coldplay-2_169.jpeg" class="d-block img-fluid" alt="Gambar2" style="width: 100%">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Konser Megah Coldplay</h5>
                        <p>Disini kalian juga bisa kok pesan tiket konser coldplay, syaratnya jangan miskin!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/images/kuburan-band.png" class="d-block img-fluid" alt="Gambar3" style="width: 100%">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Kuburan Band</h5>
                        <p>Kami juga menyediakan tiket konser kuburan band untuk kalian yang sakaratul maut.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <div class="container-fluid">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col">
                    <div class="card mt-5 ms-5" style="width: 18rem;">
                        <img src="/images/alditaher.jpg" class="card-img-top" alt="..." width="200px" height="200px">
                        <div class="card-body">
                            <h5 class="card-title">Konser Aldi Taher</h5>
                            <p class="card-text">Pilihan yang bagus,</p>
                            <a href="/pembeli" class="btn btn-primary">Pesan Sekarang!</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mt-5 ms-5" style="width: 18rem;">
                        <img src="/images/coldplay-2_169.jpeg" class="card-img-top" alt="..." width="200px" height="200px">
                        <div class="card-body">
                            <h5 class="card-title">Konser Coldplay</h5>
                            <p class="card-text">Wuih pada sultan nih,</p>
                            <a href="/pembeli" class="btn btn-primary">Pesan Sekarang!</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mt-5 ms-5" style="width: 18rem;">
                        <img src="/images/kuburan-band.png" class="card-img-top" alt="..." width="200px" height="200px">
                        <div class="card-body">
                            <h5 class="card-title">Konser Kuburan Band</h5>
                            <p class="card-text">Pilihan yang cerdas!</p>
                            <a href="/pembeli" class="btn btn-primary">Pesan Sekarang!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer Halaman Start -->
    <div class="mt-5">
        <div class="card text-center">
            <div class="card-header">
                TimWebTIXID
            </div>
            <div class="card-body">
                <h5 class="card-title">Terima Kasih sudah mengunjungi Website Kami , </h5>
                <p class="card-text">Support kami dengan memberi nilai UAS yang Memuaskan pak, xixixi.</p>
            </div>
            <div class="card-footer text-body-secondary">
                Made By : Kelompok 3 [Ferdi,Irfan,Viko]
            </div>
        </div>
    </div>
    <!-- Footer Halaman End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
        <script src="search.js"></script>
</body>

</html>