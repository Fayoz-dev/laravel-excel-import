<?php

namespace App\Http\Controllers;

use App\Imports\InfoImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class InfoController extends Controller
{
    public function parse(Request $request){

        $this->validate($request,[

            "file" => "required"

        ]);

        Excel::import(new InfoImport(), $request->file("file")->getRealPath());

        echo "Fayl yuklandi";

    }

}
