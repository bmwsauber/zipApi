<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;
use App\Imports\AddressImport;
use Maatwebsite\Excel\Facades\Excel;

class AddressImportController extends Controller
{
    public function updateAddressesCsv()
    {
        $this->downloadFileToStorage();

        $this->exportCsvToDatabase();

        return "Ok!";
    }

    protected function downloadFileToStorage()
    {
        // TODO Auto Download

        return;
    }

    protected function exportCsvToDatabase()
    {
        Address::query()->truncate();
        Excel::import(new AddressImport(), storage_path('app/public/export/uszips.csv'));

        return;
    }
}
