<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function checkDiskSpace()
    {
        $minFreeSpace = 100 * 1024 * 1024; // 100 MB
        $freeSpace = disk_free_space(storage_path());

        // Jika ruang penyimpanan tidak mencukupi, langsung redirect
        if ($freeSpace < $minFreeSpace) {
            return redirect()->back()->with('failed', 'Penyimpanan server hampir penuh, tidak bisa mengunggah file baru.')->send();
        }
    }
}
