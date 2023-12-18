<?php

namespace App\Http\Controllers;

use App\Models\Fashion;
use App\Models\User;
use App\Models\Category;
use App\Models\RentLogs;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        
        $userCount = User::count();
        

        return view('dashboard', ['user_count' => $userCount]);
    }
}
