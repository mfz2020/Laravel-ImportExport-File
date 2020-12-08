<?php

namespace App\Imports;
use App\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\OnEachRow;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //echo $row[0];
        //echo $row[1];
        //echo $row[2];
        // return new User([
        //     'name'     => $row[0],
        //     'email'    => $row[1],
        //     'password' => Hash::make($row[2])
        // ]);


    }
}