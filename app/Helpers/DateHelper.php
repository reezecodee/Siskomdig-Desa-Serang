<?php

function formattedDate($date) {
    // Array bulan
    $months = [
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember',
    ];

    // Mengonversi tanggal
    $dateObj = new DateTime($date);
    $day = $dateObj->format('d'); // Ambil hari
    $month = $months[$dateObj->format('m')]; // Ambil nama bulan
    $year = $dateObj->format('Y'); // Ambil tahun

    // Mengembalikan format yang diinginkan
    return "$day $month $year";
}
