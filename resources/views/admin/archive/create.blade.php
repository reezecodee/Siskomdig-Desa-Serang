@extends('layouts.admin')
@section('style')
    <style>
        .upload_dropZone {
            color: #0f3c4b;
            outline: 2px dashed rgb(197, 196, 196);
            transition:
                outline-offset 0.2s ease-out,
                outline-color 0.3s ease-in-out,
                background-color 0.2s ease-out;
        }

        .upload_img {
            width: calc(33.333% - (2rem / 3));
            object-fit: contain;
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
    <x-admin.alert.success :success="session('success')" />
    <x-admin.alert.failed :failed="session('failed')" />
    <form action="{{ route('store.archive') }}" method="POST" id="form-store" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-group mb-2">
                            <label for="" class="form-label">Thumbnail arsip</label>
                            <div class="d-flex justify-content-center">
                                <img src="" id="imagePreview" alt="" srcset="" class="my-2"
                                    style="display: none">
                            </div>
                            <input type="file"
                                class="form-control @error('thumbnail_arsip') is-invalid
                            @enderror"
                                name="thumbnail_arsip" id="imageInput" accept=".jpg, .png, .jpeg">
                            @error('thumbnail_arsip')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mb-2">
                            <label for="" class="form-label">Judul arsip</label>
                            <input type="text" name="judul_arsip"
                                class="form-control @error('judul_arsip') is-invalid
                            @enderror"
                                autocomplete="off" placeholder="Masukkan judul arsip kegiatan" required>
                            @error('judul_arsip')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mb-2">
                            <label for="" class="form-label">Deskripsi arsip</label>
                            <textarea rows="7" name="deskripsi"
                                class="form-control @error('deskripsi') is-invalid
                            @enderror" autocomplete="off"
                                placeholder="Masukkan deskripsi arsip kegiatan" required></textarea>
                            @error('deskripsi')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Upload file yang ingin di arsipkan</label>
                            <div>
                                <fieldset class="upload_dropZone text-center mb-3 p-4">

                                    <legend class="visually-hidden">Image uploader</legend>

                                    <img src="https://www.svgrepo.com/show/530408/upload.svg" alt="" srcset=""
                                        width="60">

                                    <p class="small my-2">Drag &amp; Drop files inside dashed region<br><i>or</i>
                                    </p>

                                    <input id="upload_image_logo" class="position-absolute invisible" type="file"
                                        name="files[]" multiple />

                                    <label class="btn btn-primary mb-3" for="upload_image_logo">Choose file(s)</label>

                                    <div class="upload_gallery d-flex flex-wrap justify-content-center gap-3 mb-0"></div>

                                </fieldset>
                            </div>
                            @error('files')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            @error('files.*')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary" type="button" onclick="confirmAlert('form-store')"><svg class="icon"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-upload-cloud">
                            <polyline points="16 16 12 12 8 16"></polyline>
                            <line x1="12" y1="12" x2="12" y2="21"></line>
                            <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                            <polyline points="16 16 12 12 8 16"></polyline>
                        </svg> Buat arsip baru</button>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('script')
    <script>
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


        console.clear();
        ('use strict');


        (function() {

            'use strict';

            const preventDefaults = event => {
                event.preventDefault();
                event.stopPropagation();
            };

            const highlight = event =>
                event.target.classList.add('highlight');

            const unhighlight = event =>
                event.target.classList.remove('highlight');

            const getInputAndGalleryRefs = element => {
                const zone = element.closest('.upload_dropZone') || false;
                const gallery = zone.querySelector('.upload_gallery') || false;
                const input = zone.querySelector('input[type="file"]') || false;
                return {
                    input: input,
                    gallery: gallery
                };
            }

            const handleDrop = event => {
                const dataRefs = getInputAndGalleryRefs(event.target);
                dataRefs.files = event.dataTransfer.files;
                handleFiles(dataRefs);
            }


            const eventHandlers = zone => {

                const dataRefs = getInputAndGalleryRefs(zone);
                if (!dataRefs.input) return;

                ;
                ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(event => {
                    zone.addEventListener(event, preventDefaults, false);
                    document.body.addEventListener(event, preventDefaults, false);
                });

                ;
                ['dragenter', 'dragover'].forEach(event => {
                    zone.addEventListener(event, highlight, false);
                });;
                ['dragleave', 'drop'].forEach(event => {
                    zone.addEventListener(event, unhighlight, false);
                });

                zone.addEventListener('drop', handleDrop, false);

                dataRefs.input.addEventListener('change', event => {
                    dataRefs.files = event.target.files;
                    handleFiles(dataRefs);
                }, false);

            }

            const dropZones = document.querySelectorAll('.upload_dropZone');
            for (const zone of dropZones) {
                eventHandlers(zone);
            }


            function previewFiles(dataRefs) {
                if (!dataRefs.gallery) return;
                for (const file of dataRefs.files) {
                    let reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onloadend = function() {
                        let img = document.createElement('img');
                        img.className = 'upload_img mt-2';
                        img.setAttribute('alt', file.name);
                        img.src = reader.result;
                        dataRefs.gallery.appendChild(img);
                    }
                }
            }

            const handleFiles = dataRefs => {

                let files = [...dataRefs.files];

                if (!files.length) return;
                dataRefs.files = files;

                previewFiles(dataRefs);
                imageUpload(dataRefs);
            }

        })();
    </script>
@endsection
