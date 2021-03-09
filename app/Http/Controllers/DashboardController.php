<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $data = array(
            'fname' => 'Ehis',
            'lname' => 'Ali',
            'age' => 20,
        );
        return Inertia::render('Dashboard/Index', $data);
    }
}
