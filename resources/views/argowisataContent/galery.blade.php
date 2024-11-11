<style>
  @media(max-width: 768px) {
    .carousel-item img {
      width: 90% !important;
      height: 600px !important;
    }
    .carousel-control-prev{
      margin-left: 0% !important;
    }
    .carousel-control-next{
      margin-right: 0% !important;
    }
  }
</style>

<x-app-layout>
    <div class="flex-wrap">
            <h1 style="font-weight: bold; font-size: 4rem; text-align: center; margin-top: 20px;">Galery</h1>
            <p style="font-size: 1.5rem; text-align: center; color: #448337;">Lebih Mengenal dari Hasil Tangkapan Kamera</p>
            <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" style="margin-top: 50px;">
                <ol class="carousel-indicators" >
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" style="border-radius: 50%; width: 14px; height: 14px; backround-color:"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active" style="border-radius: 50%; width: 14px; height: 14px;"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active" style="border-radius: 50%; width: 14px; height: 14px;"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active" style="border-radius: 50%; width: 14px; height: 14px;"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active" style="border-radius: 50%; width: 14px; height: 14px;"></li>
                </ol>
                <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <img class="d-block mx-auto" src="{{asset('image/wisata5.jpg')}}" alt="First slide" style="width: 1064px; height: 950px;" >
                  </div>
                  <div class="carousel-item">
                    <img class="d-block mx-auto" src="{{asset('image/wisata6.jpg')}}" alt="Second slide" style="width: 1064px; height: 950px;" >
                  </div>
                  <div class="carousel-item">
                    <img class="d-block mx-auto" src="{{asset('image/wisata2.jpg')}}" alt="Third slide" style="width: 1064px; height: 950px;" >
                  </div>
                  <div class="carousel-item">
                    <img class="d-block mx-auto" src="{{asset('image/wisata3.jpg')}}" alt="Third slide" style="width: 1064px; height: 950px;" >
                  </div>
                  <div class="carousel-item">
                    <img class="d-block mx-auto" src="{{asset('image/wisata4.jpg')}}" alt="Third slide" style="width: 1064px; height: 950px;" >
                  </div>
                </div>                
              <div s>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="margin-left: 270px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="margin-right: 270px; ">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
              </div>
    </div>
</x-app-layout>