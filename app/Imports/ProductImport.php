<?php

namespace App\Imports;


use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class ProductImport implements ToModel, WithHeadingRow
{
   
  public function model (array $row){

    return new Product([


        "name"  => $row["name"],
        "price"  => $row["price"],
        "location"  => $row["location"],
        
        



    ]);
    
  }
}