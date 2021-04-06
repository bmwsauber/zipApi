<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Imports\AddressImport;
use Maatwebsite\Excel\Facades\Excel;

/**
 * Class AddressImportController
 * @package App\Http\Controllers
 */
class AddressImportController extends Controller
{
    /**
     * @return string
     */
    public function updateAddressesCsv()
    {
        $this->exportCsvToDatabase();

        $response = collect([
            'status' => 'success',
            'message' => 'Addresses were loaded.',
        ]);
        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    protected function exportCsvToDatabase()
    {
        // Truncate table - is an "Adult decision!" :)
        // There is need a better way here.
        // I Suppose using additional table,
        // or even database would be a good point.
        // But "lazy" update each models (rows) - bad idea imho.
        Address::query()->truncate();
        Excel::import(new AddressImport(), storage_path('app/public/export/uszips.csv'));

        return;
    }
}
