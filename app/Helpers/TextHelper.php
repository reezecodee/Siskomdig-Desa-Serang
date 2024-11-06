<?php

function idr($amount) {
    return "Rp " . number_format($amount, 2, ',', '.');
}

function truncateText($text, $maxLength = 47) {
    if (mb_strlen($text) > $maxLength) {
        return mb_strimwidth($text, 0, $maxLength, '...');
    }
    return $text;
}

function whatsapp($phone) {
    if (substr($phone, 0, 2) === '08') {
        $phone = '62' . substr($phone, 1);
    }

    return $phone;
}

