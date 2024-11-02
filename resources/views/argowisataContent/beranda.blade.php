<style>
    @media (max-width: 768px) {
        .col-md-6 {
            margin-left: 0 !important; /* Menghapus margin kiri di mobile */
          }
          
          .btn {
          margin-top: 20px !important; /* Menghapus margin kiri di mobile */

        }
    }

     /* Responsive styling */
     @media (min-width: 768px) {
              .d-flex .flex-column {
                  margin-left: 200px;
              }
          }
      
          @media (max-width: 767.98px) {
              .d-flex .flex-column {
                  margin-left: 0;
                  text-align: center;
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
        <div class="d-flex flex-wrap" style="background-color: #F8F9FA; height: auto;">
          <div class="d-flex w-100 h-100 flex-column flex-md-row" style="margin-bottom: 40px">
              <!-- Konten Kiri -->
              <div class="d-flex flex-column justify-content-center p-3" style="flex-basis: 50%; margin-left: 0;">
                  <h1 class="text-start" style="font-size: 3rem; font-weight: bold;">Lokasi Baru,<br>Banyak Wahana Seru!</h1>
                  <p class="text-start" style="font-size: 1.5rem; margin-top: 20px;">
                      Berbagai aktifitas bisa dilakukan pengunjung, diantaranya memetik jambu, menikmati jus jambu, berkuda, memberi makan hewan ternak seperti ikan, kambing, dan kelinci, serta menanam padi di sawah. Adapun biaya yang dikeluarkan saat mengunjungi destinasi wisata ini, yakni 18 ribu berlaku untuk semua usia. Dengan tiket masuk itu, selain menikmati kebun jambu pengunjung juga akan mendapatkan jus jambu yang segar.
                  </p>
                  <x-primary-button class="btn btn-primary" style="background-color: #448337; border-radius: 30px; margin-top: 20px; width: 200px;">
                      Pesan Tiket
                  </x-primary-button>
              </div>
      
              <!-- Konten Kanan -->
              <div class="d-flex align-items-center justify-content-center" style="flex-basis: 50%;">
                  <img src="{{asset('image/logo1.png')}}" alt="Gambar" class="img-fluid" style="max-width: 60%; height: auto; margin-top: 20px;">
              </div>
          </div>
      </div>
      
         
      
      
      

        {{-- service Content --}}
        
        <div class="container flex-wrap" style="margin-top: 100px; ">
          <div class="row justify-content-center" >
            
            <!-- Card 1 -->
            <div class="col-md-4 mb-4 d-flex justify-content-center ">
              <div class="" style="width: 24rem; margin-top: 25px; margin-left: 25px">
                <div class="card-body">
                  <h3 class="card-title" style="font-size: 2.5rem; font-weight: bold">Layanan Kami</h3>
                  <p class="card-text" style="color: #448337; font-size: 1rem; font-weight: bold">Best Nature Destination in Batam, Kepulauan Riau</p>
                 
                </div>
              </div>
            </div>
            
            <!-- Card 2 -->
            <div class="col-md-4 mb-4 d-flex justify-content-center">
              <div class="card" style="width: 24rem;">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-2">
                    <img src="{{ asset('image/pot.png') }}" alt="" style="width:45px; height: 45px;">
                    <h5 class="card-title mt-2 ms-2" style="font-weight: bold; font-size: 1.5rem">Botanical Park</h5>
                  </div>
                  <p class="card-text" style="margin-bottom:10px">Berisi jenis-jenis tumbuhan yang ada tersedia di JMB Eco Park dan juga terdapat informasi singkat tentang tumbuhannya.</p>
                  <hr style="border-top: 2px solid #BFBFBFdd; margin: 10px 0;">
                  <ul>
                    <li>Berbagai tumbuhan</li>
                    <li>Penyejuk mata</li>
                  </ul>

                  <x-primary-button class="btn btn-primary d-flex align-items-center justify-content-center" style="background-color: #E9625B; margin-top: 20px; width: 100%; height: 58px;">
                    Detail lebih lanjut
                  </x-primary-button>
                </div>
              </div>
            </div>
          
            <!-- Card 3 -->
            
            <div class="col-md-4 mb-4 d-flex justify-content-center">
              <div class="card" style="width: 24rem;">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-2">
                    <img src="{{ asset('image/wahana.png') }}" alt="" style="width:45px; height: 45px;">
                    <h5 class="card-title mt-2 ms-2" style="font-weight: bold; font-size: 1.5rem">Botanical Park</h5>
                  </div>
                  <p class="card-text" style="margin-bottom:10px">Berbagai aktifitas bisa dilakukan pengunjung, seperti fun game dan  playgorund untuk anak-anak usia dini.</p>
                  <hr style="border-top: 2px solid #BFBFBFdd; margin: 10px 0;">
                  <ul>
                    <li>Memanah</li>
                    <li>Berenang</li>
                    <li>Berkuda</li>
                  </ul>

                  <x-primary-button class="btn btn-primary d-flex align-items-center justify-content-center" style="background-color: #E9625B; margin-top: 20px; width: 100%; height: 58px;">
                    Detail lebih lanjut
                  </x-primary-button>
                </div>
              </div>
            </div>
            
            <!-- Card 4 -->
            <div class="col-md-4 mb-4 d-flex justify-content-center">
              <div class="card" style="width: 24rem;">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-2">
                    <img src="{{ asset('image/lamp.png') }}" alt="" style="width:45px; height: 45px;">
                    <h5 class="card-title mt-2 ms-2" style="font-weight: bold; font-size: 1.5rem">Botanical Park</h5>
                  </div>
                  <p class="card-text" style="margin-bottom:10px">Pada Education Park berisi edukasi menanam, mencangkok, memasak, memupuk, menyiram. Terdapat kegiatan yang melatih lifeskill juga, seperti membuat jus, fotogafi, membuat coklat.</p>
                  <hr style="border-top: 2px solid #BFBFBFdd; margin: 10px 0;">

                  <ul>
                    <li>Sifatnya tidak berhubungan dengan bertani dan beternak</li>
                  </ul>

                  <x-primary-button class="btn btn-primary d-flex align-items-center justify-content-center" style="background-color: #E9625B; margin-top: 20px; width: 100%; height: 58px;">
                    Detail lebih lanjut
                  </x-primary-button>
                </div>
              </div>
            </div>
            
        
            <!-- Card 5 -->
            <div class="col-md-4 mb-4 d-flex justify-content-center">
              <div class="card" style="width: 24rem;">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-2">
                    <img src="{{ asset('image/wahana.png') }}" alt="" style="width:45px; height: 45px;">
                    <h5 class="card-title mt-2 ms-2" style="font-weight: bold; font-size: 1.5rem">Botanical Park</h5>
                  </div>
                  <p class="card-text" style="margin-bottom:10px">Berbagai aktifitas bisa dilakukan pengunjung, diantaranya memetik jambu, menikmati jus jambu, </p>
                  <hr style="border-top: 2px solid #BFBFBFdd; margin: 10px 0;">
                  <ul>
                    <li>Berbagai tumbuhan</li>
                    <li>Penyejuk mata</li>
                  </ul>
                  
                  <x-primary-button class="btn btn-primary d-flex align-items-center justify-content-center" style="background-color: #E9625B; margin-top: 70px; width: 100%; height: 58px;">
                    Detail lebih lanjut
                  </x-primary-button>
                </div>
              </div>
            </div>
            
        
            <!-- Card 6 -->
            <div class="col-md-4 mb-4 d-flex justify-content-center">
              <div class="card" style="width: 24rem;">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-2">
                    <img src="{{ asset('image/wahana.png') }}" alt="" style="width:45px; height: 45px;">
                    <h5 class="card-title mt-2 ms-2" style="font-weight: bold; font-size: 1.5rem">Botanical Park</h5>
                  </div>
                  <p class="card-text" style="margin-bottom:10px">Berbagai aktifitas bisa dilakukan pengunjung, diantaranya memetik jambu, menikmati jus jambu, </p>
                  <hr style="border-top: 2px solid #BFBFBFdd; margin: 10px 0;">
                  <ul style="list-style-type: none; padding: 0;">
                    <li style="position: relative; padding-left: 20px; margin-bottom: 5px;">
                      <span style="position: absolute; left: 0; top: 0.4em; width: 5px; height: 5px; background-color: #000; border-radius: 50%;"></span>
                      Berbagai tumbuhan
                    </li>
                    <li style="position: relative; padding-left: 20px; margin-bottom: 5px;">
                      <span style="position: absolute; left: 0; top: 0.4em; width: 5px; height: 5px; background-color: #000; border-radius: 50%;"></span>
                      Penyejuk mata
                    </li>
                  </ul>
                  

                  <x-primary-button class="btn btn-primary d-flex align-items-center justify-content-center" style="background-color: #E9625B; margin-top: 70px; width: 100%; height: 58px;">
                    Detail lebih lanjut
                  </x-primary-button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        

    </div>
</x-app-layout>