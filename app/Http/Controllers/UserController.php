<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{



    

    public function export() 
    {
        return Excel::download(new UserExport, 'users.xlsx');
    }
}
