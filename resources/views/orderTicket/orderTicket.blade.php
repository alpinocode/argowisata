<style>
    /* Styled input tetap */
    .styled-input {
        border: 2px solid #4CAF50;
        border-radius: 15px;
        padding: 20px;
        margin-bottom: 20px;
        position: relative;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .styled-input .form-label {
        position: absolute;
        top: -12px;
        left: 20px;
        background: white;
        padding: 0 5px;
        font-weight: bold;
        font-size: 14px;
    }

    .styled-input .form-control {
        border: none;
        box-shadow: none;
        padding: 10px 15px;
        font-size: 16px;
        color: #333;
    }

    .styled-input .form-control:focus {
        outline: none;
        box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
    }

    /* Tambahan CSS untuk responsivitas */
    @media (max-width: 768px) {
        .content-main {
            margin-left: 0 !important;
            padding: 15px;
        }
        .button-content {
            margin-left: 350 !important;
        }

        .row {
            flex-direction: column !important;
        }

        .col-md-6,
        .col-md-4 {
            width: 100% !important;
        }

        .styled-input {
            padding: 15px;
            margin-bottom: 15px;
        }

        .display-4 {
            font-size: 24px;
        }

        .from-controle {
            width: 420px !important;    
        }
        .d-flex {
            flex-wrap: wrap !important;
        }
    }
</style>

<x-app-layout>
    {{-- Handler error and success --}}
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


    <div class="d-flex flex-wrap content-main" style="height: auto; margin-left: 320px;">
        <div class="mt-4" style="max-width: 800px; width: 100%;">
            <h1 class="display-4" style="font-weight: bold;">Data Diri Anda</h1>
            <div class="d-flex justify-content-center flex-wrap">
                <form action="{{ route('orderTicket.store') }}" method="POST" style="width: 100%;">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3 styled-input">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" 
                                       value="{{ Auth::check() ? Auth::user()->name : old('name') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 styled-input">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" 
                                       value="{{ Auth::check() ? Auth::user()->email : old('email') }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3 styled-input">
                                <label for="telepon" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="telepon" name="telepon" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 styled-input">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" required>
                            </div>
                        </div>
                    </div>

                    <h1 class="display-4" style="font-weight: bold;">Detail Pesanan</h1>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3 styled-input">
                                <label for="jumlah_tiket" class="form-label">Jumlah Tiket</label>
                                <input type="number" class="form-control" name="jumlah_tiket" id="jumlah_tiket" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 styled-input">
                                <label for="harga_masuk" class="form-label">HARGA MASUK</label>
                                <select name="harga_masuk" id="harga_masuk" class="from-controle text-center" style="border-radius: 10px; border-color:aliceblue; width: 200px;">
                                    <option name="harga_masuk" id="harga_masuk">dewasa</option>
                                    <option name="harga_masuk" id="harga_masuk">anak-anak</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 styled-input ">
                                <label for="harga_parkir" class="form-label">HARGA TIKET</label>
                                <select name="harga_parkir" id="harga_parkir" class="from-controle text-center" style="border-radius: 10px; border-color:aliceblue; width: 200px;">
                                    <option name="harga_parkir" id="harga_parkir">motor</option>
                                    <option name="harga_parkir" id="harga_parkir">mobil</option>
                                </select>
                            </div>
                        </div>
                        
                    </div>

                    <x-primary-button class="ms-4 button-content" style="background-color: #448337; margin-left: 700px;">
                        {{ __('Order') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

