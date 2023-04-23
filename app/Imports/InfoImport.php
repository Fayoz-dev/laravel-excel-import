<?php

namespace App\Imports;


use App\Models\Info;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class InfoImport implements ToModel, WithHeadingRow
{
   
  public function model (array $row){

    return new Info([


        "name"  => $row["name"],
        "surname"  => $row["surname"],
        "age"  => $row["age"],
        "country"  => $row["country"],
        



    ]);
    
  }
}


