@extends('layouts.admin')
@section('page-header')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h2 class="page-title">
                        {{ $title }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <form action="" method="POST">
        <div class="card">
            <div class="card-body">
                <img id="imagePreview" src="/unknown/unknown-structure.png" class="w-full mb-3" alt="Preview Image">
                <input type="file" class="form-control mb-3" id="imageInput" accept=".png, .jpg, .jpeg" required>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary"><svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload-cloud">
                            <polyline points="16 16 12 12 8 16"></polyline>
                            <line x1="12" y1="12" x2="12" y2="21"></line>
                            <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                            <polyline points="16 16 12 12 8 16"></polyline>
                        </svg> Upload struktur</button>
                </div>
            </div>
        </div>
    </form>

    <script>
        // Seleksi elemen input dan img
        const imageInput = document.getElementById('imageInput');
        const imagePreview = document.getElementById('imagePreview');

        // Event listener ketika pengguna memilih file
        imageInput.addEventListener('change', function() {
            const file = this.files[0]; // Mendapatkan file yang diunggah

            if (file) {
                const reader = new FileReader(); // Membuat FileReader untuk membaca file gambar

                reader.onload = function(e) {
                    // Set sumber gambar pratinjau dengan hasil dari FileReader
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block'; // Tampilkan gambar setelah file diunggah
                }

                reader.readAsDataURL(file); // Membaca file sebagai Data URL
            }
        });
    </script>
@endsection
