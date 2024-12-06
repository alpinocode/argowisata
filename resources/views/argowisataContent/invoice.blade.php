<style>
    @media(max-width: 768px) {
        .border {
            width: 480px !important;
        }
        .back-content {
            margin-left: 30px !important;
        }
        .img-content {
            width: 80px !important;
            margin-right: 30px !important;
        }
        .text-content {
            font-size: 0.25rem !important;
        }
        .header-content {
            padding: 0 !important;
        }
        .main-content {
            margin-left: 20px !important;
        }
        .transaction-text-bank{
            width: 270px !important;
        }
    }
</style>
<x-app-layout>
        @if ($errors->any())
            <div class="card text-white bg-danger mb-3 " style="width: 50%; justify-content: center; margin-left: 25%;" id="error-card">
                <div class="d-flex card-header" style="justify-content: space-between;">
                    <h2>Error</h2>
                    <i class="bi bi-file-x-fill" id="x-icon" style="cursor: pointer; font-size: 1.5rem;"></i>
                </div>
                <div class="card-body">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            </div>
        @endif

        @if (session('success'))
            <div class="card text-white bg-success mb-3" role="alert" style="width: 50%; justify-content: center; margin-left: 25%;" id="success-card">
                <div class="d-flex card-header" style="justify-content: space-between;">
                    <h2>success</h2>
                    <i class="bi bi-file-x-fill" id="x-icon" style="cursor: pointer; font-size: 1.5rem;"></i>
                </div>
                <div class="card-body">
                    {{ session('success') }}
                </div>
            </div>
        @elseif (session('error'))
            <div class="card text-white bg-danger mb-3 " style="width: 50%; justify-content: center; margin-left: 25%;" id="error-card">
                <div class="d-flex card-header" style="justify-content: space-between;">
                    <h2>Error</h2>
                    <i class="bi bi-file-x-fill" id="x-icon" style="cursor: pointer; font-size: 1.5rem;"></i>
                </div>
                <div class="card-body">
                    {{ session('error') }}
                </div>
            </div>
        @endif
        
        <div class="mt-4 d-flex flex-row gap-4 cursor-pointer back-content" style="margin-left: 320px;" onclick="window.history.back()">
            <img src="{{asset('icon/lefth-icon.svg')}}" alt="" >
            <h2 style="font-size: 1.5rem; font-weight: bold; color:#448337; " class="cursor-pointer mt-1">Kembali</h2>

            <a href="{{ route('invoice', ['id' => $order->id]) }}?export=pdf" class="btn btn-primary"> Export Pdf</a>
        </div>

        
        <div class="d-flex justify-content-center">
            <div class="border flex-wrap shadow flex-wrap mt-4 " style="width: 864px; height: 725px; border: 1px solid #E45F58; background-color: #D9D9D966; " >
                <div class="d-flex justify-between header-content" style="background-color: #E45F58; height: 142px; padding: 10px">
                        <img src="{{asset('image/logo-jambu-marina-batam-06-1.svg')}}" alt="argo wisata" width="196px;" class="ml-4 img-content">
                        <div class="flex-col gap-3 mt-4 mr-4 text-content">
                                <div class="d-flex" style="gap: 10px">
                                    <h3 class="text-white" style="font-size: 1.25rem; font-weight: bold;">Tanggal Kunjungan : </h3>
                                    <h3 class="text-white" style="font-size: 1.25rem; ">{{ \Carbon\Carbon::parse($order->tanggal_pesan)->translatedFormat('d F Y') }}</h3>
                                </div>
                                <div class="d-flex" style="gap: 10px">
                                    <h3 class="text-white" style="font-size: 1.25rem; font-weight: bold;">Waktu Kunjungan : </h3>
                                    <h3 class="text-white" style="font-size: 1.25rem; ">{{ \Carbon\Carbon::parse($order->waktu_pesan)->format('H:i') }} WIB</h3>
                                </div>
                                <div class="d-flex" style="gap: 10px">
                                    <h3 class="text-white" style="font-size: 1.25rem; font-weight: bold;">Kode Pesanan :</h3>
                                    <h3 class="text-white" style="font-size: 1.25rem; "></h3>
                                </div>
                        </div>
                </div>
                <div class="p-4 d-flex flex-column mr-4 main-content" style="margin-left: 100px; gap: 20px;">
                    <h2 style="font-weight: bold; font-size: 1.5rem;">Halo {{$order->name}}</h2>
                    <h112 style="font-weight: bold; font-size: 1.5rem;">Terimakasih sudah memesan tiket via online</h112>
                
                    <div style="margin-top: 30px;">
                        <h3 style="font-weight: bold; font-size: 1.5rem; " >Rincian Harga</h3>
                        <div class="d-flex justify-between text-balance mt-2" style="gap: 10px;">
                            <div class="d-flex flex-column" style="gap: 5px;">
                                <h2 style="font-size: 1.25rem;">Tiket Masuk</h2>
                                <h2 style="font-size: 1.25rem;">{{$order->jumlah_tiket}}</h2>
                            </div>
                            <h2 style="font-size: 1.25rem;">
                                Rp. 
                                {{ 
                                    number_format(
                                        ($order->harga_masuk == 'anak-anak' ? 10000 : 15000) + 
                                        ($order->harga_parkir == 'motor' ? 1000 : ($order->harga_parkir == 'mobil' ? 5000 : 0)),
                                        0, // Jumlah desimal
                                        ',', // Pemisah desimal
                                        '.'  // Pemisah ribuan
                                    ) 
                                }}
                            </h2>
                        </div>
                    </div>
                    <img src="{{asset('icon/garis-horizontal.svg')}}" alt="">
                    <div class="d-flex flex-row justify-between " style="margin-top: 20px;">
                        <h2 class="text-balance" style="font-size: 1.25rem; font-weight: bold;">Total Harga</h2>
                        <h2 class="text-balance" style="font-size: 1.25rem;">Rp. {{number_format($order->total_harga, 0, ',', '.')}}</h2>
                    </div>
                    <div class="d-flex flex-row justify-between">
                        <h2 class="text-balance transaction-text-bank" style="font-size: 1.25rem; font-weight: bold;">Dibayar dengan transfer melalui {{$order->payment_method}}</h2>
                        <h2 class="text-balance" style="font-size: 1.25rem;">Rp. {{number_format($order->total_harga, 0, ',', '.')}}</h2>
                    </div>
                    <h2 class="mt-4" style="color: #E45F58; font-size: 1.25rem">*Jangan lupa Screenshoot bukti pembayaran ini, untuk ditunjukkan kepada petugas pada waktu kunjungan yang sudah dipesan.</h2>
                </div>
                
            </div>

        </div>
</x-app-layout>