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

    <div class="container my-5">
   
    
        <!-- Form untuk komentar -->
        <div class="card shadow-sm mb-5">
            <div class="card-header bg-primary text-white text-center">
                <h5>Bagikan Pendapat Anda</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('comentars.store') }}" method="POST" novalidate>
                    @csrf
                    <div class="row g-3">
                        <!-- Komentar -->
                        <div class="col-12">
                            <label for="comentar" class="form-label fw-bold">Komentar</label>
                            <textarea id="comentar" name="comentar" rows="4" class="form-control" 
                                      placeholder="Tulis komentar Anda di sini..." required></textarea>
                            <div class="invalid-feedback">Komentar tidak boleh kosong.</div>
                        </div>
    
                        <!-- Rating -->
                        <div class="col-md-6 mt-4">
                            <label for="rating" class="form-label fw-bold">Rating: </label>
                            <select id="rating" name="rating" class="form-select" style="border-radius: 10px" required>
                                <option value="" disabled selected>Pilih Rating Anda</option>
                                @for($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}">{{ $i }} ⭐</option>
                                @endfor
                            </select>
                            <div class="invalid-feedback">Silakan pilih rating.</div>
                        </div>
    
                        <!-- Tombol Kirim -->
                        <div class="col-md-6 d-flex align-items-end">
                            <button type="submit" class="btn btn-success w-100">
                                <span class="fw-bold">Kirim</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script>
        // Tambahkan validasi Bootstrap
        (function () {
            'use strict'
            const forms = document.querySelectorAll('form')
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
    
</x-app-layout>
