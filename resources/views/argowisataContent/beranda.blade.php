<style>
    @media (max-width: 768px) {
        .col-md-6 {
            margin-left: 0 !important; /* Menghapus margin kiri di mobile */
        }
    }
</style>
<x-app-layout>
    <div class="flex-wrap" >
        {{-- image content here --}}
        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('image/argowisatagambar.jpg')}}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('image/argowisatagambar1.jpg')}}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('image/argowisatagambar2.jpg')}}" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>

        {{-- activity content that can be done--}}
        <div class="container-fluid" style="background-color: #F8F9FA; height: 100vh;">
            <div class="row h-100 d-flex align-items-center">
                <div class="col-12 col-md-6 text-center text-md-start " style="margin-top: 20px; width: 100%; max-width: 500px; margin-left: 200px">
                    <h1 style="font-size: 4rem; font-weight: bold;">Lokasi Baru,<br>Banyak Wahana Seru!</h1>
                    <p style="font-size: 1.5rem; margin-top: 20px;">
                        Berbagai aktifitas bisa dilakukan pengunjung, diantaranya memetik jambu, menikmati jus jambu, berkuda, memberi makan hewan ternak seperti ikan, kambing, dan kelinci, serta menanam padi di sawah. Adapun biaya yang dikeluarkan saat mengunjungi destinasi wisata ini, yakni 18 ribu berlaku untuk semua usia. Dengan tiket masuk itu, selain menikmati kebun jambu pengunjung juga akan mendapatkan jus jambu yang segar.
                    </p>
                    <x-primary-button class="btn btn-primary" style="background-color: #448337; border-radius: 30px; margin-top: 20px;">
                        Pesan Tiket
                    </x-primary-button>
                </div>
                
                <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-start">
                    <img src="{{asset('image/logo.png')}}" alt="Gambar" class="img-fluid" style="max-width: 100%; height: auto; margin-top:20px">
                </div>
            </div>
        </div>
        
        

    </div>
</x-app-layout>