<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Officer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //

    public function index(Officer $officer)
    {
        $data = [
            'officer' => $officer
        ];
        return view('dashboard.officers.profile' , $data);
    }
}
