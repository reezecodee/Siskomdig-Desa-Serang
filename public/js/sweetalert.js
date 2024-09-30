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
