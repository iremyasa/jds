<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UserImport implements ToModel
{
    public function model(array $row)
    {
        return new User([
            'id' => $row[0],
            'name' => $row[1],
            'email' => $row[2],
            'password' => $row[3]
        ]);
    }
}
