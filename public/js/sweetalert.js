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
