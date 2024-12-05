<x-app-layout>
    @if ($order->isEmpty())
        <h1>Silahkan Buat Pesan tiket Terlebih Dahulu</h1>
    @endif
    <div class="container mt-4">
        @foreach ($order->take(4) as $orders)
            <div class="card shadow mb-4" style="border-radius: 10px; width: 50%; margin: auto;">
                <div class="d-flex align-items-center p-3">
                    <img src="{{ asset('image/logo.png') }}" alt="Logo" class="img-fluid rounded" style="width: 25%;">
                    <div class="ml-4">
                        <h2 class="display-4 font-weight-bold mb-2">User History</h2>
                        <div class="d-flex align-items-center">
                            <h3 class="h5 font-weight-bold mb-0">Tanggal Pesan:</h3>
                            <h3 class="h6 ml-2 mb-0 text-muted">{{ $orders->created_at->format('d M Y, H:i') }}</h3>
                        </div>
                        <div class="d-flex align-items-center">
                            <h3 class="h5 font-weight-bold mb-0">Jumlah Tiket:</h3>
                            <h3 class="h6 ml-2 mb-0 text-muted">{{ $orders->jumlah_tiket }}</h3>
                        </div>
                        <div class="d-flex align-items-center">
                            <h3 class="h5 font-weight-bold mb-0">Total Harga:</h3>
                            <h3 class="h6 ml-2 mb-0 text-muted">Rp. {{number_format($orders->total_harga, 0, ',', '.')}}</h3>
                        </div>
    
                        <!-- Add clickable link around the border -->
                        <a href="{{ route('invoice', ['id' => $orders->id]) }}" class="text-decoration-none">
                            @if ($orders->status == 'Unpaid')
                                <div class="card shadow mb-4 mt-4" style="border-radius: 10px; width: 75%;  margin: auto; background-color:brown; cursor: pointer;">
                                    <div class="d-flex flex-row justify-center" style="color: white;">
                                        <h3 style="font-size: 1.25rem; font-weight: bold">status :</h3>
                                        <h3 style="font-size: 1.25rem;">{{$orders->status}}</h3>
                                    </div>
                                </div>
                            @else
                                <div class="card shadow mb-4 mt-4" style="border-radius: 10px; width: 75%;  margin: auto; background-color:chartreuse; cursor: pointer;">
                                    <div class="d-flex flex-row justify-center" style="color: white;">
                                        <h3 style="font-size: 1.25rem; font-weight: bold">status :</h3>
                                        <h3 style="font-size: 1.25rem;">{{$orders->status}}</h3>
                                    </div>
                                </div>
                            @endif
                        </a>
    
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
