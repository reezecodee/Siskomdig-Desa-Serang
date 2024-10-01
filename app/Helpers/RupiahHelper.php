<?php

function idr($amount) {
    return "Rp " . number_format($amount, 2, ',', '.');
}
