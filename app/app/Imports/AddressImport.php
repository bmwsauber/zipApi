<?php

namespace App\Imports;

use App\Models\Address;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithStartRow;


class AddressImport implements ToModel, WithStartRow, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Address([
            'zip' => $row[0],
            'city' => $row[3],
            'lat' => $row[1],
            'lng' => $row[2],
            'state_id' => $row[4],
            'state_name' => $row[5],
            'zcta' => $row[6],
            'parent_zcta' => $row[7],
            'population' => $row[8],
            'density' => $row[9],
            'county_fips' => $row[10],
            'county_name' => $row[11],
            'county_weights' => $row[12],
            'county_names_all' => $row[13],
            'county_fips_all' => $row[14],
            'imprecise' => $row[15],
            'military' => $row[16],
            'timezone' => $row[17],
        ]);
    }

    public function startRow() : int
    {
        return 2;
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
