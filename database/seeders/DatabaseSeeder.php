<?php

namespace Database\Seeders;

use App\Models\Data;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    CONST PATH = __DIR__ . '/data/data.csv';

    /**
     * Seed the application's database.
     * @throws \Exception
     */
    public function run(): void
    {
        $csv_data = new CsvData(self::PATH);
        foreach ($csv_data->getData() as $row){
            Data::create($row);
        }

    }


}
