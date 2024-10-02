<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class StorageController extends Controller
{
    public function storagePage()
    {
        $title = 'Penyimpanan Data Aplikasi';

        // Ukuran penyimpanan perangkat
        $totalSpace = $this->deviceStorageGB()['totalSpace'];
        $freeSpace = $this->deviceStorageGB()['freeSpace'];

        // Ukuran database dan Ukuran storage yang digunakan
        $databaseSize = $this->databaseSizeMB();
        $storageSize = $this->getStorageUsage();

        // Penyimpanan digunakan
        $totalUsedSpace = $this->totalUsedSpaceGB();

        //percentage
        $percentage = $this->precentageUsed();

        // hitung partials
        $count = $this->countPartials();


        return view('admin.storage.index', compact('title', 'totalSpace', 'freeSpace', 'databaseSize', 'storageSize', 'totalUsedSpace', 'percentage', 'count'));
    }

    public function storageImagesPage($fileType)
    {
        $title = 'Semua Gambar Yang di Upload';
        if ($fileType === 'semua-gambar') {
            $directory = storage_path('app/public/images');
        } else if ($fileType === 'photo') {
            $directory = storage_path('app/public/profiles');
        } else {
            abort(404);
        }

        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($directory));

        $allFiles = [];

        // Looping setiap file dalam folder images dan subfolder-nya
        foreach ($files as $file) {
            if ($file->isFile()) {
                // Masukkan ke array allFiles
                $allFiles[] = $file->getFilename();
            }
        }

        $perPage = 10; // Menentukan jumlah item per halaman
        $currentPage = Paginator::resolveCurrentPage() ?: 1; // Menentukan halaman saat ini

        // Menggunakan fungsi array_slice untuk mengambil data sesuai halaman
        $currentPageFiles = array_slice($allFiles, ($currentPage - 1) * $perPage, $perPage);

        // Membuat paginasi manual menggunakan LengthAwarePaginator
        $paginatedFiles = new LengthAwarePaginator(
            $currentPageFiles, // Data file untuk halaman saat ini
            count($allFiles),  // Total data
            $perPage,          // Jumlah item per halaman
            $currentPage,      // Halaman saat ini
            ['path' => Paginator::resolveCurrentPath()] // Path untuk URL paginasi
        );

        return view('admin.storage.images', compact('title', 'paginatedFiles'));
    }

    public function storageArchivesPage()
    {
        $title = 'Semua Arsip Yang di Simpan';
        $directory = storage_path('app/public/archives');
        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($directory));

        $allFiles = [];

        // Looping setiap file dalam folder images dan subfolder-nya
        foreach ($files as $file) {
            if ($file->isFile()) {
                // Masukkan ke array allFiles
                $allFiles[] = $file->getFilename();
            }
        }

        $perPage = 10; // Menentukan jumlah item per halaman
        $currentPage = Paginator::resolveCurrentPage() ?: 1; // Menentukan halaman saat ini

        // Menggunakan fungsi array_slice untuk mengambil data sesuai halaman
        $currentPageFiles = array_slice($allFiles, ($currentPage - 1) * $perPage, $perPage);

        // Membuat paginasi manual menggunakan LengthAwarePaginator
        $paginatedFiles = new LengthAwarePaginator(
            $currentPageFiles, // Data file untuk halaman saat ini
            count($allFiles),  // Total data
            $perPage,          // Jumlah item per halaman
            $currentPage,      // Halaman saat ini
            ['path' => Paginator::resolveCurrentPath()] // Path untuk URL paginasi
        );

        return view('admin.storage.archives', compact('title', 'paginatedFiles'));
    }




    // ambil data penyimpanan

    private function deviceStorageGB()
    {
        $totalSpace = disk_total_space("/");
        $freeSpace = disk_free_space("/");
        $totalSpaceGB = round($totalSpace / 1024 / 1024 / 1024, 2); // Total space dalam GB
        $freeSpaceGB = round($freeSpace / 1024 / 1024 / 1024, 2); // Free space dalam GB

        return [
            'totalSpace' => $totalSpaceGB,
            'freeSpace' => $freeSpaceGB
        ];
    }

    private function databaseSizeMB()
    {
        $databaseName = env('DB_DATABASE');
        $size = DB::table('information_schema.tables')
            ->select(DB::raw("ROUND(SUM(data_length + index_length) / 1024 / 1024, 2) AS size"))
            ->where('table_schema', $databaseName)
            ->first();

        return $size->size;
    }

    public function getStorageUsage()
    {
        // Menghitung ukuran file di direktori storage
        // $directory = public_path('storage'); // Mendapatkan path ke direktori storage
        // $directory = base_path(); // Mendapatkan path ke direktori storage
        // $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($directory));
        // $usedSpace = 0;

        // foreach ($files as $file) {
        //     if ($file->isFile()) {
        //         $usedSpace += $file->getSize(); // Menambahkan ukuran file
        //     }
        // }

        // $usedSpaceGB = round($usedSpace / 1024 / 1024 / 1024, 2); // Menghitung ukuran dalam GB

        return $this->deviceStorageGB()['totalSpace'] - $this->deviceStorageGB()['freeSpace'];
    }


    private function totalUsedSpaceGB()
    {
        return $this->databaseSizeMB() + $this->getStorageUsage();
    }

    private function precentageUsed()
    {
        $totalStorageMB = disk_total_space("/") / (1024 * 1024);
        $percentageUsedDB = ($this->databaseSizeMB() / $totalStorageMB) * 100;
        $percentageUsedFile = ($this->getStorageUsage() / $this->deviceStorageGB()['totalSpace']) * 100;
        $percentageFreeSpace = ($this->deviceStorageGB()['freeSpace'] / $this->deviceStorageGB()['totalSpace']) * 100;

        return [
            'percentageFile' => $percentageUsedFile,
            'percentageDB' => $percentageUsedDB,
            'percentageFreeSpace' => $percentageFreeSpace
        ];
    }

    private function countPartials()
    {
        $fileCount = 0;
        $directoryPath = public_path('storage');

        // Membuka direktori
        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($directoryPath));

        // Menghitung setiap file
        foreach ($files as $file) {
            // Pastikan ini adalah file dan bukan direktori
            // Dan bukan file .gitignore
            if ($file->isFile() && $file->getFilename() !== '.gitignore') {
                $fileCount++; // Menambahkan 1 untuk setiap file
            }
        }


        // hitung table db
        $databaseName = env('DB_DATABASE');

        // Menghitung jumlah tabel dalam database
        $tableCount = DB::table('information_schema.tables')
            ->where('table_schema', $databaseName)
            ->count();


        return [
            'countFiles' => $fileCount,
            'countTables' => $tableCount,
        ];
    }
}
