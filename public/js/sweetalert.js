function confirmAlert(formID) {
    Swal.fire({
        title: 'Apakah kamu yakin?',
        text: "Apakah kamu benar-benar ingin menyimpan data ini?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, tentu!',
        cancelButtonText: 'Tidak, batalkan!'
    }).then((result) => {
        if (result.isConfirmed) {
            // Jika pengguna mengkonfirmasi, submit form
            document.getElementById(formID).submit(); // Submit form dengan ID yang sesuai
        }
    });
}

function deleteAlert(formID) {
    Swal.fire({
        title: 'Apakah kamu yakin?',
        text: "Apakah kamu benar-benar ingin menghapus data ini?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Tidak, batalkan!'
    }).then((result) => {
        if (result.isConfirmed) {
            // Jika pengguna mengkonfirmasi, submit form
            document.getElementById('delete-form-' + formID).submit(); // Submit form dengan ID yang sesuai
        }
    });
}

function changeStatus(formID, status) {
    let text = 'Apakah kamu ingin mengubah status keanggotaan anggota ini menjadi <b>Tidak aktif</b>?';

    if(status == 'active'){
        text = 'Apakah kamu ingin mengubah status keanggotaan anggota ini menjadi <b>Aktif</b>?'
    }

    Swal.fire({
        title: 'Apakah kamu yakin?',
        html: text,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, tentu!',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            // Jika pengguna mengkonfirmasi, submit form
            document.getElementById(`${formID}-${status}`).submit(); // Submit form dengan ID yang sesuai
        }
    });
}

function editAlert(formID) {
    // Ambil data awal dari elemen tabel
    const currentName = document.getElementById('name-input-' + formID).value;

    // Tampilkan SweetAlert dengan input field
    Swal.fire({
        title: 'Edit nama kategori',
        input: 'text',
        inputValue: currentName,
        showCancelButton: true,
        confirmButtonText: 'Ganti nama kategori',
        cancelButtonText: 'Batalkan',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        preConfirm: (newName) => {
            if (newName) {
                return newName;
            } else {
                Swal.showValidationMessage('Nama kategori tidak boleh kosong');
            }
        }
    }).then((result) => {
        if (result.isConfirmed) {
            // Masukkan data baru ke input hidden di form
            document.getElementById('name-input-' + formID).value = result.value;

            // Submit form untuk mengirim data baru ke server
            document.getElementById('edit-form-' + formID).submit();
        }
    });
}

function confirmLogoutAlert(formID) {
    Swal.fire({
        title: 'Apakah kamu yakin?',
        text: "Apakah kamu benar-benar ingin logout dari aplikasi?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, logout!',
        cancelButtonText: 'Tidak, batalkan!'
    }).then((result) => {
        if (result.isConfirmed) {
            // Jika pengguna mengkonfirmasi, submit form
            document.getElementById(formID).submit(); // Submit form dengan ID yang sesuai
        }
    });
}

// delete alert for archive (all)
function deleteAllArchive(id, month, year) {
    Swal.fire({
        title: 'Hapus jadwal',
        text: `Apakah kamu benar-benar ingin menghapus data kegiatan bulan ${month} ${year}? semua kegiatan bulan ${month} ${year} akan terhapus jika kamu menghapusnya.`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus semuanya!',
        cancelButtonText: 'Tidak!'
    }).then((result) => {
        if (result.isConfirmed) {
            // Jika pengguna mengkonfirmasi, submit form
            document.getElementById('delete-form-activity-' + id).submit(); // Submit form dengan ID yang sesuai
        }
    });
}

// alert doesn't delete category
function alertInfoDeleteCategory() {
    Swal.fire({
        title: 'Informasi',
        text: "Anda tidak dapat menghapus data ini dikarenakan ada produk UMKM yang terkait, jika Anda ingin menghapusnya Anda harus menghapus produk UMKM terkait satu per-satu.",
        icon: 'warning',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Oke',
    })
}

// delete member with his products
function deleteMemberAlert(formID) {
    Swal.fire({
        title: 'Hapus anggota UMKM?',
        text: "Jika Anda menghapus data anggota UMKM, semua produk yang dimilikinya akan juga ikut terhapus. Apakah Anda yakin ingin menghapusnya?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus anggota beserta produknya',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            // Jika pengguna mengkonfirmasi, submit form
            document.getElementById('delete-form-' + formID).submit(); // Submit form dengan ID yang sesuai
        }
    });
}
