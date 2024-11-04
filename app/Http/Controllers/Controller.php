<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function checkDiskSpace()
    {
        $minFreeSpace = 30 * 1024 * 1024; // 30 MB
        $freeSpace = disk_free_space(storage_path());

        if ($freeSpace < $minFreeSpace) {
            $freeSpaceInMB = round($freeSpace / (1024 * 1024), 2);
            return redirect()->back()->with('failed', "Penyimpanan server tersisa {$freeSpaceInMB} MB dan hampir penuh, tidak bisa mengunggah file baru.")->send();
        }
    }
}
