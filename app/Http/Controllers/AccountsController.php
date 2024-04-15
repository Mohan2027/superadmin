<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use App\Models\BillingPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class AccountsController extends Controller
{
    public function index(Request $request)
    {
        $query = Account::query();
        $filters=[];
      
        
        if ($request->has('filter_data')) {
            $filters = $request->input('filter_data');
    
            foreach ($filters as $key => $value) {
              
                if (!empty($value) && is_numeric($value)) {
                    $key = str_replace("'", "", $key);
                    $query->where($key, $value);
                }
            }
        }
        $accounts = $query->paginate(10);
        $billing = BillingPlan::all();
       
        return view('accounts', compact('accounts', 'filters', 'billing'));
    }
    
    public function details($id)
{
    $account = Account::find($id);

    if (!$account) {
        return Redirect::route('accounts')->with('error', 'Account not found.');
    }

    $users = User::where('account_id', $id)->paginate(10);

    
    $billing = BillingPlan::all();

    return view('details', ['account' => $account, 'users' => $users, 'billing' => $billing]);
}


    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'status' => 'required',
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'status' => $request->input('status'),
        ]);

        return redirect('/accounts/details')->with('success', 'User added successfully.');
    }

    public function addUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'status' => 'required',
            'password' => 'required|string|min:6',
            'account_id' => 'required|numeric', 
        ]);
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'status' => $request->input('status'),
            'password' => bcrypt($request->input('password')),
            'account_id' => $request->input('account_id'),
        ]);
        return response()->json(['message' => 'User added successfully'], 200);
    }

   

    public function updatePlanName(Request $request)
    {
        $selectedPlanId = $request->input('billing_plan_id');
        $accountId = $request->input('account_id');
        Account::where('id', $accountId)->update(['billing_plan_id' => $selectedPlanId]);
        return response()->json(['message' => 'Plan ID updated successfully', 'plan_id' => $selectedPlanId], 200);
    }
    
    
    
    
    
    public function softDelete($id)
    {
        $user = User::findOrFail($id);
        $user->status = 0; 
        $user->save();
        return redirect('/accounts/details/' . $user->account_id)->with('success', 'User soft deleted successfully.');
    }

    public function deactivateAccount($id)
    {
        $account = Account::findOrFail($id);
        $account->status = 0; 
        $account->save();
        return response()->json(['message' => 'Account deactivated successfully']);
    }

    public function activateAccount($id)
    {
        $account = Account::findOrFail($id);
        $account->status = 1; 
        $account->save();
        return response()->json(['message' => 'Account activated successfully']);
    }

    
    public function updateTrialPeriod(Request $request, $id)
    {
        $account = Account::find($id);
        if (!$account) {
            return response()->json(['error' => 'Account not found'], 404);
        }
        $account->trial_ends_at = $request->input('trial_ends_at');
        $account->save();
        return response()->json(['message' => 'Trial period updated successfully'], 200);
    }
    
    
    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|string|min:6', 
        ]);
        $user = User::find($id);
        if (!$user) {
            return redirect('/accounts')->with('error', 'User not found.');
        }
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->status = $request->input('status');
        if ($request->has('password')) {
            $user->password = bcrypt($request->input('password'));
        }
    
        $user->save();
    
        return redirect('/accounts')->with('success', 'User updated successfully.');
    }
    
}