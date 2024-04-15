<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account; 

class DashboardController extends Controller
{
    public function index(Request $request)
    {
      
        $accountCount = Account::count();

        $monthlyAccountData = Account::selectRaw('MONTH(updated_at) as month, COUNT(*) as account_count')
            ->groupByRaw('MONTH(updated_at)')
            ->get();

       
        $accountData = [
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            'datasets' => [
                [
                    'label' => 'Account Updates',
                    'data' => $monthlyAccountData->pluck('account_count')->toArray(),
                    'fill' => false,
                    'borderColor' => 'rgb(75, 192, 192)',
                    'tension' => 0.1
                ]
            ]
        ];

        
        $accounts = Account::all();

        return view('dashboard', ['accountData' => $accountData, 'accountCount' => $accountCount, 'monthlyAccountData' => $monthlyAccountData, 'accounts' => $accounts]);
    }

    public function lineChart()
    {
        $data = Account::orderBy('created_at')
            ->select('created_at', 'id')
            ->get();

        return response()->json($data);
    }
}
