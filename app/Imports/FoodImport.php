<?php

namespace App\Imports;


use App\Models\Food;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithStartRow;
class FoodImport implements ToModel , WithBatchInserts, WithStartRow
{
    /**
     * @param array $row
     *
     * @return Food
     */
    public function model(array $row)
    {
        return new Food([
            'name' => $row[0],
            'foodgroup' => $row[1],
            'calories' => $row[2],
            'fat' => $row[3],
            'protein' => $row[4],
            'carbohydrate' => $row[5],
            'sugars' => $row[6],
            'serving_weight' => $row[97],
            'serving_size' => $row[98],
            'status' => 1,
        ]);
    }


    public function batchSize(): int
    {
        return 1000;
    }


    public function startRow(): int
    {
        return 2;
    }


}
