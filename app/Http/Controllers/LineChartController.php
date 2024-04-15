<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LineChartController extends Controller
{
    public function lineChart()
    {
        $data = DB::table('accounts')
            ->orderBy('created_at')
            ->select('created_at', 'id')
            ->get();

        return response()->json($data);
    }
}
