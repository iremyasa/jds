<?php

namespace App\Imports;

use App\Menu;
use Maatwebsite\Excel\Concerns\ToModel;

class MenuImport implements ToModel
{
    public function model(array $row)
    {
        return new Menu([
            'baslangic' => $row[0],
            'anayemek' => $row[1],
            'tatli' => $row[2]
        ]);
    }
}
