<?php

namespace App\Http\Controllers;

use App\Imports\ProductImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function product(Request $request){

        $this->validate($request,[

            "file" => "required"

        ]);


        

        Excel::import(new ProductImport(), $request->file("file")->getRealPath());

        echo "Fayl yuklandi";


        

    }

}