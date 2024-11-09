<style>
    .hidden {
        display: none;
    }

    @media (max-width: 768px) {
        h1 {
            font-size: 1.5rem; 
        }
        p {
            font-size: 0.875rem; 
        }
    }

    @media (max-width: 576px) {
        h1 {
            font-size: 1.25rem; 
        }
        p {
            font-size: 0.75rem; 
        }
        .img-fluid {
            margin-left: 3.5%;
            width: 300px;
            height: 250px;
        }
    }
</style>
<title>Fasilitas</title>

<x-app-layout>
    <div style="height: auto;">
        <div class="container mt-4">
            <h1 class="text-center display-4" style="font-weight: bold;">Fasilitas</h1>
            <p class="text-center" style="color: #448337; font-size: 1.5rem; font-weight: bold;">Agrowisata Jambu Marina Batam</p>
            <div class="d-flex justify-content-center">
                <img src="{{asset('image/map-wisata.png')}}" alt="" style="border-radius: 20px; margin-top: 80px; width: 100%;">
            </div>
            
          {{-- Memanah Content Component --}}
            <div class="mt-4">
                <div class="border d-flex align-items-center justify-content-between" style="background-color: #E45F5833; height: 65px; border-radius: 20px;">
                    <h1 class="h5 ms-3" style="font-weight: bold;">Memanah</h1>
                    <div class="d-flex align-items-center me-3" style="margin-right: 3.5%">
                        <i class="bi bi-plus-circle me-3 toggle-icon" style="font-size: 1.5rem;" onclick="toggleContent('memanahContent', this)"></i>
                    </div>
                </div>
                <div class="flex flex-wrap hidden" id="memanahContent" style="margin-top: 20px;">
                    <img src="{{ asset('image/wisata-berkuda.jpg') }}" alt="" class="img-fluid" style="width: 250px; height: 150px;">
                    <div class="ms-3">
                        <h1 class="h5" style="font-weight: bold;">LOKASI BARU,<br>BANYAK WAHANA SERU!</h1>
                        <p style="font-size: 1rem;">Berbagai aktifitas bisa dilakukan pengunjung, diantaranya<br>memetik jambu, menikmati jus jambu, berkuda, memberi<br> makan hewan ternak seperti ikan, kambing, dan kelinci,<br>serta menanam padi di sawah.</p>
                    </div>
                </div>
            </div>
            {{-- BERKUDA content component --}}
            <div class="mt-4">
                <div class="border d-flex align-items-center justify-content-between" style="background-color: #E45F5833; height: 65px; border-radius: 20px;">
                    <h1 class="h5 ms-3" style="font-weight: bold;">BERKUDA</h1>
                    <div class="d-flex align-items-center me-3" style="margin-right: 3.5%">
                        <i class="bi bi-plus-circle me-3" style="font-size: 1.5rem;" onclick="toggleContent('berkudaContent', this)"></i>
                        <i class="bi bi-dash-circle hidden" style="font-size: 1.5rem;" onclick="toggleContent('berkudaContent', this)"></i>
                    </div>
                </div>
                <div class="flex flex-wrap hidden" id="funtGameContent" style="margin-top: 20px;">
                    <img src="{{ asset('image/wisata-berkuda.jpg') }}" alt="" class="img-fluid" style="width: 250px; height: 150px;">
                    <div class="ms-3">
                        <h1 class="h5" style="font-weight: bold;">LOKASI BARU,<br>BANYAK WAHANA SERU!</h1>
                        <p style="font-size: 1rem;">Berbagai aktifitas bisa dilakukan pengunjung, diantaranya<br>memetik jambu, menikmati jus jambu, berkuda, memberi<br> makan hewan ternak seperti ikan, kambing, dan kelinci,<br>serta menanam padi di sawah.</p>
                    </div>
                </div>
            </div>
            {{-- fun game content component --}}
            <div class="mt-4">
                <div class="border d-flex align-items-center justify-content-between" style="background-color: #E45F5833; height: 65px; border-radius: 20px;">
                    <h1 class="h5 ms-3" style="font-weight: bold;">Fun Game</h1>
                    <div class="d-flex align-items-center me-3" style="margin-right: 3.5%">
                        <i class="bi bi-plus-circle me-3" style="font-size: 1.5rem;" onclick="toggleContent('funtGameContent', this)"></i>
                        <i class="bi bi-dash-circle hidden" style="font-size: 1.5rem;" onclick="toggleContent('funtGameContent', this)"></i>
                    </div>
                </div>
                <div class="flex flex-wrap hidden" id="funtGameContent" style="margin-top: 20px;">
                    <img src="{{ asset('image/wisata-berkuda.jpg') }}" alt="" class="img-fluid" style="width: 250px; height: 150px;">
                    <div class="ms-3">
                        <h1 class="h5" style="font-weight: bold;">LOKASI BARU,<br>BANYAK WAHANA SERU!</h1>
                        <p style="font-size: 1rem;">Berbagai aktifitas bisa dilakukan pengunjung, diantaranya<br>memetik jambu, menikmati jus jambu, berkuda, memberi<br> makan hewan ternak seperti ikan, kambing, dan kelinci,<br>serta menanam padi di sawah.</p>
                    </div>
                </div>
            </div>
            {{-- Taman Kelinci content component --}}
            <div class="mt-4">
                <div class="border d-flex align-items-center justify-content-between" style="background-color: #E45F5833; height: 65px; border-radius: 20px;">
                    <h1 class="h5 ms-3" style="font-weight: bold;">Taman Kelinci</h1>
                    <div class="d-flex align-items-center me-3" style="margin-right: 3.5%">
                        <i class="bi bi-plus-circle me-3" style="font-size: 1.5rem;" onclick="toggleContent('tamanKelinciContent', this)"></i>
                        <i class="bi bi-dash-circle hidden" style="font-size: 1.5rem;" onclick="toggleContent('tamanKelinciContent', this)"></i>
                    </div>
                </div>
                <div class="flex flex-wrap hidden" id="tamanKelinciContent" style="margin-top: 20px;">
                    <img src="{{ asset('image/wisata-berkuda.jpg') }}" alt="" class="img-fluid" style="width: 250px; height: 150px;">
                    <div class="ms-3">
                        <h1 class="h5" style="font-weight: bold;">LOKASI BARU,<br>BANYAK WAHANA SERU!</h1>
                        <p style="font-size: 1rem;">Berbagai aktifitas bisa dilakukan pengunjung, diantaranya<br>memetik jambu, menikmati jus jambu, berkuda, memberi<br> makan hewan ternak seperti ikan, kambing, dan kelinci,<br>serta menanam padi di sawah.</p>
                    </div>
                </div>
            </div>
            {{-- camping content component --}}
            <div class="mt-4">
                <div class="border d-flex align-items-center justify-content-between" style="background-color: #E45F5833; height: 65px; border-radius: 20px;">
                    <h1 class="h5 ms-3" style="font-weight: bold;">Camping</h1>
                    <div class="d-flex align-items-center me-3" style="margin-right: 3.5%">
                        <i class="bi bi-plus-circle me-3" style="font-size: 1.5rem;" onclick="toggleContent('campingContent', this)"></i>
                        <i class="bi bi-dash-circle hidden" style="font-size: 1.5rem;" onclick="toggleContent('campingContent', this)"></i>
                    </div>
                </div>
                <div class="flex flex-wrap hidden" id="campingContent" style="margin-top: 20px;">
                    <img src="{{ asset('image/wisata-berkuda.jpg') }}" alt="" class="img-fluid" style="width: 250px; height: 150px;">
                    <div class="ms-3">
                        <h1 class="h5" style="font-weight: bold;">LOKASI BARU,<br>BANYAK WAHANA SERU!</h1>
                        <p style="font-size: 1rem;">Berbagai aktifitas bisa dilakukan pengunjung, diantaranya<br>memetik jambu, menikmati jus jambu, berkuda, memberi<br> makan hewan ternak seperti ikan, kambing, dan kelinci,<br>serta menanam padi di sawah.</p>
                    </div>
                </div>
            </div>
            {{-- Mushola content component --}}
            <div class="mt-4">
                <div class="border d-flex align-items-center justify-content-between" style="background-color: #E45F5833; height: 65px; border-radius: 20px;">
                    <h1 class="h5 ms-3" style="font-weight: bold;">Mushola</h1>
                    <div class="d-flex align-items-center me-3" style="margin-right: 3.5%">
                        <i class="bi bi-plus-circle me-3" style="font-size: 1.5rem;" onclick="toggleContent('musholaContent', this)"></i>
                        <i class="bi bi-dash-circle hidden" style="font-size: 1.5rem;" onclick="toggleContent('musholaContent', this)"></i>
                    </div>
                </div>
                <div class="flex flex-wrap hidden" id="musholaContent" style="margin-top: 20px;">
                    <img src="{{ asset('image/wisata-berkuda.jpg') }}" alt="" class="img-fluid" style="width: 250px; height: 150px;">
                    <div class="ms-3">
                        <h1 class="h5" style="font-weight: bold;">LOKASI BARU,<br>BANYAK WAHANA SERU!</h1>
                        <p style="font-size: 1rem;">Berbagai aktifitas bisa dilakukan pengunjung, diantaranya<br>memetik jambu, menikmati jus jambu, berkuda, memberi<br> makan hewan ternak seperti ikan, kambing, dan kelinci,<br>serta menanam padi di sawah.</p>
                    </div>
                </div>
            </div>
            {{-- Gazebo content component --}}
            <div class="mt-4">
                <div class="border d-flex align-items-center justify-content-between" style="background-color: #E45F5833; height: 65px; border-radius: 20px;">
                    <h1 class="h5 ms-3" style="font-weight: bold;">GAZEBO</h1>
                    <div class="d-flex align-items-center me-3" style="margin-right: 3.5%">
                        <i class="bi bi-plus-circle me-3" style="font-size: 1.5rem;" onclick="toggleContent('gazeboContent', this)"></i>
                        <i class="bi bi-dash-circle hidden" style="font-size: 1.5rem;" onclick="toggleContent('gazeboContent', this)"></i>
                    </div>
                </div>
                <div class="flex flex-wrap hidden" id="gazeboContent" style="margin-top: 20px;">
                    <img src="{{ asset('image/wisata-berkuda.jpg') }}" alt="" class="img-fluid" style="width: 250px; height: 150px;">
                    <div class="ms-3">
                        <h1 class="h5" style="font-weight: bold;">LOKASI BARU,<br>BANYAK WAHANA SERU!</h1>
                        <p style="font-size: 1rem;">Berbagai aktifitas bisa dilakukan pengunjung, diantaranya<br>memetik jambu, menikmati jus jambu, berkuda, memberi<br> makan hewan ternak seperti ikan, kambing, dan kelinci,<br>serta menanam padi di sawah.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleContent(contentId, icon) {
    var content = document.getElementById(contentId);

    // Toggle visibility of content
    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        icon.classList.remove('bi-plus-circle');
        icon.classList.add('bi-dash-circle');
    } else {
        content.classList.add('hidden');
        icon.classList.remove('bi-dash-circle');
        icon.classList.add('bi-plus-circle');
    }
}
    </script>
</x-app-layout>
