@extends('layouts.admin')
@section('style')
    <style>
        .dropzone {
            background: white;
            border-radius: 5px;
            border: 2px dashed rgb(0, 135, 247);
            border-image: none;
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
@endsection
@section('page-header')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Create
                    </div>
                    <h2 class="page-title">
                        {{ $title }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <span class="d-none d-sm-inline">
                            <a href="{{ route('show.activityArchive') }}" class="btn btn-danger">
                                Kembali ke arsip
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <form action="" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-group mb-2">
                            <label for="" class="form-label">Judul arsip</label>
                            <input type="text" name="judul_arsip" class="form-control" autocomplete="off"
                                placeholder="Masukkan judul arsip kegiatan" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mb-2">
                            <label for="" class="form-label">Deskripsi arsip</label>
                            <textarea rows="7" name="deskripsi" class="form-control" autocomplete="off"
                                placeholder="Masukkan deskripsi arsip kegiatan" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-2">
                            <label for="" class="form-label">Thumbnail arsip</label>
                            <img src="" id="imagePreview" alt="" srcset="" class="my-2" style="display: none">
                            <input type="file" class="form-control" name="thumbnail_arsip" id="imageInput">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">File yang ingin diarsipkan</label>
                            <div class="dropzone" id="myDropzone">
                                <div class="dz-message" data-dz-message>
                                    <img src="https://www.svgrepo.com/show/475820/image.svg" alt="" srcset=""
                                        width="50">
                                    <span class="d-block">Drag and drop files here or click to upload.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary"><svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload-cloud">
                            <polyline points="16 16 12 12 8 16"></polyline>
                            <line x1="12" y1="12" x2="12" y2="21"></line>
                            <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                            <polyline points="16 16 12 12 8 16"></polyline>
                        </svg> Buat agenda baru</button>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('script')
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



        Dropzone.autoDiscover = false; // Mematikan auto discover

        const myDropzone = new Dropzone("#myDropzone", {
            url: "/file/upload", // Ganti dengan URL endpoint upload Anda
            addRemoveLinks: true,
            autoProcessQueue: false, // Mematikan auto upload
            acceptedFiles: "", // Ganti sesuai dengan jenis file yang ingin diterima
            init: function() {
                const myDropzoneInstance = this;

                // Event saat file ditambahkan
                this.on("addedfile", function(file) {
                    const fileNameElement = file.previewElement.querySelector(".dz-filename span");
                    if (fileNameElement) {
                        fileNameElement.textContent = file.name;
                    }
                });

                // Event saat file dihapus
                this.on("removedfile", function(file) {
                    console.log("File removed:", file.name);
                });

                // Event saat tombol submit diklik
                document.getElementById("submit-all").addEventListener("click", function() {
                    // Kirim semua file yang ada di Dropzone
                    myDropzoneInstance.processQueue();
                });
            }
        });
    </script>
@endsection
