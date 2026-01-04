<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class AnalysisController extends Controller
{
    public function index(){
        $startDate = '2022-08-01';
        $endDate = '2022-08-10';


        return Inertia::render('Analysis');
    }
}
